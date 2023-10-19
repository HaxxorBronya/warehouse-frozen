<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF; //library pdf

class ReportController extends Controller
{
    public function index(){
        //menampilkan halaman laporan
        return view('home');
    }

    public function export(){
        //mengambil data dan tampilan dari halaman laporan_pdf
        //data di bawah ini bisa kalian ganti nantinya dengan data dari database
        $data = PDF::loadview('barang/index', ['data' => 'ini adalah contoh laporan PDF']);
        //mendownload laporan.pdf
        return $data->download('report.pdf');
    }
}