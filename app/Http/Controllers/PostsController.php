<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Cache;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if ($posts = Redis::get('posts.all')) {
            json_decode($posts);
        }

        $posts = Post::all();
        Redis::set('posts.all', json_encode($posts));

        return view('index', compact('posts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::where('id',$id)->firstOrFail();
        visits($post)->forceIncrement();
        return view('show', compact('post'));
    }

    public function list(){
        $posts = Cache::remember('posts.latest', 60 * 60 * 24, function () {
            return Post::orderBy('id','desc')->limit(5)->get();
        });
        return view('index',compact('posts'));
    }
}
