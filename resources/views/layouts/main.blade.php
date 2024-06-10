<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Landing Page')</title>
    <link rel="shortcut icon" href="{{ asset('assets/tnb-logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Chonburi&family=Lato&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
    <header>
        <div class="dropdown-logo">
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
                <div class="dropdown">
                    <a href="/flora">Flora</a>
                    <a href="/situs">Situs</a>
                    <a href="https://www.balurannationalpark.id/">Situs Resmi Baluran</a>
                </div>
            </div>
            <img id="logo" src="{{ asset('assets/logo-lhk.png') }}" alt="logo-lhk" />
        </div>
        
        <div class="title">
            <h1><a href="/">TAMAN NASIONAL BALURAN</a></h1>
            <br />
            <h2 id="titledesc">SELAMAT DATANG DI INFORMASI KAWASAN KAMI</h2>
        </div>
        <img id="logo" src="{{ asset('assets/tnb-logo.png') }}" alt="logo-baluran" />
    </header>

    <main>
        @yield('container')
    </main>

    <footer>
        <div class="footer-content">
            <div class="telephone">
                <h3>Telepon</h3>
                <br>
                <p>(0333) 461650</p>
            </div>
            <br>
            <div class="email">
                <h3>Email</h3>
                <br>
                <p>balurannationalpark@gmail.com</p>
            </div>
            <br>
            <div class="alamat">
                <h3>Alamat</h3>
                <br>
                <p>Jl. Raya Banyuwangi - Situbondo Km. 35
                    <br>
                    Wonorejo, Banyuputih - Situbondo, Jawa Timur</p>
            </div>
            <br>
            <div class="link-terkait">
                <h3>Link Terkait</h3>
                <br>
                <a href="https://www.menlhk.go.id/" id="link">Kementrian LHK</a>
                <br>
                <a href="https://ksdae.menlhk.go.id/" id="link">Ditjen KSDAE</a>
                <br>
                <a href="https://ppid.menlhk.go.id/" id="link">PPID</a>
                <br>
                <a href="https://lpse.menlhk.go.id/eproc4" id="link">LPSE</a>
                <br>
                <a href="https://ropeg.menlhk.go.id/" id="link">Biro Kepegawaian</a>
            </div>
        </div>
        <iframe id="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.608549578497!2d114.38497557485749!3d-7.831188392189858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd1249454d7c085%3A0x67067c7ed3eced4b!2sBaluran%20National%20Park!5e0!3m2!1sen!2sid!4v1710733090488!5m2!1sen!2sid" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        <br>
        Copyright 2024 &copy; Taman Nasional Baluran, Politeknik Negeri Banyuwangi
    </footer>
</body>
</html>

