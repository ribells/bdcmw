<?php
//require 'config.php';
$thisPage = "quest";
require 'connect.php';
require 'startpage.php';
?>
				<!-- Nav -->
				<div id="top_menu">
					<ul>
						<li><a href="#">What is ADA?</a></li>
						<li><a href="#">Who we help</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Useful Info</a></li>
						<li><a href="#">TV & Writings</a></li>
					</ul>
				</div>
			</div>
			
		<!-- Banner -->
			<section id="content_banner">
				<div class="inner">
					<h1 style="background-color: #1b28ce; color: white;">Assessment Questionnaire</h1>
				</div>
			</section>
			</section>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
					<form id="page1" action="process_quest.php" method="post">
					<div class="odd">
						1. Name: <input name="name" type="text" /><br/><br/>
					</div>
					<br/><br/>
					<div class="even">
						2. Email address: <input name="email" type="text" /><br/><br/>
					</div>
					<br/><br/>
					<div class="odd">
						3. Specify your role  (parent, teacher, therapist, etc.) with child(ren): <input name="role" type="text" /><br/><br/>
					</div>
					<br/><br/>
					<div class="question even">
					<?php
					$query = "SELECT quest FROM questions WHERE id = 1";
					$result = mysqli_query($link, $query) or exit('Error getting question.');

					$question = mysqli_result($result, 0);
					echo "4. ".$question;
					echo '</div><div class="even">';
					$query = "SELECT name, a1, a2, a3, a4, a5, a6, a7, a8, a9, a10 FROM questions WHERE id = 1";
					$result = mysqli_query($link, $query) or exit('Error getting answers.');
					$valid = true;
					$acount = 1;
					if ($row = mysqli_fetch_array($result)) {
						while ($valid==true && $acount < 10) {
							if($row[$acount] == "-1") {
								$valid = false;
							} else {
								echo '<input type="radio" name="'.$row[0].'" value="'.$acount.'" /><label>';
								echo $row[$acount];
								echo '</label><br/>';
								$acount++;		
							}
						}
					}
					?>
					</div>
					<br/><br/>
					<div class="question odd">
					<?php
					$query = "SELECT quest FROM questions WHERE id = 2";
					$result = mysqli_query($link, $query) or exit('Error getting question.');

					$question = mysqli_result($result, 0);
					echo "5. ".$question;
					echo '</div><div class="odd">';
					$query = "SELECT name, a1, a2, a3, a4, a5, a6, a7, a8, a9, a10 FROM questions WHERE id = 2";
					$result = mysqli_query($link, $query) or exit('Error getting answers.');
					$valid = true;
					$acount = 1;
					if ($row = mysqli_fetch_array($result)) {
						while ($valid==true && $acount < 10) {
							if($row[$acount] == "-1") {
								$valid = false;
							} else {
								echo '<input type="radio" name="'.$row[0].'" value="'.$acount.'" /><label>';
								echo $row[$acount];
								echo '</label><br/>';
								$acount++;		
							}
						}
					}
					?>
					</div>
					<br/><br/>
					<div class="question even">
					<?php
					$query = "SELECT quest FROM questions WHERE id = 3";
					$result = mysqli_query($link, $query) or exit('Error getting question.');

					$question = mysqli_result($result, 0);
					echo "6. ".$question;
					echo '</div><div class="even">';
					$query = "SELECT name, a1, a2, a3, a4, a5, a6, a7, a8, a9, a10 FROM questions WHERE id = 3";
					$result = mysqli_query($link, $query) or exit('Error getting answers.');
					$valid = true;
					$acount = 1;
					if ($row = mysqli_fetch_array($result)) {
						while ($valid==true && $acount < 10) {
							if($row[$acount] == "-1") {
								$valid = false;
							} else {
								echo '<input type="radio" name="'.$row[0].'" value="'.$acount.'" /><label>';
								echo $row[$acount];
								echo '</label><br/>';
								$acount++;		
							}
						}
					}
					?>
					</div>
					<br/><br/>
					<div class="question odd">
					<?php
					$query = "SELECT quest FROM questions WHERE id = 4";
					$result = mysqli_query($link, $query) or exit('Error getting question.');

					$question = mysqli_result($result, 0);
					echo "7. ".$question; 
					echo '</div><div class="odd">';
					$query = "SELECT name, a1, a2, a3, a4, a5, a6, a7, a8, a9, a10 FROM questions WHERE id = 4";
					$result = mysqli_query($link, $query) or exit('Error getting answers.');
					$valid = true;
					$acount = 1;
					if ($row = mysqli_fetch_array($result)) {
						while ($valid==true && $acount < 10) {
							if($row[$acount] == "-1") {
								$valid = false;
							} else {
								echo '<input type="radio" name="'.$row[0].'" value="'.$acount.'" /><label>';
								echo $row[$acount];
								echo '</label><br/>';
								$acount++;		
							}
						}
					}
					?>
					</div>
					<br/><br/>
					<div class="question even">
					<?php
					$query = "SELECT quest FROM questions WHERE id = 5";
					$result = mysqli_query($link, $query) or exit('Error getting question.');

					$question = mysqli_result($result, 0);
					echo "8. ".$question; 
					echo '</div><div class="even">';
					$query = "SELECT name, a1, a2, a3, a4, a5, a6, a7, a8, a9, a10 FROM questions WHERE id = 5";
					$result = mysqli_query($link, $query) or exit('Error getting answers.');
					$valid = true;
					$acount = 1;
					if ($row = mysqli_fetch_array($result)) {
						while ($valid==true && $acount < 10) {
							if($row[$acount] == "-1") {
								$valid = false;
							} else {
								echo '<input type="radio" name="'.$row[0].'" value="'.$acount.'" /><label>';
								echo $row[$acount];
								echo '</label><br/>';
								$acount++;		
							}
						}
					}
					?>
					</div>
					<br/><br/>
					<center><input type="submit" value="Next" /></center>
					</form>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
			<!-- script src="assets/js/selectBoxIt.js"></script -->
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

<?php include ('includes/endpage.html'); ?>