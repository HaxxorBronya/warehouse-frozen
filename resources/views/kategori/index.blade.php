@extends('layouts.app')

@section('content')

<div class="mt-2">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Category Page</h2>
                    </div>
                    <div class="pull-right mb-2">
                        <a class="btn btn-dark" href="{{ route('kategoris.create') }}">Tambah Kategori</a>
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
                    <th>Kategori</th>
                    <th width="280px">Action</th>
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($kategoris as $kategori)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $kategori->kategori }}</td>
                        <td>
                            <form action="{{ route('kategoris.destroy',$kategori->id) }}" method="Post">
                 
                                <a class="btn btn-sm btn-light" href="{{ route('kategoris.edit',$kategori->id) }}">Edit</a>
                
                                @csrf
                                @method('DELETE')
                   
                                <button type="submit" class="btn btn-sm btn-light">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>
           
            {!! $kategoris->links() !!}
            
        </div>
    </div>


@endsection