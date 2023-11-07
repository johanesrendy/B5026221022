<html>
  <head>
    <link rel="stylesheet" href="{{asset('/css/1-html-4.css')}}" />
    <!-- div diswluruh halaman ini diset seperti i block -->
    <style>
      div {
        color: green;
        font-weight: bold;
        text-align: right;
      }

      .judulHalaman {
        text-align: center;
        font-size: large;
      }
    </style>
  </head>
  <body>
    <div class="judulHalaman">Selamat Datang</div>
    <!-- inline css digunakan ketika ada sepcifik ke 1 bagian saja -->
    <p style="text-decoration: line-through; color: blue">Hallo apa kabar ?</p>
    <!-- inpage css digunakan ketika ada yang spesifik ke 1 halaman khusus -->
    <div>Hallo apa kabar ?</div>
    <!-- external css digunakan untuk format umum 1 website -->
    <span>Hallo apa kabar ?</span>
  </body>
</html>
