@extends('layouts.main')

@section('title', 'Flora')

@section('container')

<div class="post-name">
    <h2>FLORA</h2>
  </div>
  <img class="imgpost" src="assets/bidara.jpg" alt="flora-bidara" />
        <div class="cards">
            @foreach ($posts as $post)
                <div class="card" style="background-image: url('{{ asset('storage/' . $post->post_image) }}');">
                    <a href="/flora-detail/{{ $post->slug }}">{{ $post->title }}</a>
                </div>
            @endforeach
        </div>
@endsection