@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Posts</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success col-lg-8" role="alert">
  {{ session('success') }}
</div>
@endif

<div class="table-responsive small col-lg-8">
  <a href="/dashboard/posts/create" class="btn btn-primary mb-3">Buat post baru</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Nama Post</th>
              <th scope="col">Kategori</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($posts as $post)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $post->title }}</td>
              <td>{{ $post->category_id }}</td>
              <td>
                <a href="/dashboard/posts/{{$post->slug}}" class="badge bg-info">
                <i class="bi bi-eye-fill"></i></a>
                <a href="/dashboard/posts/{{$post->slug}}/edit" class="badge bg-warning">
                <i class="bi bi-pencil-square"></i></a>
                <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
                @method('delete')
                @csrf
                <button class="badge bg-danger border-0" onclick="return confirm('Yakin menghapus post?')"><i class="bi bi-eraser-fill"></i></button>
                </form>
                </a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
@endsection