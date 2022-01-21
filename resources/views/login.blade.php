<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>

<!-- Popper JS -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container">
	<div class="col-md-6">
		<form method="post" action="">
			@csrf
			<div class="form-group">
				<label>Email : </label>
				<input type="text" name="email" class="form-control">
			</div>
			<div class="form-group">
				<label>Password : </label>
				<input type="text" name="password" class="form-control">
			</div>
			<input type="submit" class="btn btn-success">
		</form>
	</div>
</div>
</body>
</html>