<?php include 'protected/HasAuth.php';?>
<html>
<head>
	<?php include 'layouts/header.php'; ?>
</head>
<body>
	<?php include 'layouts/navbar.php'; ?>

	<h1 class="text-center"><?php echo $user['first_name'];?></h1>
	<div class="container">
		<div class="row">
			<div class="col-lg-6 offset-lg-3">
				<div id="accordion">
					<table class="table table-bordered">
						<tr>
							<thead class="clickable thead-dark" data-toggle="collapse" data-target="#stack" aria-expanded="true" aria-controls="collapseOne">
								<th class="text-center" scope="col">Stack</th>
							</thead>
						</tr>
					</table>
					<div id="stack" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
						<table class="table table-bordered table-hover">
							<tr>
								<td class="text-center">1</td>
							</tr>
							<tr>
								<td class="text-center">2</td>
							</tr>
							<tr>
								<td class="text-center">3</td>
							</tr>
						</table>
					</div>
					<table class="table table-bordered">
						<tr>
							<thead class="clickable thead-dark" data-toggle="collapse" data-target="#queue" aria-expanded="false" aria-controls="collapseTwo">
								<th class="text-center" scope="col">Queue</th>
							</thead>
						</tr>
					</table>
					<div id="queue" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
						<table class="table table-bordered table-hover">
							<tr>
								<td class="text-center">1</td>
							</tr>
							<tr>
								<td class="text-center">2</td>
							</tr>
							<tr>
								<td class="text-center">3</td>
							</tr>
						</table>
					</div>					

				</div>
			</div>
		</div>
	</div>


<?php include 'layouts/scripts.php';?>		
</body>
</html>

