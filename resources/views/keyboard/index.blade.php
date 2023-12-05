
 @extends('keyboard/master')
 @section('title','Data keyboard')
 @section('konten')
	
	<br>


	<p>Cari Data keyboard Berdasarkan nama:</p>
<form action="/keyboard/cari" method="GET" class=" d-flex">
	<input class="form-control" type="text" name="cari" placeholder="Masukkan nama keyboard disini" value="{{ old("cari", isset($cari) ? $cari : '') }}">
	<input class="btn btn-primary" type="submit" value="CARI">
</form>

<br>
 
	<a href="/keyboard/tambah" class="btn btn-primary"> + Tambah keyboard Baru</a>
	
	<br/>
	<br/>
 
	<table  class="table table-striped table-hover table-bordered">
		<tr class=" text-center">
			<th class="p-2">Kode</th>
			<th class="p-2">Merk</th>
			<th class="p-2">Stock</th>
			<th class="p-2">Tersedia</th>
			<th class="p-2">Opsi</th>
		</tr>
		@foreach($keyboard as $p)
		<tr>
			<td class="p-2">{{ $p->kodekeyboard}}</td>
			<td class="p-2">{{ $p->merkkeyboard}}</td>
			<td class="p-2">{{ $p->stockkeyboard }}</td>
			<td class="p-2">{{ $p->availability }}</td>
			
			<td class="text-center">
				<a href="/keyboard/view/{{ $p->kodekeyboard }}" class="btn btn-success m-2">View</a>
				|
				<a href="/keyboard/edit/{{ $p->kodekeyboard }}" class="btn btn-warning m-2">Edit</a>
				|
				<a href="/keyboard/hapus/{{ $p->kodekeyboard }}" class="btn btn-danger m-2">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 @endsection
 