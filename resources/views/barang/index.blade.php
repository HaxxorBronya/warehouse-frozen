@extends('layouts.app')

@section('content')
 
<div class="container mt-2">
 
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Inventory Page</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('barangs.create') }}">Tambah Barang</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Kode Barang</th>
            <th>Harga Barang</th>
            <th>Jumlah Barang</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($barangs as $barang)
        <tr>
            <td>{{ $barang->id }}</td>
            <td>{{ $barang->nama_barang }}</td>
            <td>{{ $barang->kode_barang }}</td>
            <td>{{ $barang->harga_barang }}</td>
            <td>{{ $barang->jumlah_barang }}</td>
            <td>
                <form action="{{ route('barangs.destroy',$barang->id) }}" method="Post">
     
                    <a class="btn btn-primary" href="{{ route('barangs.edit',$barang->id) }}">Edit</a>
    
                    @csrf
                    @method('DELETE')
       
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
   
    {!! $barangs->links() !!}
 
@endsection