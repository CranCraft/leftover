<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>leftover</title>

		<!-- Bootstrap -->
		<link href="main.css" rel="stylesheet">

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="bootstrap-3.3.6/js/bootstrap.min.js"></script>
		<!-- Main JavaScript Datei einbinden-->
		<script src="js/main.js" type="text/javascript"></script>
		<link href="img/icon.png" rel="shortcut icon"
	</head>
	<body>
		<div id="wrapper">
			<div class="container-fluid">
				<div id="header">
					<div id="bottomHeaderContent">
						<div id="headerLogo">
							<div class="row">
								<div class="col-xs-12">
									<a href="index.php">
									<img src="img/logoBanner.png" class="img-responsive">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="main">
					<div class="row">
						<div col-md-3 col-md-offset-2 col-xs-12>
							<div class="caption">
								contact
							</div>
							<form id="contact_form" action="#" method="POST" enctype="multipart/form-data">
								<div class="row">
									<label for="name">dein name:</label><br />
									<input id="name" class="input" name="name" type="text" value="" size="30" /><br />
								</div>
								<div class="row">
									<label for="email">deine email:</label><br />
									<input id="email" class="input" name="email" type="text" value="" size="30" /><br />
								</div>
								<div class="row">
									<label for="message">deine message:</label><br />
									<textarea id="message" class="input" name="message" rows="7" cols="30"></textarea><br />
								<input id="submit_button" type="submit" value="Send email" />
								</div>								
							</form>						
						</div>
					</div> 
				</div>
				<div id="footer"></div>
			</div>
		</div>
		  <nav class="navbar navbar-fixed-right navbar-minimal animate" role="navigation">
		<div class="navbar-toggler animate">
			<span class="menu-icon"></span>
		</div>
		<ul class="navbar-menu animate">
			<li>
				<a href="index.php" class="animate">
					<span class="desc animate"> Home </span>
					<span class="glyphicon glyphicon-home"></span>
				</a>
			</li>
			<li>
				<a href="aboutUs.php" class="animate">
					<span class="desc animate"> Who We Are </span>
					<span class="glyphicon glyphicon-user"></span>
				</a>
			</li>
			<li>
				<a href="info.php" class="animate">
					<span class="desc animate"> Info </span>
					<span class="glyphicon glyphicon-info-sign"></span>
				</a>
			</li>
		</ul>
	</nav>
	</body>
</html>