<!-- Header Datei wird eingefügt-->

<?php
include ('header.php');
?>

<body>
	<div id="wrapper">
		<div class="container-fluid">
			<div id="header">
				<div id="bottomHeaderContent">
					<div id="headerLogo">
						<div class="row">
							<div class="col-xs-12">
								<a href="index.php"> <img src="img/logoBanner.png" class="img-responsive"> </a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="main">
				<!-- Footer Datei wird eingefügt-->

				<?php
				include ('subPages/startseite.php');
				?>
				<div class="row">
					<div class="col-xs-12">
						<a role="button" data-toggle="collapse" href="#collapseExample" aria-expanded="false" aria-controls="collapseExample"> <img id="dropdownButton" class="img-responsive center-block" src="img/dropDownButton.png"> </a>
						<div class="collapse col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2" id="collapseExample">
							<p class="normalText" style="margin-top: 50px;">
								leftover ist unser kleines Projekt. Wir sind vier Studenten der Hochschule Bremen und</br>
								haben dieses Kochbuch für euch von Grund auf konstruiert.</br>
								Hier zeigen wir euch, was wir aus unseren Resten gezaubert haben.
								Uns geht es besonders darum, dass ihr aus euren leftover Sachen noch schicke Gerichte für Freunde,
								Freund/in und Familie herrichten könnt. Leckere Gerichte die auf Grundlage einer Basis wie: Nudeln, Reis, Brot ect.
								basieren und nur mit wenigen weiteren Zutaten zubereitet werden.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="footer" class="container-fluid">
			<!-- Footer Datei wird eingefügt-->

			<?php
			include ('footer.php');
			?>
		</div>
		<!-- Menu Datei wird eingefügt

		<?php
		include ('subPages/menu.php');
		?>
		-->
</body>
</html>