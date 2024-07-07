<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

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

    public function show(Request $request, $slug)
    {
        $postType = $request->route()->defaults['post'];
        $postDetail = Post::where('slug', $slug)->first();
        if (!$postDetail) {
            abort(404, 'Post not found');
        }

        if ($postType == 'situs-detail') {
            return view('situs-detail', compact('postDetail'));
        } elseif ($postType == 'flora-detail') {
            return view('flora-detail', compact('postDetail'));
        } else {
            abort(404, 'Type not found');
        }
    }

}