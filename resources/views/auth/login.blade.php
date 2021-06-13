<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<head>
	<meta charset="utf-8">
	<title>Login - Laraple</title>
</head>
<body>

<div class="container">
	<div class="card w-100 mt-3">
		<div class="card-header">
			<h1>
				Login - Laraple
			</h1>
		</div>
		<div class="card-body">
			<form action="/postlogin" method="POST" class="form">
				@csrf
				<div class="form-group">
					<label class="label">
						Email:
					</label>
					<input type="email" class="form-control" name="email" />
				</div>
				<div class="form-group">
					<label class="label">
						Password:
					</label>
					<input type="password" class="form-control" name="password" />
				</div>
				<input class="btn btn-info" type="submit" name="register" value="Login">
			</form>
		</div>
	</div>
</div>

</body>
</html>