<?php 
	require '../inc/db.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Tell the browser that the page is UTF-8 -->
	<meta charset="UTF-8">

	<!-- Tells the browser to scale the page according to the device's dpi -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Link the stylesheet -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme-cyborg.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/dashboard.css">
	<style>
		/*body {
			padding-top: 3.4rem;
			background: #f5f5f5;
		}
		.container {
			background: #fff;
		}*/
	</style>

	<!-- Page Title -->
	<title>KohlerCMS</title>
</head>
<body>
	<nav class="navbar navbar-toggleable-md navbar-inverse bg-primary fixed-top">
		<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<a class="navbar-brand" href="#">Navbar</a>

		<div class="collapse navbar-collapse" id="navbarColor01">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Features</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Pricing</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">About</a>
				</li>
			</ul>
			<form class="form-inline">
				<input class="form-control mr-sm-2" type="text" placeholder="Search">
				<button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
			</form>
		</div>
	</nav>

	<div class="container-fluid">
		<div class="row">
			<nav class="col-sm-3 col-md-2 hidden-xs-down bg-inverse sidebar">
				<ul class="nav nav-pills flex-column">
					<li class="nav-item">
						<a class="nav-link active" href="#">Overview <span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Reports</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Analytics</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Export</a>
					</li>
				</ul>

				<ul class="nav nav-pills flex-column">
					<li class="nav-item">
						<a class="nav-link" href="#">Nav item</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Nav item again</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">One more nav</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Another nav item</a>
					</li>
				</ul>

				<ul class="nav nav-pills flex-column">
					<li class="nav-item">
						<a class="nav-link" href="#">Nav item again</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">One more nav</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Another nav item</a>
					</li>
				</ul>
			</nav>
			<main class="col-sm-3 offset-sm-3 col-md-10 offset-md-2 pt-3">
				<h1>Dashboard</h1>

				<section class="row text-center placeholders">
					<div class="col-6 col-sm-3 placeholder">
						<img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
						<h4>64%</h4>
						<div class="text-muted">Users</div>
					</div>
					<div class="col-6 col-sm-3 placeholder">
						<img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
						<h4>32%</h4>
						<span class="text-muted">Orders</span>
					</div>
					<div class="col-6 col-sm-3 placeholder">
						<img src="data:image/gif;base64,R0lGODlhAQABAIABAAJ12AAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
						<h4>16%</h4>
						<span class="text-muted">RMAs</span>
					</div>
					<div class="col-6 col-sm-3 placeholder">
						<img src="data:image/gif;base64,R0lGODlhAQABAIABAADcgwAAACwAAAAAAQABAAACAkQBADs=" width="200" height="200" class="img-fluid rounded-circle" alt="Generic placeholder thumbnail">
						<h4>8%</h4>
						<span class="text-muted">Income</span>
					</div>
				</section>

				<h2>Customers</h2>
				<div class="table-responsive">
					<table class="table table-striped">
						<thead>
							<tr>
								<th>#</th>
								<th>Header</th>
								<th>Header</th>
								<th>Header</th>
								<th>Header</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>1,001</td>
								<td>Lorem</td>
								<td>ipsum</td>
								<td>dolor</td>
								<td>sit</td>
							</tr>
							<tr>
								<td>1,002</td>
								<td>amet</td>
								<td>consectetur</td>
								<td>adipiscing</td>
								<td>elit</td>
							</tr>
							<tr>
								<td>1,003</td>
								<td>Integer</td>
								<td>nec</td>
								<td>odio</td>
								<td>Praesent</td>
							</tr>
							<tr>
								<td>1,003</td>
								<td>libero</td>
								<td>Sed</td>
								<td>cursus</td>
								<td>ante</td>
							</tr>
							<tr>
								<td>1,004</td>
								<td>dapibus</td>
								<td>diam</td>
								<td>Sed</td>
								<td>nisi</td>
							</tr>
							<tr>
								<td>1,005</td>
								<td>Nulla</td>
								<td>quis</td>
								<td>sem</td>
								<td>at</td>
							</tr>
							<tr>
								<td>1,006</td>
								<td>nibh</td>
								<td>elementum</td>
								<td>imperdiet</td>
								<td>Duis</td>
							</tr>
							<tr>
								<td>1,007</td>
								<td>sagittis</td>
								<td>ipsum</td>
								<td>Praesent</td>
								<td>mauris</td>
							</tr>
							<tr>
								<td>1,008</td>
								<td>Fusce</td>
								<td>nec</td>
								<td>tellus</td>
								<td>sed</td>
							</tr>
							<tr>
								<td>1,009</td>
								<td>augue</td>
								<td>semper</td>
								<td>porta</td>
								<td>Mauris</td>
							</tr>
							<tr>
								<td>1,010</td>
								<td>massa</td>
								<td>Vestibulum</td>
								<td>lacinia</td>
								<td>arcu</td>
							</tr>
							<tr>
								<td>1,011</td>
								<td>eget</td>
								<td>nulla</td>
								<td>Class</td>
								<td>aptent</td>
							</tr>
							<tr>
								<td>1,012</td>
								<td>taciti</td>
								<td>sociosqu</td>
								<td>ad</td>
								<td>litora</td>
							</tr>
							<tr>
								<td>1,013</td>
								<td>torquent</td>
								<td>per</td>
								<td>conubia</td>
								<td>nostra</td>
							</tr>
							<tr>
								<td>1,014</td>
								<td>per</td>
								<td>inceptos</td>
								<td>himenaeos</td>
								<td>Curabitur</td>
							</tr>
							<tr>
								<td>1,015</td>
								<td>sodales</td>
								<td>ligula</td>
								<td>in</td>
								<td>libero</td>
							</tr>
						</tbody>
					</table>
				</div>
			</main>
		</div>
	</div><!-- /.container-fluid -->
	<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js""></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
</body>
</html>