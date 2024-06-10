@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Buat post baru</h1>
</div>


<div class="col-lg-8">
    <form method="POST" action="/dashboard/posts" class="mb-5" enctype="multipart/form-data">
    @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror"  id="title" name="title">
        @error('title')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Post Image</label>
        <input class="form-control @error('post_image') is-invalid @enderror" type="file" id="image" name="post_image">
        @error('post_image')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug') is invalid @enderror" id="slug" name="slug">
        @error('slug')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="category" class="form-label">Kategori</label>
        <select class="form-select" name="category_id">
        @foreach ( $categories as $category )
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Nama Latin</label>
        <textarea class="form-control @error('nama_latin') is invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="nama_latin"></textarea>
        @error('nama_latin')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Kepadatan</label>
        <textarea class="form-control @error('kepadatan') is invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="kepadatan"></textarea>
        @error('kepadatan')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Sebaran</label>
        <textarea class="form-control @error('sebaran') is invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="sebaran"></textarea>
        @error('sebaran')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Status</label>
        <textarea class="form-control @error('status') is invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="status"></textarea>
        @error('status')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Bentuk Daun</label>
        <input class="form-control @error('bentuk_daun') is invalid @enderror" type="file" id="image" name="bentuk_daun">
        @error('bentuk_daun')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Morfologi</label>
        <textarea class="form-control @error('morfologi') is invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="morfologi"></textarea>
        @error('morfologi')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Anatomi</label>
        <textarea class="form-control @error('anatomi') is invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="anatomi"></textarea>
        @error('anatomi')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Kegunaan</label>
        <textarea class="form-control @error('kegunaan') is invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="kegunaan"></textarea>
        @error('kegunaan')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
        <textarea class="form-control @error('deskripsi') is invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
        @error('deskripsi')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Create Post</button>
    </form>
</div>

@endsection