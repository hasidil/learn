<!DOCTYPE html>
<html>
<head>
	<title>Learn</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/app.css')}}">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h3 class="text-center">Learn</h3>
			{{ Form::open(['action' => 'UserController@authenticate']) }}
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" class="form-control" name="email" placeholder="Email">
				</div>
				<div class="form-group">
					<label for="password">Password</label>
					<input type="password" class="form-control" name="password" placeholder="Password">
				</div>	
				<button type="button" type="submit" class="btn btn-primary">Sign in</button>
			{{ Form::close() }}
		</div>
	</div>
</div>
</body>
</html>