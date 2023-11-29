
 @extends('pegawai/master')
 @section('title','Data Pegawai')
 @section('konten')
	
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
			<th class="p-2">Nama</th>
			<th class="p-2">Jabatan</th>
			<th class="p-2">Umur</th>
			<th class="p-2">Alamat</th>
			<th class="p-2">Opsi</th>
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td class="p-2">{{ $p->pegawai_nama }}</td>
			<td class="p-2">{{ $p->pegawai_jabatan }}</td>
			<td class="p-2">{{ $p->pegawai_umur }}</td>
			<td class="p-2">{{ $p->pegawai_alamat }}</td>
			<td>
				<a href="/pegawai/view/{{ $p->pegawai_id }}" class="btn btn-success m-2">View</a>
				|
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
 