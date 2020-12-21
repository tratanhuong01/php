<?php 
	session_start();
	if (isset($_REQUEST['st'])) {
		if (isset($_SESSION['user'])) {
			echo '<input type="text" id="checkee" value="true">';
		}
		else {
			echo '<input type="text" id="checkee" value="false">';
		}
	}
?>
