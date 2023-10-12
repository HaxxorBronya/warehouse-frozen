<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah Barang</title>
 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" >
</head>
<body>
 
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
           
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Nama Barang</strong>
                        <input type="text" name="nama_barang" class="form-control" placeholder="Nama Barang">
                       @error('nama_barang')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                       @enderror
                    </div>
                </div>
         
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kode Barang</strong>
                         <input type="text" name="kode_barang" class="form-control" placeholder="Kode Barang">
                        @error('kode_barang')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                       @enderror
                    </div>
                </div>
         
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Harga Barang</strong>
                         <input type="number" name="harga_barang" class="form-control" placeholder="Harga Barang">
                        @error('harga_barang')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                       @enderror
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Jumlah Barang</strong>
                         <input type="number" name="jumlah_barang" class="form-control" placeholder="Jumlah Barang">
                        @error('harga_barang')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                       @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <a class="btn btn-light" href="{{ route('barangs.index') }}"> Back</a>
                    <button type="submit" class="btn btn-primary ml-3">Submit</button>
                </div>
            </div>
            
        </form>
        
    </div>
</div>
@error('name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror
 
</body>
</html>