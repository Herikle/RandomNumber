<?php require_once '../helpers/SessionHelper.php'; ?>
<?php $plan = Session::getSession('plan',FALSE);?>
<html>
<head>
	<?php include 'layouts/header.php'; ?>
</head>
<body>
	<?php include 'layouts/navbar.php'; ?>
	<div class="container">
		<h1 class="text-center">Oh, hi mark</h1>
		<h2 class="text-center">You chose a <?php echo $plan; ?> plan</h2>
	</div>
	<div class="container box-shadow">
		<h2 class="text-center">Tell me who you are</h2>
		<form method="POST" action="/signup">
		  <div class="row">
		    <div class="form-group col-md-6 offset-md-3">
		      <input name="firstName" type="text" class="form-control" placeholder="First name" required>
		    </div>
		    <div class="form-group col-md-6 offset-md-3">
		      <input name="lastName" type="text" class="form-control" placeholder="Last name" required>
		    </div>
		    <div class="form-group col-md-6 offset-md-3">
		      <input name="email" type="email" class="form-control" placeholder="Email" required>
		    </div>
		    <div class="form-group col-md-6 offset-md-3">
		      <input name="password" type="password" class="form-control" placeholder="Password" required>
		    </div>
		    <div class="form-group col-md-6 offset-md-3">
		      <input name="repeat_password" type="password" class="form-control" placeholder="Repeat Password" required>
		    </div>
		    <input name="plan" type="hidden" value="<?php echo $plan; ?>">
		  </div>
		  <div class="col-md-4 offset-md-4">
		  	<button type="submit" class="btn btn-success btn-block">Sign Up</button>
		  </div>
		</form>		
	</div>
	<?php include 'layouts/scripts.php'; ?>
</body>
</html>