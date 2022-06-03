<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
$posts = Post::orderBy('title')->take(3)->get();

        return view('articles', [
            'posts' =>$posts,
        ]);
    }
    public function show($id)
    {
         $post = Post::findOrFail($id);
            // $post = Post::where('title', '=','Ratione quae blanditiis quisquam amet in quia.')->firstOrFail();

        return view('article', [
        'post' => $post
        ]);
    }
    public function create(){
        return view('form');

    }
    public function store(Request $request){
        dd($request->file('avatar'));

        // $post = new Post();
        // $post->title = $request->title;
        // $post->content = $request->content;
        // $post->save();


Post::create([
    'title' => $request->title,
    'content'=> $request->content,
]);

        dd('post cree');

    }
    public function contact()
    {

        return view('contact');
    }

}
