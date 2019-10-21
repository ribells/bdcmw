<?php
// Connect to an sql database for ada therapy
$link = mysqli_init();
mysqli_options($link, MYSQLI_OPT_LOCAL_INFILE, false);
mysqli_real_connect($link, 'localhost','adaquest','+rB1DCp+R2!mw1c','adaquest') or exit('Could not speak with server. Please try again later.');

function mysqli_result($res,$row=0,$col=0){ 
	$numrows = mysqli_num_rows($res); 
	if ($numrows && $row <= ($numrows-1) && $row >=0){
			mysqli_data_seek($res,$row);
			$resrow = (is_numeric($col)) ? mysqli_fetch_row($res) : mysqli_fetch_assoc($res);
			if (isset($resrow[$col])){
					return $resrow[$col];
			}
	}
	return false;
}

//This stops SQL Injection in POST vars
  foreach ($_POST as $key => $value) {
  	if (!is_array($_POST[$key])) {
		if (get_magic_quotes_gpc()) {
			$value = stripslashes($value);
		}
    	$_POST[$key] = mysqli_real_escape_string($link, $value);
  	}
  }
//This stops SQL Injection in GET vars
  foreach ($_GET as $key => $value) {
		if (get_magic_quotes_gpc()) {
			$value = stripslashes($value);
		}
		$_GET[$key] = mysqli_real_escape_string($link, $value);
  }
?>