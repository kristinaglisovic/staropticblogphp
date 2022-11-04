<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\Home;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;


class FrontController extends OsnovniController
{


    public function home(){
        $this->data['pocetna']=Home::all();
        return view('front.pages.main.index',$this->data);
    }


    public function author(){
        return view('front.pages.main.author',$this->data);
    }

    public function contact(){
        return view('front.pages.main.contact',$this->data);
    }

    public function storeMessage(Request $request){
        //validation
        $data=$request->validate([
            'firstname'=>'required|regex:/^([A-ZŽŠĐČĆa-zžšđčć][a-zšđčćžA-ZŽČĆŠĐ]*)$/|min:2|max:20',
            'lastname'=>'required|regex:/^([A-ZŽŠĐČĆa-zžšđčć][a-zšđčćžA-ZŽČĆŠĐ]*)$/|min:2|max:20',
            'email'=>'required|email',
            'message'=>'required|max:255|regex:/^([ĐŠŽČĆA-zžšđčć0-9][\.\-\,]*(\s)*)+$/',
            'phone'=> 'nullable|regex:/^(\+\d{1,2}\s?)?1?\-?\.?\s?\(?\d{3}\)?[\s.-]?\d{3}[\s.-]?\d{4}$/' ,
        ]);

        $c=new Contact();

        $c->first_name=$request->firstname;
        $c->last_name=$request->lastname;
        $c->phone=$request->phone;
        $c->email=$request->email;
        $c->message=$request->message;

        $c->save();

        Mail::to('staropticblog22@gmail.com')->send(new \App\Mail\Contact($data));

        return redirect(route('contact'))->with([
            'msg'=>'Poruka je uspešno poslata',
            //klasa koja boji polja
            "sent"=>"uspesno"
        ]);


    }

    //BLOG
    public function posts(Request $request){
        $request->validate([
            'keyword'=>'max:20',
        ]);
        if($request->keyword){
            $this->data['posts']=Post::where('status','Objavljeno')
                ->where(function ($query) use ($request) {
                    $query->where('title','like','%'.$request->keyword.'%')
                          ->orWhere('main_text','like','%'.$request->keyword.'%');
                })->latest()->paginate(4);
        }
        elseif ($request->category){
            $this->data['posts']=Post::where('status','Objavljeno')->where('category_id',$request->category)->latest()->paginate(4);
        }
        else{
            $this->data['posts']=Post::where('status','Objavljeno')->latest()->paginate(4);
        }
        $this->data['categories']=Category::with('posts')->get();
        return view('front.pages.blog.main',$this->data);
    }

    public function showPost(Request $request,Post $post){
        $request->validate([
            'keyword'=>'max:20',
        ]);
        if($request->keyword){
            $this->data['posts']=Post::where('status','Objavljeno')
                ->where(function ($query) use ($request) {
                    $query->where('title','like','%'.$request->keyword.'%')
                        ->orWhere('main_text','like','%'.$request->keyword.'%');
                })->latest()->paginate(4);
            $this->data['categories']=Category::with('posts')->get();
            return view('front.pages.blog.main',$this->data);
        }
        //pageView
        $this->data['posts']=Post::where('status','=','Objavljeno')->get();
        $post->increment('visit_count');


        $this->data['post']=$post;
        $this->data['categories']=Category::with('posts')->get();
        //kategorija dohvacenog proizvoda
        $category=$post->category()->first();
        $this->data['povezaniPostovi'] = $category->posts()->where('status','Objavljeno')->where('id', '!=', $post->id)->latest()->take(3)->get();

        $this->data['comments']=$post->comments()->with('user')->get();

        //NEXT AND PREVIOUS
       //  get previous post id
        $prethodniInt= Post::where('id', '<', $post->id)->where('status','Objavljeno')->max('id');
        $this->data['prethodniPost']=Post::where('status','Objavljeno')->find($prethodniInt);

        // get next post id
        $sledeciInt= Post::where('id', '>', $post->id)->where('status','Objavljeno')->min('id');

        $this->data['sledeciPost']=Post::where('status','Objavljeno')->find($sledeciInt);

        return view('front.pages.blog.single-blog-post',$this->data);

    }

    public function destroy(Post $post){
        $post->delete();
        return redirect(route('posts'))->with([
            'msg'=>'Post je uspešno obrisan',
        ]);
    }


    public function commentStore(Request $request){
        $request->validate([
            'comment'=>'required|max:255|regex:/^([ĐŠŽČĆA-zžšđčć0-9][\.\-\,]*(\s)*)+$/',
        ]);

        $c=new Comment();
        $c->comment=$request->comment;
        $c->user_id=$request->user_id;
        $c->post_id=$request->post_id;
        $c->save();

        $user=session()->get('user');
        $activityLog=[
            'username'=>$user->username,
            'email'=>$user->email,
            'role_name'=>$user->role->name,
            'activity'=>'Komentarisao'
        ];
        DB::table('user_activity_logs')->insert($activityLog);

        return redirect()->back()->with([
            'msg'=>'Komentar je uspešno objavljen',
            //klasa koja boji polja
            "sent"=>"uspesno"
        ]);
    }
}
