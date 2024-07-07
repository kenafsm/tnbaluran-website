@extends('layouts.main')

@section('title', $postDetail->title)

@section('container')
    <h2 class="post-name">{{ $postDetail->title }}</h2>
    @if ($postDetail->post_image)
        <img src="{{ asset('storage/' . $postDetail->post_image) }}" alt="Post Image" class="imgpost">
    @endif
    <div class="content">
        <svg width="98" height="98" viewBox="0 0 98 98" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M49 98C76.062 98 98 76.062 98 49C98 21.938 76.062 0 49 0C21.938 0 0 21.938 0 49C0 76.062 21.938 98 49 98Z" fill="#374231"/>
            <g filter="url(#filter0_d_14_1220)">
            <path d="M75.4 64.7C75.4 71.4 68 81.1 60.4 81.1C55.4 81 51.7 76.2 50.4 74.3C49.8 75.2 44.6 82 38.4 82C32.2 82 25.4 75.8 23.4 66.6C22.521 62.6936 22.3853 58.6566 23 54.7C28.1 60.7 34.3 64.8 36.1 63.5C36.1 63.5 37.2 63.2 36.5 61.3C34.9 56.9 27.8 54.3 23.4 52.5C24.252 48.3102 25.6295 44.2447 27.5 40.4C31.3 44.9 35.7 47.9 37.3 47C37.3 47 38.3 46.8 37.8 45.2C36.9 42 32.4 39.7 28.7 38C30.1656 35.0531 31.8364 32.2128 33.7 29.5C36.2 33.1 38.6 35.4 39.5 34.7C40.4 34 40.1 34.6 39.7 33C39.3 31.4 37.3 28.7 35.4 27.1C38.5168 22.7326 41.8545 18.5271 45.4 14.5C49.4044 17.952 53.1479 21.6956 56.6 25.7C54.8 27.8 53.1 30.3 53 33C52.9 35.7 53.6 34.6 53.6 34.6C53.6 34.6 56.7 32.1 58.4 27.8C60.5 30.3 62.6 33 64.6 35.9C61.4 38.3 57.5 41.3 57.3 44.5C57.1 47.7 58.2 46.2 58.2 46.2C62.5 42 63.4 43.3 66.2 38.4C68.4979 41.9142 70.4726 45.6294 72.1 49.5C68.1 52.1 62.5 55.8 61.9 60.1C61.6 62.2 62.7 62.2 62.7 62.2C64.6 63.1 69.4 58.5 73.1 52.2C74.5467 56.2124 75.3238 60.4354 75.4 64.7Z" fill="white"/>
            <path d="M75.4 64.7C75.4 71.4 68 81.1 60.4 81.1C55.4 81 51.7 76.2 50.4 74.3C49.8 75.2 44.6 82 38.4 82C32.2 82 25.4 75.8 23.4 66.6C22.521 62.6936 22.3853 58.6566 23 54.7C28.1 60.7 34.3 64.8 36.1 63.5C36.1 63.5 37.2 63.2 36.5 61.3C34.9 56.9 27.8 54.3 23.4 52.5C24.252 48.3102 25.6295 44.2447 27.5 40.4C31.3 44.9 35.7 47.9 37.3 47C37.3 47 38.3 46.8 37.8 45.2C36.9 42 32.4 39.7 28.7 38C30.1656 35.0531 31.8364 32.2128 33.7 29.5C36.2 33.1 38.6 35.4 39.5 34.7C40.4 34 40.1 34.6 39.7 33C39.3 31.4 37.3 28.7 35.4 27.1C38.5168 22.7326 41.8545 18.5271 45.4 14.5C49.4044 17.952 53.1479 21.6956 56.6 25.7C54.8 27.8 53.1 30.3 53 33C52.9 35.7 53.6 34.6 53.6 34.6C53.6 34.6 56.7 32.1 58.4 27.8C60.5 30.3 62.6 33 64.6 35.9C61.4 38.3 57.5 41.3 57.3 44.5C57.1 47.7 58.2 46.2 58.2 46.2C62.5 42 63.4 43.3 66.2 38.4C68.4979 41.9142 70.4726 45.6294 72.1 49.5C68.1 52.1 62.5 55.8 61.9 60.1C61.6 62.2 62.7 62.2 62.7 62.2C64.6 63.1 69.4 58.5 73.1 52.2C74.5467 56.2124 75.3238 60.4354 75.4 64.7Z" stroke="#374231" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </g>
            <path d="M50.4 74.3C52.1 57 48 26 45.4 14.5L50.4 74.3Z" fill="white"/>
            <path d="M50.4 74.3C52.1 57 48 26 45.4 14.5" stroke="#374231" stroke-width="2" stroke-miterlimit="10"/>
            <defs>
            <filter id="filter0_d_14_1220" x="17.6218" y="13.5" width="62.7782" height="77.5" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
            <feFlood flood-opacity="0" result="BackgroundImageFix"/>
            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha"/>
            <feOffset dy="4"/>
            <feGaussianBlur stdDeviation="2"/>
            <feComposite in2="hardAlpha" operator="out"/>
            <feColorMatrix type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0.25 0"/>
            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_14_1220"/>
            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_14_1220" result="shape"/>
            </filter>
            </defs>
        </svg>
        @if ($postDetail->nama_latin)
            <h4>Nama Latin</h4>
            <p>{{ $postDetail->nama_latin }}</p>
        @endif
        @if ($postDetail->kepadatan)
            <h4>Kepadatan</h4>
            <p>{{ $postDetail->kepadatan }}</p>
        @endif
        @if ($postDetail->sebaran)
            <h4>Sebaran</h4>
            <p>{{ $postDetail->sebaran }}</p>
        @endif
        @if ($postDetail->status)
            <h4>Status</h4>
            <p>{{ $postDetail->status }}</p>
        @endif
        @if ($postDetail->bentuk_daun)
            <h4>Bentuk Daun</h4>
            <img src="{{ asset('storage/' . $postDetail->bentuk_daun) }}" alt="Bentuk Daun" class="imgpost">
        @endif
        @if ($postDetail->morfologi)
            <h4>Morfologi</h4>
            <p>{{ $postDetail->morfologi }}</p>
        @endif
        @if ($postDetail->anatomi)
            <h4>Anatomi</h4>
            <p>{{ $postDetail->anatomi }}</p>
        @endif
        @if ($postDetail->kegunaan)
            <h4>Kegunaan</h4>
            <p>{{ $postDetail->kegunaan }}</p>
        @endif
        @if ($postDetail->deskripsi)
            <h4>Deskripsi</h4>
            <p>{{ $postDetail->deskripsi }}</p>
        @endif
    </div>
@endsection
