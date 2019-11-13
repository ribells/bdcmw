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
					<h1 style="background-color: rgb(76, 200, 241); color: white;">Assessment Questionnaire</h1>
				</div>
			</section>
			</section>

		<!-- Main -->
			<section id="main" class="wrapper">
				<div class="inner">
					<div class="content">
					<form id="page1" action="page1.php" method="post">
					1. Name: <input name="name" type="text" /><br/><br/>
					2. Email address: <input name="name" type="text" /><br/><br/>
					3. Specify your role  (parent, teacher, therapist, etc.) with child(ren): <input name="role" type="text" /><br/><br/>
<div>
<?php
$query = "SELECT quest FROM questions WHERE id = 1";
$result = mysqli_query($link, $query) or exit('Error getting question.');

$question = mysqli_result($result, 0);
echo $question; 
//INSERT INTO questions VALUES (1, 'Age of individual in question:' , 1, 1)
?>
</div>
						<select id="age" name="age">
							<option value="0" selected="selected">Make a selection...</option>
							<option value="1">Infancy 0-to-1</option>
							<option value="2">Toddler 1-to-3</option>
							<option value="3">Preschool 4-to-5</option>
							<option value="4">Early school age 5-to-7</option>
							<option value="5">Middle Elementary 7-to-9</option>
							<option value="6">Late Elementary 9-to-11</option>
							<option value="7">Middle School 11-to-14</option>
							<option value="8">HS 14-to-18</option>
							<option value="9">Post HS 18-to-21</option>
							<option value="10">Young adult 21-to-30</option>
						</select><br/><br/>
<div>
<?php
$query = "SELECT quest FROM questions WHERE id = 2";
$result = mysqli_query($link, $query) or exit('Error getting question.');

$question = mysqli_result($result, 0);
echo $question;
?>
</div>
						<select id="previous" name="previous">
							<option value="0" selected="selected">Make a selection...</option>
							<option value="1">Yes</option>
							<option value="2">No</option>
						</select><br/><br/>
<div>
<?php
$query = "SELECT quest FROM questions WHERE id = 3";
$result = mysqli_query($link, $query) or exit('Error getting question.');

$question = mysqli_result($result, 0);
echo $question;
?>
</div>
						<select id="sped" name="sped">
							<option value="0" selected="selected">Make a selection...</option>
							<option value="1">Never</option>
							<option value="2">My child has had some limited or occasional services (1-to-6 visits) during one or more school years.</option>
							<option value="3">My child has received help a few times per month during one or more school years.</option>
							<option value="4">My child has received help on a weekly basis during one or more school years.</option>
							<option value="5">My child has received help on most days of the week during one or more school years.</option>
						</select><br/><br/>
<div>
<?php
$query = "SELECT quest FROM questions WHERE id = 4";
$result = mysqli_query($link, $query) or exit('Error getting question.');

$question = mysqli_result($result, 0);
echo $question; 
?>
</div>
						<select id="counsel" name="counsel">
							<option value="0" selected="selected">Make a selection...</option>
							<option value="1">Never</option>
							<option value="2">My child has had some limited or occasional counseling services (1-to-6 visits) during the last 3 years.</option>
							<option value="3">My child has received counseling services a few times per month sometime during the last 3 years.</option>
							<option value="4">My child has been receiving help on a weekly basis some time during the last 3-years.</option>
							<option value="5">My child has been receiving counseling services on a monthly to weekly basis during the last year.</option>
						</select><br/><br/>
<div>
<?php
$query = "SELECT quest FROM questions WHERE id = 5";
$result = mysqli_query($link, $query) or exit('Error getting question.');

$question = mysqli_result($result, 0);
echo $question;
?>
</div>
						<select name="meetings" id="meetings">
							<option value="0" selected="selected">Make a selection...</option>
							<option value="1">I do not know or remember if I have ever participated in these types of meetings, nor do I know if my child has any specialized plans for his/her education.</option>
							<option value="2">I have not participated in any special meetings other than back to school nights, open houses or routine teacher conferences given to all of the children in my child's school and my child is not receiving any specialized supports other than what is given to all the children in the class.</option> 
							<option value="3">My child has been, or is being "monitored" to determine if he/she is having any specific difficulties in school.</option>
							<option value="4">My child is provided with "special accommodations" in taking tests, seating in class or other forms of assistance (called a "504 plan").</option>
							<option value="5">My child was given an Individual Education Program (IEP).</option>
						</select>
						</form>
						<br/><br/>
					</div>
				</div>
			</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
			<script src="assets/js/selectBoxIt.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>
			<script>
			$(function(){
				$("select").selectBoxIt({
					theme: "jQueryUI",
					defaultText: "Make a selection...",
					autoWidth: false
				});
			});
			</script>

<?php include ('includes/endpage.html'); ?>