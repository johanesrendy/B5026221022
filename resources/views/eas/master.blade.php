<!DOCTYPE html>
<html lang="en">
<head>
  <title>@yield('title')</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="{{asset('/css/chat.css')}}" />
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/pegawai">022</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
       
        <li class="nav-item">
          <a class="nav-link" href="/">ETS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/chat">CHAT</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Tugas
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/keyboard">Keyboard</a>
            <a class="dropdown-item" href="/keranjangbelanja">Keranjang Belanja</a>
            <a class="dropdown-item" href="/pegawai">Pegawai</a>
            <a class="dropdown-item" href="/nilai">Nilai Kuliah</a>
            <a class="dropdown-item" href="/tugas1">Tugas 1</a>
        <a class="dropdown-item" href="/tugas2">Tugas 2</a>
        <a class="dropdown-item" href="https://drive.google.com/file/d/1sm_ZsMuBlerP76-6Sd2WghjBbU78-pFR/view?usp=drive_link">Tugas 3</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Materi
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="/html1">Materi 1</a>
        <a class="dropdown-item" href="/html2">Materi 2</a>
        <a class="dropdown-item" href="/html3">Materi 3</a>
        <a class="dropdown-item" href="/html4">Materi 4</a>
        <a class="dropdown-item" href="/bootstrap">Materi 5</a>
        <a class="dropdown-item" href="/javascript1">Materi 6</a>
        <a class="dropdown-item" href="/javascript2">Materi 7</a>
        <a class="dropdown-item" href="/form-validate">Materi 8</a>
        <a class="dropdown-item" href="/perkalian">Materi 9</a>
        <a class="dropdown-item" href="/biodata">Materi 10</a>
        <a class="dropdown-item" href="/showjam/220">Materi 11</a>
        <a class="dropdown-item" href="/formulir">Materi 12</a>
          </div>
        </li>
        
      </ul>
    </div>
  </nav>
<br>
  
<div class="container">
	<h3>Chat Message</h3>
  @yield('konten')
</div>

@include('keranjangbelanja/footer')
<br>
</body>
</html>
