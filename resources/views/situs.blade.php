@extends('layouts.main')

@section('title', 'Situs')

@section('container')

<div class="post-name">
    <h2>SITUS</h2>
  </div>
  <img class="imgpost" src="assets/savanabekol.jpg" alt="savana-bekol" />
<div class="cards">
    @foreach ($posts as $post)
        <div class="card" style="background-image: url('{{ asset('storage/' . $post->post_image) }}');">
            <a href="{{ route('situs-detail', ['slug' => $post->slug]) }}">{{ $post->title }}</a>
        </div>
    @endforeach
</div>
@endsection