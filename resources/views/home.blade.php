<!DOCTYPE html>
<html>
<head>
	<title>Home - Belajar Laravel</title>
</head>
<body>

	<h1>
		Home - Belajar Laravel 2021
	</h1>

	<br>

	<p>
		Halaman Index
	</p>

	<br>

	<a href="/create">
		Create Data
	</a>

	<br>

	<table border="2">
		<tr>
			<th>Nama</th>
			<th>Asal</th>
			<th>Aksi</th>
		</tr>
		@foreach($Laraples as $dt)
		<tr>
			<td>{{ $dt->nama }}</td>
			<td>{{ $dt->asal }}</td>
			<td>
				<a href="/delete/{{$dt->id}}">
					delete
				</a>
				<a href="/edit/{{$dt->id}}">
					edit
				</a>
			</td>
		</tr>
		@endforeach
	</table>

</body>
</html>