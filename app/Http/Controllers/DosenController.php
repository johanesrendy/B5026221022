<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DosenController extends Controller
{
    //
    public function index(){
        $a = 7;
        $b = 3;
        $c = $a * $b;
        return "<h1>Hasil Perkalian : " . $c . "</h1>" ;
    }

    public function biodata(){
    	$nama = "Diki Alfarabi Hadi";
        $alamat = "Surabaya";
        $umur = 18;
        return view('pegawai/biodata',['nama'=>$nama,'alamat'=>$alamat,'umur'=>$umur]);
    }

    public function showjam($jam){
 
    	return "<h2>Sekarang Jam: " . $jam ."</h2><br><p>silahkan ubah angka url diatas untuk merubah angka jam</p>";
 
    }

    public function formulir(){
 
    	return view('pegawai/formulir');
 
    }

public function proses(Request $request){
        $nama = $request->input('nama');
     	$alamat = $request->input('alamat');
     	$nrp = $request->input('nrp');
        return "Nama : ".$nama."<br>Alamat : ".$alamat . "<br>nrp : " .$nrp ."<br><a href='/formulir'>Back to Form</a><br><br>" . $request;
}

public function DB()
    {
    	// mengambil data dari table pegawai
    	//$pegawai = DB::table('pegawai')->get();
		$pegawai = DB::table('pegawai')
		->orderByRaw('pegawai_nama ASC')
		->paginate(10);
    	// mengirim data pegawai ke view index
    	return view('pegawai/index',['pegawai' => $pegawai]);
 
    }

    // method untuk menampilkan view form tambah pegawai
public function tambah()
{
 
	// memanggil view tambah
	return view('pegawai/tambah');
 
}

// method untuk insert data ke table pegawai
public function store(Request $request)
{
	// insert data ke table pegawai
	DB::table('pegawai')->insert([
		'pegawai_nama' => $request->nama,
		'pegawai_jabatan' => $request->jabatan,
		'pegawai_umur' => $request->umur,
		'pegawai_alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/pegawai');
 
}

// method untuk edit data pegawai
public function edit($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('pegawai/edit',['pegawai' => $pegawai]);
 
}

// update data pegawai
public function update(Request $request)
{
	// update data pegawai
	DB::table('pegawai')->where('pegawai_id',$request->id)->update([
		'pegawai_nama' => $request->nama,
		'pegawai_jabatan' => $request->jabatan,
		'pegawai_umur' => $request->umur,
		'pegawai_alamat' => $request->alamat
	]);
	// alihkan halaman ke halaman pegawai
	return redirect('/pegawai');
}
// method untuk hapus data pegawai
public function hapus($id)
{
	// menghapus data pegawai berdasarkan id yang dipilih
	DB::table('pegawai')->where('pegawai_id',$id)->delete();
		
	// alihkan halaman ke halaman pegawai
	return redirect('/pegawai');
}

public function cari(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$pegawai = DB::table('pegawai')
		->where('pegawai_nama','like',"%".$cari."%")
		->orderByRaw('pegawai_nama ASC')
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('pegawai/index',['pegawai' => $pegawai, 'cari' => $cari]);
 
	}
// method untuk edit data pegawai
public function view($id)
{
	// mengambil data pegawai berdasarkan id yang dipilih
	$pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
	// passing data pegawai yang didapat ke view edit.blade.php
	return view('pegawai/view',['pegawai' => $pegawai]);
 
}

}




