<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(Request $request){

        if($request->has('title')){
            $Post = new Post();

            $Post->fill([
                'title' => $request->input('title'),
                'content' => $request -> input('content'),
                'author' => $request -> input('author'),
            ]);

            if ($request->has('img')){
                $Post->fill(['img' => $request -> input('img')])->save();
            }
            else{
                $Post->save();
            }
        }


        $posts = Post::all();

        return view('home', ['posts' => $posts]);
    }

    public function show($id){

        $posts = Post::where('id', $id)->get();

        return view('home', ['posts' => $posts]);
    }

    public function delete($id){

        $Post = Post::where('id', $id);
        $Post->delete();

        return redirect('/posts');
    }
}
