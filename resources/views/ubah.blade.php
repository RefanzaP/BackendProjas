<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel</title>
</head>
<body>
 
	<h3>Edit Order</h3>
	<a href="/order"> Kembali</a>
	
	<br/>
	<br/>
 
	@foreach($order_detail as $o)
	<form action="/order/update" method="post">
		{{ csrf_field() }}
        Nama Pelanggan <input type="text" name="nama_pelanggan" required="required" value="{{$o->id_order}}"> <br/>
		Jenis Orderan <input type="text" name="nama_order" required="required" value="{{$o->nama_order}}"> <br/>
		Kode Unik <input type="text" name="kode_unik" required="required" value="{{$o->kode_unik}}"> <br/>
		Status Servis <textarea type="text" name="status" required="required" value="{{$o->status}}"></textarea> <br/>
		<input type="submit" value="Simpan Data">
	</form>
	@endforeach
		
 
</body>
</html>