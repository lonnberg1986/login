

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<link rel="stylesheet" href="./resources/login_styles.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<title>Welcome!</title>
</head>
<body>
	<div class="wrapper">
		<div class="flex-container">
			<div class="container">
				<div class="form-header">
					<h1><i class="fas fa-user-lock"></i>Sign In</h1>
				</div>
				<div class="form-body">
					<form action="welcome.html" method="POST">
						<label for="username">Username:</label>
						<input type="text" name="username" id="username" placeholder="Username" required="required">
						<label for="password">Password:</label>
						<input type="password" name="password" id="password" placeholder="Password" required="required">
						<input type="submit" name="login" value="Sign in">
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>