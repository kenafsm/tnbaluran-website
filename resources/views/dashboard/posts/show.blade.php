@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <h2 class="mb-5">{{ $post->category->name }}</h2>
    <h3 class="mb-5">{{ $post->title }}</h3>
    <div class="row my-3">
        <div class="col-lg-8">

            <div class="d-grid gap-2 d-md-block">
                <a href="{{ route('posts.edit', $post->slug) }}" class="btn btn-warning"><i class="bi bi-pencil-square text-nowrap"></i>Edit</a>
                <form action="{{ route('posts.destroy', $post->slug) }}" method="POST" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger" onclick="return confirm('Yakin menghapus post?')"><i class="bi bi-eraser-fill"></i>
                    Hapus</button>
                </form>
            </div>
            @if ($post->post_image)
            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/' . $post->post_image) }}" alt="Post Image" class="img-fluid">
            </div>
            @endif
            <p>Nama Latin : {{ $post->nama_latin }}</p>
            <p>Kepadatan : {{ $post->kepadatan }}</p>
            <p>Sebaran : {{ $post->sebaran }}</p>
            <p>Status : {{ $post->status }}</p>
            <h4>Bentuk Daun</h4>
            @if ($post->bentuk_daun)
            <div style="max-height: 350px; overflow:hidden;">
                <img src="{{ asset('storage/' . $post->bentuk_daun) }}" alt="Bentuk Daun" class="img-fluid">
            </div>
                @endif
            <h4>Morfologi</h4>
            <p>{{ $post->morfologi }}</p>
            <h4>Anatomi</h4>
            <p>{{ $post->anatomi }}</p>
            <h4>Kegunaan</h4>
            <p>{{ $post->kegunaan }}</p>
            <h4>Deskripsi</h4>
            <p>{{ $post->deskripsi }}</p>
        </div>
</div>
</div>
@endsection
