<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.posts.index', [
            'posts' => Post::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.posts.create', [
            'categories' => Category::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'required',
            'post_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'slug' => 'required|unique:posts,slug',
            'nama_latin' => 'nullable',
            'kepadatan' => 'nullable',
            'sebaran' => 'nullable',
            'status' => 'nullable',
            'bentuk_daun' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'morfologi' => 'nullable',
            'anatomi' => 'nullable',
            'kegunaan' => 'nullable',
            'deskripsi' => 'nullable',
        ]);

        if ($request->file('post_image')) {
            $validatedData['post_image'] = $request->file('post_image')->store('post_images');
        }

        if ($request->file('bentuk_daun')) {
            $validatedData['bentuk_daun'] = $request->file('bentuk_daun')->store('bentuk_daun_images');
        }

        Post::create($validatedData);

        return redirect('dashboard/posts/')->with('success', 'Berhasil menambahkan post');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('dashboard.posts.show', [
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('dashboard.posts.edit', [
            'post' => $post,
            'categories' => Category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {

    
    $rules = [
        'title' => 'nullable',
        'slug' => 'nullable|unique:posts,slug,' . $post->id,
        'category_id' => 'nullable',
        'nama_latin' => 'nullable',
        'kepadatan' => 'nullable',
        'sebaran' => 'nullable',
        'status' => 'nullable',
        'post_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'bentuk_daun' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'morfologi' => 'nullable',
        'anatomi' => 'nullable',
        'kegunaan' => 'nullable',
        'deskripsi' => 'nullable'
    ];

    if ($request->slug != $post->slug) {
        $rules['slug'] = 'required|unique:posts';
    }

    $validatedData = $request->validate($rules);

    if ($request->file('post_image')) {
        if($request->oldImage) {
            Storage::delete($request->oldImage);
        }
        $validatedData['post_image'] = $request->file('post_image')->store('post_images');
    }

    if ($request->file('bentuk_daun')) {
        if($request->oldImage) {
            Storage::delete($request->oldImage);
        }
        $validatedData['bentuk_daun'] = $request->file('bentuk_daun')->store('bentuk_daun_images');
    }

    Post::where('id', $post->id)->update($validatedData);

    return redirect('/dashboard/posts')->with('success', 'Berhasil mengubah post!');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        Post::destroy($post->id);
        return redirect('/dashboard/posts')->with('success', 'Berhasil menghapus post!');
    }
}
