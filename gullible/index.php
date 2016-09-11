<?php

define('TOROOT', '../');

require TOROOT.'config.php';
$currentPage = 'roster';

$mode = 'roster';
// include TOROOT.'code.php';
require TOROOT.'header.php';
?>

<div class="card">
	<h2>Gullible Roster</h2>
	<table id="gullibleRoster">
		<thead>
			<tr>
				<td>Date</td>
				<td>Keeper</td>
			</tr>
		</thead>
		<tbody>
			<?php
					for ($i = 0; $i < count($rdata); $i++) {
						if ($i == $nclosest) {
							echo "<tr class='current'>";
						} else {
							echo "<tr>";
						}
						echo "<td>" . date('j/n/Y', strtotime($rdata[$i]['date'])) . "</td>";
						echo "<td>" . $rdata[$i]['keeper'] . "</td>";
						echo "</tr>";
					}
				?>
		</tbody>
	</table>
	<center><a href="../pdf/gullible.pdf" download="download" class="button">Download pdf version</a><a href="https://www.facebook.com/Gullible-The-Dragon-560228167514170/" class="button btnAlt">Facebook Page</a></center>
</div>
<?php require TOROOT.'footer.php'; ?>