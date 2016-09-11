<?php

define('TOROOT', '../');

require TOROOT.'config.php';
$currentPage = 'schedule';

$mode = 'schedule';
include TOROOT.'code.php';
require TOROOT.'header.php';
?>

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
<?php require TOROOT.'footer.php'; ?>