<?php
/**
 * This site displays all voyages from the table in database.
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

	<!-- body: Show travel offers in a table -->
	<body>
		<h1 style='text-align:center;'>Herzlich willkommen in unserer Bücherei</h1>
		<p style='text-align:center;'>Hier sehen Sie unsere gesamtes Sortiment gelistet.</p>
		<div id="wrapper">
			<?php
			/**
			 * IMPORTANT: Sequence of the parameters always must
			 * be $HOST_NAME, %USER_NAME, $PASSWORD and $DATABASE_NAME.
			 * Error occurs, if wrong order is provided.
			 */
			$reisebuero_db = new Database( "localhost","christoph","hpotsirhc","reisebuero" );
			$result_of_query = $reisebuero_db->query( "SELECT * FROM reisen" );
			echo "<table border='1' style='margin-left:auto;margin-right:auto;'>";
			while( $row = mysqli_fetch_assoc( $result_of_query ) )
			{
				echo "<tr>";
				echo "<td>".$row["id"]."</td>";
				echo "<td>".$row["bezeichnung"]."</td>";
				echo "<td>".$row["gesamtpreis"]." €"."</td>";
				echo "<td>".$row["anreisedatum"]."</td>";
				echo "<td>".$row["abreisedatum"]."</td>";
				echo "<td>".$row["startflughafen"]."</td>";
				echo "<td>".$row["uebernachtungsort"]."</td>";
				echo "<td>".$row["hotelname"]."</td>";
				echo "<td>".$row["reiseart"]."</td>";
				echo "</tr>";
			}
			echo "</table>";
			$reisebuero_db->close(); # Close connection to database
			require_once "include/include_footer.php";
			?>
		</div>
	</body>
	<!-- /body -->

</html>