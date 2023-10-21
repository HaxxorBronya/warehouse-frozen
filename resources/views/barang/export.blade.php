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
	</style>
</head>
<body>
	
	<h1>Barang</h1>

	        <table class="table table-bordered">
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

</body>
</html>