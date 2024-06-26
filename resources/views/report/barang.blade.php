@extends('layouts.app')

@section('content')
 
<div class="mt-2">
    <div class="card shadow">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Inventory Page</h2>
                    </div>
                    <div class="pull-right mb-2">
                        
                        <a href="{{ url('barangexp') }}" class="btn btn-success">Export PDF</a>
                    </div>
                </div>
            </div>
            
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p class="m-0 p-0">{{ $message }}</p>
                </div>
            @endif

            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Kode Barang</th>
                    <th>Harga Barang</th>
                    <th>Jumlah Barang</th>
                    
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($barangs as $barang)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $barang->nama_barang }}</td>
                        <td>{{ $barang->kode_barang }}</td>
                        <td>{{ $barang->harga_barang }}</td>
                        <td>{{ $barang->jumlah_barang }}</td>
                        
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
           
            {!! $barangs->links() !!}
            
        </div>
    </div>
 
 
@endsection