<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>coba</title>

    <!-- Bootstrap -->
    <link href="../../../bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="../../../bootstrap-3.3.7-dist/js/jquery.min.js"></script>
    <script src="../../../bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>


  </head>
  <body>
  <div class="container-fluid">
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="container-fluid">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Carisco</a>
			</div>
			<ul class="nav navbar-nav">
				<li><a href="#">HOME</a></li>
				<li class="dropdown">
					<a href="#" data-toggle="dropdown" class="dropdown-toggle">LAYANAN </a>
					<ul class="dropdown-menu">
						<li><a href="#">PROFIL</a></li>
						<li><a href="#"></a></li>
					</ul>
				</li>
				<li><a href="#"></a></li>
				<li><a href="#">GAME</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" data-toggle="dropdown" class="dropdown-toggle"><span class="glyphicon glyphicon-log-in">  Log-In <span class="caret"></span></span></a>
					<ul class="dropdown-menu">
							<form name="log-in" method="post" action="xxx.php">
								<input name="username" type="text">
								<input name="username" type="text">
								<input class="btn btn-danger" type="submit" value="Log In">
							</form>
					</ul>
				</li>
				<li><a href="#">Sign Up</a></li>
				<li><a href="#">Contact Us</a></li>
			</ul>
		</div>
	</div>
</div>
  @yield('konten')
  </body>
</html>
