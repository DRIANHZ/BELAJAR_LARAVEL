<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index(){
        $nama = "Diki Alfarabi Hadi";
    	$pelajaran = ["Algoritma & Pemrograman","Kalkulus","Pemrograman Web"];
    	return view('biodata',['nama' => $nama , 'matkul' => $pelajaran]);
        //di route memanggil fungsi ini jadi fungsi ini berjalan di route
        //yang mengarah ke controoler method ini berfungsi untuk mengoper data
        //dari request route ke controller lalu mengarah ke biodata blade
        //agar bisd membuka folder view blade biodata
    }

    public function bilanga_math(){
        return 1+1;
    }
};
