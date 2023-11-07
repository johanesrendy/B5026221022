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
    <script src="{{asset('/js/4-form-validate.js')}}"></script>
  </head>
  <body>
    <div class="container">
      <div class="jumbotron">
        Form validasi adalah mencegah pengiriman data ke server jika ada yang
        invalid/tidak sesuai constraint database
        <form
          action="https://google.com"
          method="get"
          onsubmit="return handleSubmit()"
        >
          <div class="form-group">
            <label for="bil1">NRP:</label>
            <input type="text" class="form-control" id="nrp" />
            <div id="msg" class="text-danger"></div>
          </div>
          <input type="submit" value="DAFTAR" class="btn btn-primary" />
          <input type="reset" value="ULANGI" class="btn btn-warning" />
        </form>
      </div>
    </div>
  </body>
</html>
