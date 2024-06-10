@yield('template_list')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flora</title>
    <link rel="shortcut icon" href="assets/tnb-logo.png" type="image/x-icon">
    <link rel="stylesheet" href="css/list.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chonburi&family=Lato&display=swap" rel="stylesheet">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
    integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  />
</head>
<body>
    @include('partials.navbar')
      <main>
      <div class="subtitle">
            <h2>FLORA</h2>
          </div>
          <img class="imgflora" src="assets/bidara.jpg" alt="flora-bidara" />
          @foreach ($posts as $post)
          <div class="cards">
            <div class="card">
                <a href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
            </div>
            </div>
            @endforeach
        </div>
        
      </main>
        @include('partials.footer')
</body>
</html>