<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Create Data - Belajar Laravel</title>
</head>
<body>

<div class="container">
	<h2>
		Create Data - Belajar Laravel 8 2021
	</h2>

	<a href="/home" class="btn btn-danger btn-sm mt-3 mb-3">
		Kembali
	</a>

	<form method="POST" action="/input" enctype="multipart/form-data">

		{{csrf_field()}}
	<div class="form-group">
		<label for="gambar">
			Gambar
		</label>
		<br>
		<input type="file" name="gambar" class="form-control-file">
	<br>
		@error('gambar')
		<p class="text-danger">{{$message}}</p>
		@enderror
	</div>

	<div class="form-group">
		<label for="nama">Nama </label>
		<input type="text" name="nama" class="form-control">
		<br>
		<!--tampilkan pesan error disini-->
		@error('nama')
		<p class="text-danger">{{$message}}</p>
		@enderror			
	</div>

	
	<div class="form-group">
		<label for="Asal">Asal</label> 
		<input type="text" name="asal" class="form-control">
		<br>
		<!--tampilkan pesan error disini-->
		@error('asal')
		<p class="text-danger">{{$message}}</p>
		@enderror	
	</div>
		
		<input type="submit" name="input" class="btn btn-success">
	</form>
</div>

</body>
</html>