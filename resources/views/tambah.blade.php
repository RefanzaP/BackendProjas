<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
	<h3>Data Orderan</h3>
 
	<a href="/order"> Kembali</a>
	
	<br/>
	<br/>
 
	<form action="/order/store" method="post">
		{{ csrf_field() }}
		Nama Pelanggan <input type="text" name="nama_pelanggan" required="required"> <br/>
		Jenis Orderan <input type="text" name="nama_order" required="required"> <br/>
		Kode Unik <input type="text" name="kode" required="required"> <br/>
		Status Servis <textarea type="text" name="status" required="required"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
 
</body>
</html>