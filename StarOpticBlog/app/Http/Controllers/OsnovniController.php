<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Models\Post;

class OsnovniController extends Controller
{
    protected $data=[];
    public function __construct()
    {
        $this->data['menu']=Menu::all();
        $this->data['latestPosts']=Post::where('status','Objavljeno')->latest()->take(3)->get();
    }

}

