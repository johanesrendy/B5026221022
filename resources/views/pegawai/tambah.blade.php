@extends('pegawai/master')
@section('title','Data Pegawai')
@section('konten')
	
	
<a href="/pegawai"> Kembali</a>
	
<br/>
<br/>
   
    <form class="form-horizontal" action="/pegawai/store" method="post">
        {{ csrf_field() }}
        <div class="form-group row">
          <label class="control-label col-md-1" for="nama">Nama</label>
          <div class="col-md-10">
            <input type="text" required class="form-control" name="nama" id="nama" placeholder="Masukkan nama anda disini">
          </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-md-1" for="jabatan">Jabatan</label>
            <div class="col-md-10">
                <input type="text" required class="form-control" name="jabatan" id="jabatan" placeholder="Masukkan jabatan anda disini">
            </div>
        </div>
        <div class="form-group row">
          <label class="control-label col-md-1" for="umur">Umur</label>
          <div class="col-md-10">
            <input type="number" required class="form-control" name="umur" id="umur" placeholder="Masukkan umur anda disini">
          </div>
        </div>
          <div class="form-group row">
            <label class="control-label col-md-1" for="alamat">Alamat</label>
            <div class="col-md-10">
              <textarea type="text" required class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat anda disini"></textarea>
            </div>
          </div>
        <div class="form-group row">
          <div class=" col offset-md-1">
            <input type="submit" class="btn btn-primary" value="Simpan Data">
          </div>
        </div>
      </form>
	@endsection
 