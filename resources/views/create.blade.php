<!DOCTYPE html>
<html>
<head>
	<title>Create Data - Belajar Laravel</title>
</head>
<body>

	<h2>
		Create Data
	</h2>

	<form method="POST" action="/input">

		@csrf

		Nama <input type="text" name="nama" required>
		<br><br>
		Asal <input type="text" name="asal" required>
		<br><br>
		<input type="submit" name="input">
	</form>

</body>
</html>