<?php
//require 'config.php';
$thisPage = "process_quest";
require 'connect.php';
require 'startpage.php';
?>
				<!-- Nav -->
				<div id="top_menu">
					<ul>
						<li><a href="#">What is ADA?</a></li>
						<li><a href="#">Who we help</a></li>
						<li><a href="#">About Us</a></li>
						<li><a href="#">Diagnostic & Intervention Info</a></li>
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
					<?php
					foreach ($_POST as $key => $value) {
						echo "Field ".htmlspecialchars($key)." is ".htmlspecialchars($value)."<br/>";
					}

					//get the form's contents
					if (isset($_POST['name'])) {
						$name = $_POST['name'];
					}
					if (isset($_POST['email'])) {
						$email = $_POST['email'];
					}
					if (isset($_POST['role'])) {
						$role = $_POST['role'];
					}
					if (isset($_POST['age'])) {
						$age = $_POST['age'];
					}
					if (isset($_POST['previous'])) {
						$previous = $_POST['previous'];
					}
					if (isset($_POST['sped'])) {
						$sped = $_POST['sped'];
					}
					if (isset($_POST['counsel'])) {
						$counsel = $_POST['counsel'];
					}
					if (isset($_POST['meetings'])) {
						$meetings = $_POST['meetings'];
					}

					/* everything is good, so update page 1 */
					$page1_insert_query = "INSERT INTO page1 VALUES ('".$name."', '".$email."', '".$role."', ".$age.", ".$previous.", ".$sped.", ".$counsel.", ".$meetings.")";

					echo "<br/>".$page1_insert_query."<br/><br/>";

					if (!mysqli_query($link, $page1_insert_query)) {
						echo "Unable to update page1 information.  Please try again.";
						require('quest.php');
						exit();
					} else {
						echo "Processed Page 1 information.  Page 2 would appear here.";
					}
				    ?>
				    <br/><br/>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
			<!-- script src="assets/js/selectBoxIt.js"></script -->
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

<?php include ('includes/endpage.html'); ?>