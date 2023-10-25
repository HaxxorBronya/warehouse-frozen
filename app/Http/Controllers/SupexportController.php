<?php

namespace App\Http\Controllers;
use App\Models\Supplier;
use Illuminate\Http\Request;
use PDF; //library pdf

class SupexportController extends Controller
{
    public function index(){
        $data['suppliers'] = Supplier::orderBy('id','desc')->paginate(5);
     
        return view('report.supplier', $data);
        }

    public function export(){
        $supplier = Supplier::orderBy('id','desc')->paginate(5);
        //mengambil data dan tampilan dari halaman laporan_pdf
        //data di bawah ini bisa kalian ganti nantinya dengan data dari database
        $data = PDF::loadview('report.suppexport', ['suppliers' => $supplier]);
        //mendownload laporan.pdf
        return $data->stream('laporan.pdf');
    }
}

    