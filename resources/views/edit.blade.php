<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Update Data - Belajar Laravel</title>
</head>
<body>

<div class="container">

<h2>
	Update Data - Belajar Laravel 2021
</h2>

@foreach($Laraples as $data)
<form action="/update" method="POST">
	{{csrf_field()}}
<div class="form-group">
	<input type="hidden" name="id" value="{{$data->id}}" class="form-control">
	<br>
	<label for="Nama">Nama</label> 
	<input type="text" name="nama" value="{{$data->nama}}" class="form-control">
	<br>
</div>

<div class="form-group">
	<label for="Asal">Asal</label> 
	<input type="text" name="asal" value="{{$data->asal}}" class="form-control">
	<br><br>
</div>

<input type="submit" name="update" value="update" class="btn btn-primary">	

</form>
@endforeach	

</div>

</body>
</html>