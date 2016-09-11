<?php

define('TOROOT', './');

require TOROOT.'config.php';
$currentPage = 'dashboard';

$mode = 'schedule';
include TOROOT.'code.php';
require TOROOT.'header.php';
?>

<div class="card">
	<h2>Upcoming</h2>
	<table id="metaTable">
		<tr>
			<td><img src="res/activity.svg" /></td>
			<td><span class="meta activity"><?php echo $data[$closest]['activity']; ?></span></td>
		</tr>
		<tr>
			<td><img src="res/date.svg" /></td>
			<td><span class="meta date"><?php echo $data[$closest]['datetext']; ?></span></td>
		</tr>
		<tr>
			<td><img src="res/duration.svg" /></td>
			<td><span class="meta duration"><?php echo $data[$closest]['duration']; ?></span></td>
		</tr>
		<tr>
			<td><img src="res/location.svg" /></td>
			<td><span class="meta location"><?php if ($data[$closest]['location'] != "") { echo "<a target='_blank' href='http://maps.google.com/?q=" . $data[$closest]['location'] . "'>" . $data[$closest]['location'] . "</a>"; } ?></span></td>
		</tr>
		<tr>
			<td><img src="res/details.svg" /></td>
			<td><span class="meta details"><?php echo $data[$closest]['details']; ?></span></td>
		</tr>
		<tr>
			<td><img src="res/organiser.svg" /></td>
			<td><span class="meta organiser"><?php echo $data[$closest]['organiser']; ?></span></td>
		</tr>
	</table>
	<center><a href="./schedule/" class="button">View Full Schedule</a></center>
</div>
<?php
	$mode = 'roster';
	//include('code.php');
?>
<div class="card">
	<h2>Gullible The Dragon</h2>
	<span class="meta gullibleHolder"><span class="name"><?php if (empty($rdata[$nclosest])) { echo "No one"; } else { echo $rdata[$nclosest]['keeper']; } ?></span> currently has Gullible until <?php if (empty($rdata[$nclosest + 1])) { echo "the end"; } else { echo date('l \t\h\e jS \o\f F', strtotime($rdata[$nclosest + 1]['date'])); } ?>.</span>
	<span class="meta gullibleNext">The next in line to recieve Gullible is <span class="name"><?php if (empty($rdata[$nclosest + 1])) { echo "no one"; } else { echo $rdata[$nclosest + 1]['keeper']; } ?></span>.</span>
	<center><a href="./gullible/" class="button">View Roster</a><a href="https://www.facebook.com/Gullible-The-Dragon-560228167514170/" class="button btnAlt">Facebook Page</a></center>
</div>

<?php require TOROOT.'footer.php'; ?>