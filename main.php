<?php
require 'validatecookie.php';
require_once 'connect.php';
require_once 'config.php';
require_once 'util/family_util.php';

$query = "SELECT director, is_family_program_participant FROM programs WHERE pid = '$pid'";
$result = mysqli_query($link, $query) or exit('Error looking up program director ID');
if (mysqli_num_rows($result) == 0) {
  $error = 'Invalid login or password.<br /><br />Please <a href="login.php">try again</a>.';
  exit("$error");
}

$row = mysqli_fetch_array($result);
$director = $row['director'];
$is_family_program = is_family_program_participant($link, $pid);
mysqli_free_result($result);

require 'startpage.php';
//check to make sure a donor has not accidently landed on this page
if($pid == NULL) {
?>
	<p>You are not authorized to view this page.</p>
<?php
	include ('includes/endpage.html');
	exit();
}
?>

<p>Welcome <?php print $director; ?>.</p>

<p style="font-size:200%;font-weight:bold">Children's Wishes</p>
<p>This section of the site is used for inputting wishes for the children and adolescents in your program.</p>

<p><b>Important Notes:</b></br>
<ul>
	<li>There is a <b>limit of four wishes</b> that can be entered per child.</li>
	<li>There should only be <b>one expensive wish</b> (more than $100) per child. The other three gifts should be a price that our donors can reasonably afford.</li>
</ul>
</p>
<p>Please review the <a href="help.php#director_wish_help"/>Instructions for Children's Wish Lists</a> for additional information.</p>
<p style="font-size:150%;font-weight:bold">Options</p>
<ul>
<li><a href="viewchildren.php">Manage Children</a></li>
<li><a href="addchildid.php">Add New Child</a></li>
</ul>

</br>
<?php
if ($is_family_program || $pid <= 1) {
?>
<p style="font-size:200%;font-weight:bold">Adopt a Family</p>
<p>In this module you will be inputting everyday essentials like clothing and shoes for each family member, as well as household items for the families in your care. You can also enter up to four wishes for the children in each family.  Any family members over age 18 can only request essentials.</p>
<p><b>Important Notes:</b></br>
<ul>
	<li>Total value if all items  should not exceed <b>$100 for each family member.</b></li>
	<li>You may add <b>$50 of household items per family</b> (e.g. toaster, fan, detergent)</li>
</ul>
</p>
<p>Please review the <a href="help.php#director_family_help">Instructions for Adopt a Family</a> for additional information.</p>
<p style="font-size:150%;font-weight:bold">Options</p>
<ul>
	<li><a href="viewfamilies.php">Manage Families</a></li>
	<li><a href="addfamilyid.php">Add a Family</a></li>
</ul>
<?php
}
?>

<p style="font-size:200%;font-weight:bold">Account Options</p>
<ul>
	<li><a href="changeuserinfo.php">Change my login and password</a></li>
</ul>
<?php
//Display only if the user is Administrator
if($pid <= 1) {
?>
<hr />
<p>Administration Options:</p>
<ul>
	<li><a href="viewprogramlist.php">Manage Programs</a></li>
	<li><a href="addprogram.php">Add a Program</a></li>
	<li><a href="viewwishcodes.php">View the Wish Code List</a></li>
	<li><a href="viewfulfilledlists.php">View Fulfilled Wishes</a></li>
	<li><a href="managecolors.php">Manage Colors</a></li>
	<li><a href="managethemes.php">Manage Themes</a></li>
	<li><a href="viewdonors.php">See Donor Information</a></li>
	<li><a href="managedonors.php">Manage Donors</a></li>
	<li><a href="changedirectorinfo.php">Change a Program Director's Login Information</a></li>
</ul>

<p>Wish Options</p>
<ul>
	<li><a href="viewtypes.php">View available wish categories</a></li>
	<li><a href="addtype.php">Add a new wish category</a></li>
	<li><a href="viewsubtypes.php">View available wish sub-categories</a></li>
	<li><a href="addsubtype.php">Add a new wish sub-category</a></li>
</ul>

<p>Necessity Options</p>
<ul>
	<li><a href="viewnecessitytypes.php">View available necessity types</a></li>
	<li><a href="addnecessitytype.php">Add a new necessity type</a></li>
	<li><a href="viewnecessities.php">View available necessity sub-types</a></li>
	<li><a href="addnecessitysubtype.php">Add a new necessity sub-type</a></li>
</ul>

<p>Site Options:</p>
<ul>
	<li><a href="changesiteprefs.php">Change Site Preferences</a></li>
	<li><a href="changebirthdaytext.php">Edit Birthday E-mail text</a></li>
	<li><a href="changeholidaytext.php">Edit Holiday E-mail text</a></li>
</ul>
<?php
}
?>

<?php include ('includes/endpage.html'); ?>