<!-- Header Datei wird eingefügt-->

<?php
include ('../header.php');
?>
<body>
	<div id="wrapper">
		<div class="container-fluid">
			<div id="header">
				<div id="bottomHeaderContent">
					<div id="headerLogo">
						<div class="row">
							<div class="col-xs-12">
								<a href="../index.php"> <img src="../img/logoBanner.png" class="img-responsive"> </a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="main">
				<div class="row">
					<div id="contact_form" class="col-xs-10 col-xs-offset-1">
						<div class="well well-sm">
							<form class="form-horizontal" action="" method="post">
								<fieldset>
									<legend class="text-center">
										Schreib Uns
									</legend>

									<!-- Name input-->
									<div class="form-group">
										<label class="col-md-3 control-label" for="name">Name</label>
										<div class="col-md-9">
											<input id="name" name="name" type="text" placeholder="Dein Name" class="form-control">
										</div>
									</div>

									<!-- Email input-->
									<div class="form-group">
										<label class="col-md-3 control-label" for="email">Deine E-Mail</label>
										<div class="col-md-9">
											<input id="email" name="email" type="text" placeholder="Deine E-Mail Adresse" class="form-control">
										</div>
									</div>

									<!-- Message body -->
									<div class="form-group">
										<label class="col-md-3 control-label" for="message">Deine Nachricht</label>
										<div class="col-md-9">
											<textarea class="form-control" id="message" name="message" placeholder="Hier kannst du deine Nachricht hinterlassen..." rows="5"></textarea>
										</div>
									</div>

									<!-- Form actions -->
									<div class="form-group">
										<div class="col-md-12 text-right">
											<button id="submit_button" type="submit" class="btn btn-primary btn-lg">
												Absenden
											</button>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="footer" class="container-fluid">
			<!-- Footer Datei wird eingefügt-->

			<?php
			include ('../footer.php');
			?>
		</div>
		<!-- Menu Datei wird eingefügt

		<?php
		include ('subPages/menu.php');
		?>
		-->
</body>
</html>