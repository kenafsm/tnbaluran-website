<?php

namespace App\Http\Controllers;

use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($post)
    {
        if ($post == 'situs') {
            $posts = Post::where('category_id', 2)->get();
        } elseif ($post == 'flora') {
            $posts = Post::where('category_id', 1)->get();
        } else {
            abort(404, 'Type not found');
        }

        return view($post, compact('posts'));
    }

    public function show($post, $slug)
    {
    
        if ($post == 'situs' || $post == 'flora') {
            $post = Post::where('slug', $slug)->first();
            if (!$post) {
                abort(404, 'Post not found');
            }
        } else {
            abort(404, 'Type not found');
        }

        if ($post == 'situs') {
            return view('situs-detail', compact('post'));
        } else {
            return view('flora-detail', compact('post'));
        }

    }

}