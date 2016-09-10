<?php

if (!isset($mode)) {
	$mode = 'nothing';
}

$mysqli = new mysqli('localhost', 'GRA0007', 'Sparkle13', 'monash');

//Check if the server is up
if ($mysqli->connect_errno) {
    exit;
}

if ($mode == 'schedule') {
	//Select the data
	$sql = "SELECT `id`, `date`, `datetext`, `activity`, `duration`, `location`, `details`, `organiser` FROM schedule ORDER BY `date` ASC";
	if (!$result = $mysqli->query($sql)) {
		exit;
	}
	
	//Make sure the database is populated
	if ($result->num_rows == 0) {
		echo 'Empty';
		exit;
	}
	
	//Put it all in an array
	$data = array();
	$i = 0;
	while ($row = mysqli_fetch_array($result)) {
        $data[$i] = array('id' => $row['id'], 'date' => $row['date'], 'datetext' => $row['datetext'], 'activity' => $row['activity'], 'duration' => $row['duration'], 'location' => $row['location'], 'details' => $row['details'], 'organiser' => $row['organiser']);
		$i++;
    }
	
	//Get the current/upcoming activity
	foreach($data as $cRow) {
		$interval[] = abs(time() - strtotime($cRow['date']));
	}
	
	asort($interval);
    $closest = key($interval);
}

if ($mode == 'roster') {
	//Select the data
	$sql = "SELECT `id`, `date`, `keeper` FROM roster ORDER BY `date` ASC";
	if (!$result = $mysqli->query($sql)) {
		exit;
	}
	
	//Make sure the database is populated
	if ($result->num_rows == 0) {
		echo 'Empty';
		exit;
	}
	
	//Put it all in an array
	$rdata = array();
	$ri = 0;
	while ($rrow = mysqli_fetch_array($result)) {
        $rdata[$ri] = array('id' => $rrow['id'], 'date' => $rrow['date'], 'keeper' => $rrow['keeper']);
		$ri++;
    }

	//Get the current/upcoming keeper
	foreach($rdata as $rcRow) {
		$rinterval[] = abs(time() - strtotime($rcRow['date']));
	}

	asort($rinterval);
	$nclosest = key($rinterval);
}