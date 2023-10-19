@extends('layouts.app')

@section('content')

<div class="container mt-2">
   
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left mb-2">
            <h2>Tambah Kategori</h2>
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
        <form action="{{ route('kategoris.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
           
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="form-group">
                        <strong>Kategori</strong>
                        <input type="text" name="kategori" class="form-control" placeholder="Kategori">
                       @error('kategori')
                          <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
                       @enderror
                    </div>
                </div>
         
                <div class="col-md-12">
                    <a class="btn btn-light" href="{{ route('kategoris.index') }}"> Back</a>
                    <button type="submit" class="btn btn-primary ml-3">Submit</button>
                </div>
            </div>
            
        </form>
        
    </div>
</div>
@error('name')
<div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
@enderror


@endsection