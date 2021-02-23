<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<title>Home - Belajar Laravel</title>
</head>
<body>

<div class="container">
	<h1>
		Belajar Laravel 2021
	</h1>

	<br>

	<p>
		Halaman Home - Index
	</p>

	<br>

	<a href="/create" class="btn btn-primary mb-3">
		Create Data
	</a>

	<br>

	<table class="table" border="2">
	<thead class="thead-dark">
		<tr>
			<th scope="col">Gambar</th>
			<th scope="col">Nama</th>
			<th scope="col">Asal</th>
			<th scope="col">Aksi</th>
		</tr>	
	</thead>

	<tbody>
		@foreach($_laraples as $dt)
		<tr>
			<td><img src="gambar/{{$dt->gambar}}" height="200"></td>
			<td>{{ $dt->nama }}</td>
			<td>{{ $dt->asal }}</td>
			<td>
				<a href="/delete/{{$dt->id}}" class="btn btn-danger btn-sm">
					delete
				</a>
				<a href="/edit/{{$dt->id}}" class="btn btn-dark btn-sm">
					edit
				</a>
				<a href="/show/{{$dt->slug}}" class="btn btn-secondary btn-sm">
					view
				</a>
			</td>
		</tr>
		@endforeach
	</tbody>

	</table>	
</div>

</body>
</html>