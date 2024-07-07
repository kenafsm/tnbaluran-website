@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Edit Post</h1>
</div>


<div class="col-lg-8">

    <form method="POST" action="{{ route('posts.update', $post->slug) }}" class="mb-5" enctype="multipart/form-data">
      @method('PUT')
      @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror"  id="title" name="title"
         value="{{old('title', $post->title)}}">
        @error('title')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Post Image</label>
        <input type="hidden" name="oldImage" value="{{ $post->post_image }}">
        <input class="form-control @error('post_image') is-invalid @enderror" type="file" id="image" name="post_image">
        @error('post_image')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug') is invalid @enderror" id="slug" name="slug" value="{{old('slug', $post->slug)}}">
        @error('slug')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="kategori" class="form-label">Kategori</label>
        <select class="form-select" name="category_id">
        @foreach ( $categories as $category )
        @if (old('category_id', $post->category_id) == $category->id)
        <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
        @else
        <option value="{{ $category->id }}">{{ $category->name }}</option>
        @endif
        @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Nama Latin</label>
        <textarea class="form-control @error('nama_latin') is invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="nama_latin">{{old('nama_latin', $post->nama_latin)}}</textarea>
        @error('nama_latin')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Kepadatan</label>
        <textarea class="form-control @error('kepadatan') is invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="kepadatan">{{old('kepadatan', $post->kepadatan)}}</textarea>
        @error('kepadatan')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Sebaran</label>
        <textarea class="form-control @error('sebaran') is invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="sebaran">{{old('sebaran', $post->sebaran)}}</textarea>
        @error('sebaran')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Status</label>
        <textarea class="form-control @error('status') is invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="status">{{old('status', $post->status)}}</textarea>
        @error('status')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Bentuk Daun</label>
        <input type="hidden" name="oldImage" value="{{ $post->bentuk_daun }}">
        <input class="form-control @error('bentuk_daun') is invalid @enderror" type="file" id="image" name="bentuk_daun">
        @error('bentuk_daun')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Morfologi</label>
        <textarea class="form-control @error('morfologi') is invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="morfologi">{{old('morfologi', $post->morfologi)}}</textarea>
        @error('morfologi')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Anatomi</label>
        <textarea class="form-control @error('anatomi') is invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="anatomi">{{old('anatomi', $post->anatomi)}}</textarea>
        @error('anatomi')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Kegunaan</label>
        <textarea class="form-control @error('kegunaan') is invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="kegunaan">{{old('kegunaan', $post->kegunaan)}}</textarea>
        @error('kegunaan')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi</label>
        <textarea class="form-control @error('deskripsi') is invalid @enderror" id="exampleFormControlTextarea1" rows="3" name="deskripsi">{{old('deskripsi', $post->deskripsi)}}</textarea>
        @error('deskripsi')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
      </div>
      <button type="submit" class="btn btn-primary">Update Post</button>
    </form>
</div>
@endsection