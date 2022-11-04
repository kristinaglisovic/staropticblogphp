<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Comment;
use App\Models\Contact;
use App\Models\PasswordReset;
use App\Models\Post;
use App\Models\Role;
use App\Models\User;
use App\Models\UserActivityLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BackendController extends Controller
{

    public function dashboard()
    {
        return view('admin.pages.dashboard',[
            'pageName'=>"Kontrolna tabla",
            'brojUsera'=>count(User::all()),
            'brojPoruka'=>count(Contact::all()),
            'brojKomentara'=>count(Comment::all()),
            'brojAktivnosti'=>count(UserActivityLog::all())
        ]);
    }

    public function contact()
    {
        $contact=Contact::all();
        return view('admin.pages.contact',[
            'pageName'=>"Kontakt forma - poruke",
            'messages'=>$contact
        ]);
    }
    public function comments()
    {
        $comments=Comment::with('post')->get();
        $posts=Post::with('comments')->get();
        return view('admin.pages.comments',[
            'pageName'=>"Komentari ",
            'comments'=>$comments,
            'posts'=>$posts
        ]);

    }


    public function destroyMessage(Contact $m){
        $m->delete();
        return redirect(route('admin.contact'))->with([
            'msg'=>'Poruka je uspešno obrisana',
        ]);
    }


    public function destroyCommentBack(Comment $comment){
        $comment->delete();
        return redirect(route('admin.comments'))->with([
            'msg'=>'Komentar je uspešno obrisan',
        ]);
    }
    public function destroyCommentFront(Comment $comment){
        $comment->delete();
        return redirect()->back();
    }

    public function truncateMessages(){
        DB::table('contacts')->truncate();
        return redirect(route('admin.contact'))->with([
            'msg'=>'Poruke su uspešno obrisane',
        ]);
    }
//






}
