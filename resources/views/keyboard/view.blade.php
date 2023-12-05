@extends('keyboard/master')
@section('title','Data keyboard')
@section('konten')

<a href="/keyboard"> Kembali</a>
	
@foreach($keyboard as $p)
<div class="row my-4">
  
    <div class="col-md-5">
        <div class="d-flex align-items-center justify-content-center h-100">
            <img src="/assets/images/pegawai/blank-profile-picture.png" class="border border-dark img-fluid" style="height: 600px; width: 400px;">
        </div>
    </div>
    <div class="col-md">
        <div class="d-flex align-items-center h-100">
            <div class="w-100">
                <div class="mt-5 d-block d-md-none"></div>
                <div class="row ">
                    <div class="col-3 ">
                        <h2 class="d-none d-md-block">Merk</h2>
                        <h5 class="d-block d-md-none">Merk</h5>
                    </div>
                    <div class="col">
                        <h2 class="d-none d-md-block">: {{$p->merkkeyboard }}</h2>
                        <h5 class="d-block d-md-none">: {{$p->merkkeyboard }}</h5>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-3 ">
                        <h2 class="d-none d-md-block">Stok</h2>
                        <h5 class="d-block d-md-none">Stok</h5>
                    </div>
                    <div class="col">
                        <h2 class="d-none d-md-block">: {{$p->stockkeyboard}}</h2>
                        <h5 class="d-block d-md-none">: {{$p->stockkeyboard}}</h5>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-3 ">
                        <h2 class="d-none d-md-block">Tersedia</h2>
                        <h5 class="d-block d-md-none">Tersedia</h5>
                    </div>
                    <div class="col">
                        <h2 class="d-none d-md-block">: {{$p->availability }}</h2>
                        <h5 class="d-block d-md-none">: {{$p->availability}}</h5>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-3">
                        <a href="/keyboard" class="btn btn-success w-100">Oke</a>
                    </div>
                   

                </div>
                

            </div>
        </div>
   
    </div>
</div>
@endforeach


@endsection