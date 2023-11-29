@extends('pegawai/master')
@section('title','Data Pegawai')
@section('konten')

<a href="/pegawai"> Kembali</a>
	
@foreach($pegawai as $p)
<div class="row my-4">
  
    <div class="col-md-5">
        <div class="d-flex align-items-center justify-content-center h-100">
            <div style="
            height: 600px;
    width: 400px;
    background-image: url('/assets/images/pegawai/blank-profile-picture.png');
    border: solid 2px black;
            "></div>
        </div>
    </div>
    <div class="col-md">
        <div class="d-flex align-items-center h-100">
            <div class="w-100">
                <div class="row ">
                    <div class="col-md-3 ">
                        <h2>Nama</h2>
                    </div>
                    <div class="col-md">
                        <h2>: {{$p->pegawai_nama }}</h2>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-3 ">
                        <h2>Jabatan</h2>
                    </div>
                    <div class="col-md">
                        <h2>: {{$p->pegawai_jabatan }}</h2>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-3 ">
                        <h2>Umur</h2>
                    </div>
                    <div class="col-md">
                        <h2>: {{$p->pegawai_umur }}</h2>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-3 ">
                        <h2>Alamat</h2>
                    </div>
                    <div class="col-md">
                        <h2>: {{$p->pegawai_alamat }}</h2>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-3">
                        <a href="/pegawai/edit/{{$p->pegawai_id }}" class="btn btn-warning w-100">Edit</a>
                    </div>
                   

                </div>
                

            </div>
        </div>
   
    </div>
</div>
@endforeach


@endsection