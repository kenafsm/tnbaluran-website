@extends('layouts/main')
  
@section('title', 'Landing - Taman Nasional Baluran')

@section('container')
        <div class="landing">
            <h2>
                Selamat Datang
            </h2>
            <h3>Cari tahu tentang
              informasi menarik 
              Taman Nasional Baluran disini! </h3>
            <div class="buttons">
                <a href="{{route('flora')}}">Flora</a>
                <a href="{{route('situs')}}">Situs</a>
                <a href="https://www.balurannationalpark.id/">Web Baluran</a>
            </div>
      </div>
@endsection

  
