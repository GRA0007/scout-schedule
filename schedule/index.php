<?php
	$mode = 'schedule';
	include('../code.php');
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Schedule | Monash Schedule</title>
		<link rel="stylesheet" href="../style.css" type="text/css" />
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
		<!-- Real favicon -->
		<link rel="apple-touch-icon" sizes="180x180" href="../apple-touch-icon.png">
		<link rel="icon" type="image/png" href="../favicon-32x32.png" sizes="32x32">
		<link rel="icon" type="image/png" href="../favicon-16x16.png" sizes="16x16">
		<link rel="manifest" href="../manifest.json">
		<link rel="mask-icon" href="../safari-pinned-tab.svg" color="#2554a3">
		<meta name="apple-mobile-web-app-title" content="Monash Schedule">
		<meta name="application-name" content="Monash Schedule">
		<meta name="theme-color" content="#2554a3">
	</head>
	<body>
		<nav>
			<div id="menuButton" onclick="openCloseMenu();"></div>
			<h1>Monash Schedule</h1>
		</nav>
		<main>
			<div class="card">
				<h2>Schedule for Term <?php echo '3'; ?></h2>
				<div class="overflow">
					<table id="schedule">
						<thead>
							<tr>
								<td>Date</td>
								<td>Activity</td>
								<td>Time</td>
								<td>Location</td>
								<td>Details</td>
								<td>Organiser</td>
							</tr>
						</thead>
						<tbody>
							<?php
								for ($i = 0; $i < count($data); $i++) {
									if ($i == $closest) {
										echo "<tr class='current'>";
									} else {
										echo "<tr>";
									}
									echo "<td>" . $data[$i]['datetext'] . "</td>";
									echo "<td>" . $data[$i]['activity'] . "</td>";
									echo "<td>" . $data[$i]['duration'] . "</td>";
									echo "<td>" . $data[$i]['location'] . "</td>";
									echo "<td>" . $data[$i]['details'] . "</td>";
									echo "<td>" . $data[$i]['organiser'] . "</td>";
									echo "</tr>";
								}
							?>
						</tbody>
					</table>
				</div>
				<center><a href="../pdf/schedule.pdf" download="download" class="button">Download pdf version</a><a href="https://www.facebook.com/groups/174698566054845/535109400013758/" class="button btnAlt">Facebook Group</a></center>
			</div>
			<footer>
				Made with &#10084; by Ben
			</footer>
		</main>
		<div id="menu">
			<a href="../" class="drawItem">Dashboard</a>
			<a href="../schedule/" class="drawItem active">Full Schedule</a>
			<a href="../gullible/" class="drawItem">Gullible Roster</a>
			<div class="drawSpacer"></div>
			<a href="https://www.facebook.com/Gullible-The-Dragon-560228167514170/" class="drawItem">Gullible Page</a>
			<a href="https://www.facebook.com/groups/174698566054845/535109400013758/" class="drawItem">Monash Group</a>
		</div>
		<div id="filter" onclick="openCloseMenu();"></div>
		<script src="../script.js"></script>
	</body>
</html>