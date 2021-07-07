<!DOCTYPE html>
<html>
<head>
	<title>Show Data</title>
</head>
<body>

	@foreach($records as $data)
	<h1>{{$data->name}}</h1>
	<h4>{{$data->slug}}</h4>
	@endforeach

</body>
</html>