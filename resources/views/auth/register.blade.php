<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<head>
	<meta charset="utf-8">
	<title>Register - Laraple</title>
</head>
<body>

<div class="container">
	<div class="card w-100 mt-3">
		<div class="card-header">
			<h1>
				Register - Laraple
			</h1>
		</div>
		<div class="card-body">
			<form action="/postregister" method="POST" class="form">
				@csrf
				<div class="form-group">
					<label class="label">
						Name:
					</label>
					<input type="text" class="form-control" name="name" />
				</div>
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
				<input class="btn btn-info" type="submit" name="register" value="Register">
			</form>
		</div>
	</div>
</div>

</body>
</html>