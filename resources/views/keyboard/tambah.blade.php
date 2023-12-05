@extends('keyboard/master')
@section('title','Data keyboard')
@section('konten')
	
	
<a href="/keyboard"> Kembali</a>
	
<br/>
<br/>
   
    <form class="form-horizontal" action="/keyboard/store" method="post">
        {{ csrf_field() }}
        <div class="form-group row">
          <label class="control-label col-md-1" for="merk">Merk</label>
          <div class="col-md-10">
            <input type="text" required class="form-control" name="merk" id="merk" placeholder="Masukkan merk anda disini">
          </div>
        </div>
        <div class="form-group row">
          <label class="control-label col-md-1" for="stock">Stok</label>
          <div class="col-md-10">
            <input type="number" required class="form-control" name="stock" id="stock" placeholder="Masukkan stok anda disini">
          </div>
        </div>
        <div class="form-group row">
          <label class="control-label col-md-1" for="ketersediaan">Tersedia</label>
          <div class="col-md-10">
            <input type="number" required class="form-control" name="ketersediaan" id="ketersediaan" placeholder="1 for 'YES', 0 for 'NO'">
          </div>
        </div>
        
        <div class="form-group row">
          <div class=" col offset-md-1">
            <input type="submit" class="btn btn-primary" value="Simpan Data">
          </div>
        </div>
      </form>
	@endsection
 