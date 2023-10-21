<?php

namespace App\Http\Controllers;
use App\Models\Barang;
use Illuminate\Http\Request;
use PDF; //library pdf

class ReportController extends Controller
{
    public function index(){
        $data['barangs'] = Barang::orderBy('id','desc')->paginate(5);
     
        return view('report.barang', $data);
        }

    public function export(){
        $barang = Barang::orderBy('id','desc')->paginate(5);
        //mengambil data dan tampilan dari halaman laporan_pdf
        //data di bawah ini bisa kalian ganti nantinya dengan data dari database
        $data = PDF::loadview('report.barangexport', ['barangs' => $barang]);
        //mendownload laporan.pdf
        return $data->stream('laporan.pdf');
    }
}

    