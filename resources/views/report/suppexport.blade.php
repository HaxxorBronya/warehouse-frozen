<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<style>
		*{
			font-family: sans-serif;
		}
		table{
			width: 100%;
		}
		table thead{
			background: #000;
			color: #fff;
		}
		table thead th, table tbody td{
			padding: 10px;
		}
		h1{
			text-align: center;
		}



	</style>
</head>
<body>
	
	<h1 class="text-center">Report Suppliers</h1>

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

</body>
</html>