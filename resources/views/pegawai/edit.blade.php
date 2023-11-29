@extends('pegawai/master')
 @section('title','Data Pegawai')
 @section('konten')
 
	
 
	<a href="/pegawai"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($pegawai as $p)
	<form class="form-horizontal" action="/pegawai/update" method="post">
        {{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}">
        <div class="form-group row">
          <label class="control-label col-md-1" for="nama">Nama</label>
          <div class="col-md-10">
            <input type="text" required class="form-control" value="{{ $p->pegawai_nama }}" name="nama" id="nama" placeholder="Masukkan nama anda disini">
          </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-md-1" for="jabatan">Jabatan</label>
            <div class="col-md-10">
                <input type="text" required class="form-control" value="{{ $p->pegawai_jabatan }}" name="jabatan" id="jabatan" placeholder="Masukkan jabatan anda disini">
            </div>
        </div>
        <div class="form-group row">
          <label class="control-label col-md-1" for="umur">Umur</label>
          <div class="col-md-10">
            <input type="number" required class="form-control" value="{{ $p->pegawai_umur }}" name="umur" id="umur" placeholder="Masukkan umur anda disini">
          </div>
        </div>
          <div class="form-group row">
            <label class="control-label col-md-1" for="alamat">Alamat</label>
            <div class="col-md-10">
              <textarea type="text" required class="form-control" name="alamat" id="alamat" placeholder="Masukkan alamat anda disini">{{ $p->pegawai_alamat }}</textarea>
            </div>
          </div>
        <div class="form-group row">
          <div class=" col offset-md-1">
            <input type="submit" class="btn btn-primary" value="Simpan Data">
          </div>
        </div>
      </form>

	{{-- <form action="/pegawai/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form> --}}
	@endforeach
@endsection		