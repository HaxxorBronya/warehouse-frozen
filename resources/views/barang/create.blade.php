<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Edit Barang</title>
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
 
<div class="container mt-2">
 
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Barang</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('barangs.index') }}" enctype="multipart/form-data"> Back</a>
            </div>
        </div>
    </div>
    
  @if(session('status'))
    <div class="alert alert-success mb-1 mt-1">
        {{ session('status') }}
    </div>
  @endif
   
    <form action="{{ route('barangs.update',$barang->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
    
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama Barang</strong>
                    <input type="text" name="nama_barang" value="{{ $barang->nama_barang }}" class="form-control" placeholder="Nama Barang">
                    @error('nama_barang')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Kode Barang</strong>
                     <input type="text" name="kode_barang" class="form-control" placeholder="Kode Barang" value="{{ $barang->kode_barang }}">
                    @error('kode_barang')
                      <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                   @enderror
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Harga Barang</strong>
                    <input type="number" name="harga_barang" value="{{ $barang->harga_barang }}" class="form-control" placeholder="Harga Barang">
                    @error('harga_barang')
                    <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
             <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jumlah Barang</strong>
                    <input type="number" name="jumlah_barang" value="{{ $barang->jumlah_barang }}" class="form-control" placeholder="Jumlah Barang">
                    @error('jumlah_barang')
                     <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                    @enderror
                </div>
            </div>
              <button type="submit" class="btn btn-primary ml-3">Submit</button>
           
        </div>
    
    </form>
</div>
 @error('name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
</body>
</html>