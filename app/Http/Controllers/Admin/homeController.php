<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        $posts_count = Post::all()->count();
        return view('admin.home.index',[
            'posts_count'=>$posts_count
        ]);
    }
    public function search(Request $request){
        $q=$request->q;
        $posts=Post::where('text','LIKE',"%{$q}%")->orderBy('id')->paginate();
        return view('admin.post.index',[
            'posts'=>$posts
        ]);
    }
}
