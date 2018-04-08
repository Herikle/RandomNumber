<html>
	<?php include 'layouts/header.php'; ?>
<body>
	<div class="container">
		<h1 class="text-center">Welcome to "Let me store random numbers"</h1>
		<div class="container">
			<h1 class="text-center">Not a member yet? Choose a plan!</h1>

			<div class="row">
				<div class="col-md-4 col-sm-12">
					<a href="/free" class="btn btn-secondary btn-lg btn-block" role="button" aria-pressed="true">Free Member</a>
				</div>
				<div class="col-md-4 col-sm-12">
					<a href="/vip" class="btn btn-primary btn-lg btn-block" role="button" aria-pressed="true">VIP Member</a>
				</div>
				<div class="col-md-4 col-sm-12">
					<a href="/special" class="btn btn-success btn-lg btn-block" role="button" aria-pressed="true">Special Member</a>
				</div>
			</div>
		</div>
		<div class="container login-page">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-lg-6 offset-lg-3 box-shadow">
					<h3 class="text-center">Login</h3>
					<form method="POST" action="/login" class="form-login">
						<input name="email" type="text" class="form-control form-group" placeholder="Email">
						<input name="password" type="password" class="form-control form-group" placeholder="Password">
						<button type="submit" class="btn btn-success col-lg-6 offset-lg-3 col-md-12 col-sm-12">Entrar</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<?php include 'layouts/scripts.php'; ?>
</body>
</html>