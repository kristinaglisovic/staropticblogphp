<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\File\Exception\FileException;

class PostController extends BackendController
{
    public function destroyPost(Post $post){
        $post->delete();
        return redirect(route('admin.comments'))->with([
            'msg2'=>'Post je uspešno obrisan',
        ]);
    }

    public function createPage()
    {
        $categories=Category::all();
        return view('admin.pages.create_post',[
           'pageName'=>"Kreiranje postova",
            'categories'=>$categories
        ]);
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required|min:5|max:50',
            'main_photo'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'main_text'=>'required|min:5',
            'subtitle'=> 'required|min:5|max:50' ,
            'subtitle_text_1'=>'required|min:5',
            'subtitle_text_2'=>'nullable|min:5',
            'quote'=>'nullable|min:5|max:100',
            'category_id'=>'required'
        ]);

            $directory = public_path("assets/postImages/");
            $mainPhoto = $request->file('main_photo');
            $fileNameMain = time() . "_" . $mainPhoto->getClientOriginalName();


            $mainPhoto->move($directory, $fileNameMain);

            $p=new Post();

            $p->title=$request->title;
            $p->main_text=$request->main_text;
            $p->subtitle=$request->subtitle;
            $p->subtitle_text1=$request->subtitle_text_1;
            $p->subtitle_text2=$request->subtitle_text_2;
            $p->quote=$request->quote;
            $p->user_id=session()->get('user')->id;
            $p->main_photo=$fileNameMain;
            $p->alt='blog post';
            $p->category_id=$request->category_id;
            $p->save();

        return redirect(route('post.create'))->with([
            'msg'=>'Post je uspešno kreiran',
            //klasa koja boji polja
            "sent"=>"uspesno"
        ]);

    }

    public function edit($id){
        $postToEdit=Post::find($id);
        $categories=Category::all();
        return view('admin.pages.edit-post',[
            'pageName'=>"Edit post",
            'post'=>$postToEdit,
            'categories'=>$categories
        ]);
    }

    public function update(Request $request,Post $post){
        $request->validate([
            'title'=>'required|min:5|max:50',
            'main_text'=>'required|min:5',
            'subtitle'=> 'required|min:5|max:50' ,
            'subtitle_text_1'=>'required|min:5',
            'subtitle_text_2'=>'nullable|min:5',
            'quote'=>'nullable|min:5|max:100',
            'category_id'=>'required'
        ]);



        if($request->hasFile('main_photo')) {
            $request->validate(['main_photo'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048']);
            $mainPhoto = $request->file('main_photo');
            $directory = public_path("assets/postImages/");
            $fileNameMain = time() . "_" . $mainPhoto->getClientOriginalName();
            $mainPhoto->move($directory, $fileNameMain);
            $post->main_photo=$fileNameMain;
        }

        $post->title=$request->title;
        $post->main_text=$request->main_text;
        $post->subtitle=$request->subtitle;
        $post->subtitle_text1=$request->subtitle_text_1;
        $post->subtitle_text2=$request->subtitle_text_2;
        $post->quote=$request->quote;
        $post->category_id=$request->category_id;
        $post->alt='blog post';
        $post->save();

        return redirect(route('post.edit',$post->id))->with([
            'msg'=>'Post je uspešno izmenjen',
            //klasa koja boji polja
            "sent"=>"uspesno"
        ]);
    }

    public function statusUpdate(Post $post)
    {
        if ($post->status == 'Neobjavljeno') {
            $post->update(['status' => 'Objavljeno']);
        } else if ($post->status == 'Objavljeno') {
            $post->update(['status' => 'Neobjavljeno']);
        }
        $post->save();
        return redirect(route('admin.comments'))->with([
            'msg2'=>'Status je uspešno izmenjen',
        ]);
    }

}

