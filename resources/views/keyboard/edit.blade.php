@extends('keyboard/master')
 @section('title','Data keyboard')
 @section('konten')
 
	
 
	<a href="/keyboard"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($keyboard as $p)
	<form class="form-horizontal" action="/keyboard/update" method="post">
        {{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->kodekeyboard }}">
        <div class="form-group row">
          <label class="control-label col-md-1" for="merk">Merk</label>
          <div class="col-md-10">
            <input type="text" required class="form-control" value="{{ $p->merkkeyboard}}" name="merk" id="merk" placeholder="Masukkan merk anda disini">
          </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-md-1" for="stock">Stok</label>
            <div class="col-md-10">
                <input type="text" required class="form-control" value="{{ $p->stockkeyboard }}" name="stock" id="stock" placeholder="Masukkan stock anda disini">
            </div>
        </div>
        <div class="form-group row">
          <label class="control-label col-md-1" for="tersedia">Tersedia</label>
          <div class="col-md-10">
            <input type="number" required class="form-control" value="{{ $p->tersedia }}" name="tersedia" id="tersedia" placeholder="1 for 'YES', 0 for 'NO'">
          </div>
        </div>
          
        <div class="form-group row">
          <div class=" col offset-md-1">
            <input type="submit" class="btn btn-primary" value="Simpan Data">
          </div>
        </div>
      </form>

	{{-- <form action="/keyboard/update" method="post">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $p->keyboard_id }}"> <br/>
		Nama <input type="text" required="required" name="nama" value="{{ $p->keyboard_nama }}"> <br/>
		Jabatan <input type="text" required="required" name="jabatan" value="{{ $p->keyboard_jabatan }}"> <br/>
		Umur <input type="number" required="required" name="umur" value="{{ $p->keyboard_umur }}"> <br/>
		Alamat <textarea required="required" name="alamat">{{ $p->keyboard_alamat }}</textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form> --}}
	@endforeach
@endsection		