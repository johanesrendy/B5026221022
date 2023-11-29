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
  <link rel="stylesheet" href="{{asset('/css/pegawai.css')}}" />
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="/pegawai">022</a>

  <!-- Links -->
  <ul class="navbar-nav">
    
    <li class="nav-item">
      <a class="nav-link" href="/">ETS</a>
    </li>
    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Tugas
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="/tugas1">Tugas 1</a>
        <a class="dropdown-item" href="/tugas2">Tugas 2</a>
        <a class="dropdown-item" href="https://drive.google.com/file/d/1sm_ZsMuBlerP76-6Sd2WghjBbU78-pFR/view?usp=drive_link">Tugas 3</a>
      </div>
    </li>

     <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Materi
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="/html1">Materi 1</a>
        <a class="dropdown-item" href="/html2">Materi 2</a>
        <a class="dropdown-item" href="/html3">Materi 3</a>
        <a class="dropdown-item" href="/html4">Materi 4</a>
        <a class="dropdown-item" href="/bootstrap">Materi 5</a>
        <a class="dropdown-item" href="/javascript1">Materi 6</a>
        <a class="dropdown-item" href="/javascript2">Materi 7</a>
        <a class="dropdown-item" href="/form-validate">Materi 8</a>
      </div>
    </li>
  </ul>
</nav>
<br>
  
<div class="container">
  <h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>
  @yield('konten')
</div>

@include('pegawai/footer')
<br>
</body>
</html>
