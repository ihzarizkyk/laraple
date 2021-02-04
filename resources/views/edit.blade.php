<!DOCTYPE html>
<html>
<head>
	<title>Update Data - Belajar Laravel</title>
</head>
<body>

<h2>
	Update Data - Belajar Laravel 2021
</h2>

@foreach($Laraples as $data)
<form action="/update" method="POST">
	{{csrf_field()}}
	<input type="hidden" name="id" value="{{$data->id}}">
	<br>
	Nama <input type="text" name="nama" value="{{$data->nama}}">
	<br><br>
	Asal <input type="text" name="asal" value="{{$data->asal}}">
	<br><br>
	<input type="submit" name="update" value="update">
</form>
@endforeach

</body>
</html>