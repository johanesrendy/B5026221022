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
  </head>
  <body>
    <div class="container-fluid">
      <script>
        function hadiah() {
          alert("Selamat, Anda mendapatkan 100 juta!");
        }
        function replace() {
          const replacement = document.getElementById("output");
          const textbox = document.getElementById("textbox").value;
          const color = document.getElementById("change-color").value;
          replacement.innerHTML = `Welcome, ${textbox}!`;
          replacement.style.color = color;
          event.preventDefault();
        }
      </script>
      <center>
        <button onclick="hadiah()" class="btn btn-primary">Klik Disini!</button>
        <br />
        <br />
        <h1 class="" id="output">Please Input Your Name first</h1>
        <br />
        <form onsubmit="replace()">
          <span>Ubah tulisaan</span>
          <input type="text" name="textbox" id="textbox" placeholder="" />
          <br />
          <br />
          <span>Ubah Warna</span>
          <input
            type="text"
            name="change-color"
            id="change-color"
            placeholder=""
          />
          <br />
          <br />
          <button type="submit" class="btn btn-danger">replace</button>
        </form>
      </center>
    </div>
  </body>
</html>
