@extends('layouts.app')

@section('content')
 
<div class="mt-2">
    <div class="card shadow-sm">
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h2>Supplier Page</h2>
                    </div>
                    <div class="pull-right mb-2">
                        
                        <a href="{{ url('suppexp') }}" class="btn btn-success">Export PDF</a>
                    </div>
                </div>
            </div>
            
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p class="m-0 p-0">{{ $message }}</p>
                </div>
            @endif

            <table class="table table-bordered">
                <thead class="table-dark">
                    <th>No</th>
                    <th>Nama Supplier</th>
                    <th>Nomor HP</th>
                    <th>Alamat</th>
                    
                </thead>
                <tbody>
                    @php
                    $no = 1;
                    @endphp
                    @foreach ($suppliers as $supplier)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $supplier->nama_supplier }}</td>
                        <td>{{ $supplier->nomor_hp }}</td>
                        <td>{{ $supplier->alamat }}</td>
                        
                    </tr>
                    @endforeach
                    
                </tbody>
            </table>

           
            {!! $suppliers->links() !!}
            
        </div>
    </div>
 
 
@endsection