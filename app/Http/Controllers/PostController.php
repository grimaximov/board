<?php

namespace App\Http\Controllers;
use App\Models\Post;

use Illuminate\Http\Request;

class PostController extends Controller
{
   public function index(){
    $post = Post::find(2);
    dd($post->content);
   }
}
