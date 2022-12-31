<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Posts;
use App\Models\comments;

class PostsController extends Controller
{
    public function GetPost(Request $request){

    }

    public function show()
    {   
        $posts = Posts::select()->get();
        return view('main', ['posts'=> $posts]);
    }

    public function showPost(Posts $post)
    {
        $comments = $post->comments;
        return view('post', ['post'=> $post, 'comments' => $comments]);
    }
    
    public function ShowAdminPost(){
        $posts = Posts::select()->where("nickname", "=", $nickname);
    }
}
