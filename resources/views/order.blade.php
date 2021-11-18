<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h3>Data Order</h3>
 
	<a href="/order/tambah"> + Tambah order</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Id</th>
            <th>Nama Pelanggan</th>
			<th>Orderan</th>
            <th>Kode Unik</th>
			<th>Status</th>
			<th>Opsi</th>
		</tr>
		@foreach($order_detail as $o)
		<tr>
            <td>{{ $o->id_order}}</td>
			<td>{{ $o->nama_pelanggan}}</td>
			<td>{{ $o->nama_order }}</td>
            <td>{{ $o->kode_unik }}</td>
			<td>{{ $o->status }}</td>
			<td>
				<a href="/order/edit/{{ $o->id_order}}">Edit</a>
                |
				<a href="/order/hapus/{{ $o->id_order}}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>