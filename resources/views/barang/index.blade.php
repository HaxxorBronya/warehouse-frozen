@extends('layouts.app')

@section('content')
 
<div class="mt-2">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Inventory Page</h2>
                    </div>
                    <div class="pull-right mb-2">
                        <a class="btn btn-dark" href="{{ route('barangs.create') }}">Tambah Barang</a>
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
                    <th width="280px">Action</th>
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
                        <td>
                            <form action="{{ route('barangs.destroy',$barang->id) }}" method="Post">
                 
                                <a class="btn btn-sm btn-light" href="{{ route('barangs.edit',$barang->id) }}">Edit</a>
                
                                @csrf
                                @method('DELETE')
                   
                                <button type="submit" class="btn btn-sm btn-light">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
           
            {!! $barangs->links() !!}
            
        </div>
    </div>
 
 
@endsection