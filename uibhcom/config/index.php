<?php
include('bell.php');
$site = new Bell();
if (empty($_POST)) {
	echo 'No data has been sent to this URL!';
} else {
	$site->list($_POST);
}