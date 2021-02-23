<!DOCTYPE html>
<html>
<head>
	<title>Show Data</title>
</head>
<body>

	@foreach($data as $dt)
	<h1>{{$dt->nama}}</h1>
	<h4>{{$dt->slug}}</h4>
	@endforeach

</body>
</html>