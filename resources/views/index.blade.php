
 @extends('master')
 @section('title','Data Pegawai')
 @section('konten')
	<h2>www.malasngoding.com</h2>
	<h3>Data Pegawai</h3>
	<br>


	<p>Cari Data Pegawai Berdasarkan nama:</p>
<form action="/pegawai/cari" method="GET" class=" d-flex">
	<input class="form-control" type="text" name="cari" placeholder="Masukkan nama pegawai disini" value="{{ old("cari", isset($cari) ? $cari : '') }}">
	<input class="btn btn-primary" type="submit" value="CARI">
</form>

<br>
 
	<a href="/pegawai/tambah" class="btn btn-primary"> + Tambah Pegawai Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr class=" text-center">
			<th>Nama</th>
			<th>Jabatan</th>
			<th>Umur</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->pegawai_nama }}</td>
			<td>{{ $p->pegawai_jabatan }}</td>
			<td>{{ $p->pegawai_umur }}</td>
			<td>{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning m-2">Edit</a>
				|
				<a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger m-2">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
<br>

	{{$pegawai->links()}}
 @endsection
 