@extends('layouts.app')

@section('content')
 
<div class="container mt-2">
   
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mb-2">
            <h2>Tambah Barang</h2>
        </div>
    </div>
</div>
    
  @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
  @endif
    
<div class="card">
    <div class="card-body">
        <form action="{{ route('barangs.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label class="fw-semibold">Nama Barang</label>
            <input type="text" name="nama_barang" class="form-control" >
           @error('nama_barang')
              <div class="text-danger">{{ $message }}</div>
           @enderror
        
            <label class="fw-semibold mt-3">Kode Barang</label>
             <input type="text" name="kode_barang" class="form-control" >
            @error('kode_barang')
              <div class="text-danger">{{ $message }}</div>
           @enderror
        
            <label class="fw-semibold mt-3">Harga Barang</label>
             <input type="number" name="harga_barang" class="form-control" >
            @error('harga_barang')
              <div class="text-danger">{{ $message }}</div>
           @enderror

        
            <label class="fw-semibold mt-3">Jumlah Barang</label>
             <input type="number" name="jumlah_barang" class="form-control" >
            @error('harga_barang')
              <div class="text-danger">{{ $message }}</div>
           @enderror

            <div class="mt-3">
                <a class="btn" href="{{ route('barangs.index') }}"> Back</a>
                <button type="submit" class="btn btn-primary ml-3">Submit</button>
            </div>
            
        </form>
        
    </div>
</div>
@error('name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
 
@endsection