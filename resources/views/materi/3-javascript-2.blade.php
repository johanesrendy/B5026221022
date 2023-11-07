<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Javascript</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link
      href="https://fonts.googleapis.com/css2?family=Nunito:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <script src="{{asset('/js/3-javascript-2.js')}}"></script>
  </head>
  <body>
    <div class="container-fluid">
      <div class="form-group">
        <label for="bil1">Bilangan 1:</label>
        <input type="number" class="form-control" id="bil1" />
      </div>
      <div class="form-group">
        <label for="bil2">Bilangan 2:</label>
        <input type="number" class="form-control" id="bil2" />
      </div>
      <h1>
        Hasil Operasi:
        <div id="hasil"></div>
      </h1>
      <input
        onclick="penjumlahan()"
        type="button"
        value="penjumlahan"
        class="btn btn-success"
      />
      <input
        onclick="perkalian()"
        type="button"
        value="perkalian"
        class="btn btn-warning"
      />
    </div>
  </body>
</html>
