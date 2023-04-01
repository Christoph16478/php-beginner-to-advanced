<?php
/**
* Homepage: Entry point of the website.
*/

require_once "include/include_header.php";
require_once "classes/Database.php"
?>

<!DOCTYPE html>

	<!-- header: Include CSS files and necessary bootstrap files form the web --> 
	<head>
		<title>Reisebüro Starlines</title>
		<meta charset="UTF-8">
		<?php require_once "include/include_bootstrap.php"; ?>
		<link rel="stylesheet" href="../resources/css/blink.css">
	</head>
	<!-- /header -->

	<!-- body: Contains the Greeting text, name of travel agency and additional offers -->
	<body >
		<h1 style='text-align:center;'>Herzlich willkommen auf der Webseite des<br> <i>Reisebüro Starlines</i></h1>
		<br>
		<p style='text-align:center;'>Wir bieten Reiseangebote für alt und jung, für betuchtes und mittelständisches Publikum aber auch für abenteuerbegeisterte</p>
		<p style='text-align:center;'>Stöbern Sie in unserem Sortiment aus wohl zusammengestellten Reiseangboten und erleben Sie einen unvergesslichen Urlaub.</p>
		<br><br>
		<!-- Pictures: Click on pictures to get to further offers from various travel agencies -->
		<div class="d-flex justify-content-center row">
		<p style='text-align:left;font-size:40px'>Weitere<br> Angebote<br> hier:</p>
		<div class="d-flex justify-content-center col-lg-3 col-md-4 col-xs-4 thumb">
			<a class="thumbnail" href="https://www.ab-ins-blaue.at/urlaub/tuerkei/lastminute.html?gclid=EAIaIQobChMIt47KuuSg8gIVB-rtCh35yAljEAAYASAAEgK01PD_BwE">
				<img class="img-responsive" src="../resources/images/abinsblaue.png" alt="">
			</a>
		</div>
		<div class="d-flex justify-content-center col-lg-3 col-md-4 col-xs-4 thumb">
			<a class="thumbnail" href="https://www.tui.at/last-minute/">
				<img class="img-responsive" src="../resources/images/tuidiscoveryoursmile.png" alt="">
			</a>
		</div>
		<div class="d-flex justify-content-center col-lg-3 col-md-4 col-xs-4 thumb">
			<a class="thumbnail" href="https://globus-reisebuero.de/site/startseite/">
				<img class="img-responsive" src="../resources/images/globusreisebuero.png" alt="">
			</a>
		</div>
		<!-- /Pictures -->

		<?php
		require_once "include/include_footer.php";
		?>

	</body>
	<!-- /body -->

</html>