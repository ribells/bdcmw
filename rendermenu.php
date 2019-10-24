<?php
require_once 'util/family_util.php';

// this will render the menu bar
if(isset($pid) && $pid > 0)
{	
	
?>
	<header class="navigation" id="top">
            <div class="container">
				<div class="secondary-nav">
					<span>Welcome <?php if(isset($loginname)) {echo $loginname;}?></span>
					<span><a href="mailto:giftdrive@thehome.org"><i class="icon_mail"></i>giftdrive@thehome.org</a></span>
					<span><a href="changeuserinfo.php" style = "color:#2b8938;">Edit Account</a></span>
					<span><a href="help.php" style = "color:#2b8938;">Help</a></span>
					<span><a href="logout.php" style = "color:#2b8938;">Log Out</a></span>
				</div>
				<!--/.secondary-nav-->
				<div class="main-nav">
					<div class="brand"><a href="index.php"><img src="images/masthead.png" alt="" style="width:420px;margin-top:-25px;"></a></div><!--/.brand-->
					<nav>
						<a href="index.php"><img src="images/logo.png" alt="" style="width:550px;float:right;margin-bottom: 20px;"></a>
						<ul>
							<li><a href="main.php">HOME</a>
								<ul></ul>
							</li>
							<li><a href="viewchildren.php">CHILDREN'S WISHES</a>
								<ul>
										<li><a href="viewchildren.php">Manage children in my program</a></li>
										<li><a href="addchildid.php">Add a New Child</a></li>
										<li><a href="viewtypes.php">View available wish categories</a></li>
									<?php
										if($pid <= 1) {
									?>
										<li><a href="addtype.php">Add a new wish category</a></li>
									<?php
										}
									?>
										<li><a href="viewsubtypes.php">View available wish sub-categories</a></li>
									<?php
										if($pid <= 1) {
									?>
										<li><a href="addsubtype.php">Add a new wish sub-category</a></li>
									<?php
										}
									?>
										<li><a href="uploadchildren.php">Upload children</a></li>
										<li><a href="uploadwishes.php">Upload wishes</a></li>
								</ul>
							</li>
			<?php
				$adoptafamily = is_family_program_participant($link, $pid);
				if($adoptafamily == 1 || $pid <= 1) {
			?>
							<li><a href="viewfamilies.php">ADOPT A FAMILY</a>
								<ul>
									<li><a href="viewfamilies.php">Manage Families in My Program</a></li>
									<li><a href="addfamilyid.php">Add New Family</a></li>
									<li><a href="viewnecessitytypes.php">View available necessity categories</a></li>									
								<?php
									if($pid <= 1) {
								?>
									<li><a href="addnecessitytype.php">Add a new necessity category</a></li>
								<?php
									}
								?>
									<li><a href="viewnecessities.php">View available necessity sub-categories</a></li>
								<?php
									if($pid <= 1) {
								?>
									<li><a href="addnecessitysubtype.php">Add a new necessity sub-category</a></li>
								<?php
									}
								?>
									<li><a href="uploadfamilies.php">Upload families</a></li>
							</ul>
						</li>
			<?php
				}
			?>
							<li><a href="#">REPORTS</a>
								<ul>
									<li><a href="viewfulfilledwishes.php">Wishes - Pledged</a></li>
									<li><a href="viewunfulfilledwishes.php">Wishes - Unpledged</a></li>
									<li><a href="viewallwishlists.php">Children - All</a></li>
									<li><a href="viewfulfilledlists.php">Children - Fully Pledged</a></li>
									<li><a href="viewpartialfulfilledlists.php">Children - Partially Pledged</a></li>
									<li><a href="viewunfulfilledlists.php">Children - Unpledged</a></li>
			<?php
				if($adoptafamily == 1 || $pid <= 1) {
			?>
									<li><a href="viewfulfilledfamilies.php">Families - Pledged</a></li>
									<li><a href="viewunfulfilledfamilies.php">Families - Unpledged</a></li>
									<li><a href="viewinactivefamilies.php">Families - Inactive</a></li>
									<li><a href="viewfulfilledneeds.php">Needs - Pledged</a></li>
									<li><a href="viewunfulfilledneeds.php">Needs - Unpledged</a></li>
			<?php
				}
				if($pid <= 1) {
					
			?>
									<li><a href="viewdonors.php">View Donors - All</a></li>
									<li><a href="viewdonorsbychild.php">View Donors - By Child</a></li>
									<li><a href="viewdonorsbyfamily.php">View Donors - By Family</a></li>
			<?php
				}
			?>
								</ul>
							</li>						
							<li><a href="#">ADMINISTRATIVE OPTIONS</a>
								<ul>
										<li><a href="changeuserinfo.php">Change Login Information</a></li>

								<?php
									if($pid > 1) {
								?>
										<li><a href="changeprograminfo.php">Manage Program</a></li>
								<?php
									}
									if($pid <= 1) {
								?>
										<li><a href="viewprogramlist.php">Manage Programs</a></li>
										<li><a href="addprogram.php">Add a New Program</a></li>
										<li><a href="viewwishcodes.php">View the Wish Code List</a></li>
										<li><a href="managecolors.php">Manage Colors</a></li>
										<li><a href="managethemes.php">Manage Themes</a></li>
										<li><a href="managesizes.php">Manage Sizes</a></li>
										<li><a href="manageshoesizes.php">Manage Shoe Sizes</a></li>
										<li><a href="managesheetsizes.php">Manage Sheet Sizes</a></li>
										<li><a href="managedonors.php">Manage Donors</a></li>
										<li><a href="changesiteprefs.php">Change Site Preferences</a></li>
										<li><a href="changebirthdaytext.php">Edit Birthday E-mail Text</a></li>
										<li><a href="changeholidaytext.php">Edit Holiday E-mail Text</a></li>
										<li><a href="deleteall.php">Reset System</a></li>
								<?php
									}
								?>
							</ul>
						</li>
					</ul>
					</div>
					</nav>
				</div>
			</div>
		</header>
		
	<!-- end of navigation -->
<?php
}
else
{
	if(isset($did) && $did > 0)
	{	
// normal menu (donor)
?>		
	<header class="navigation" id="top">
		<div class="container">
			<div class="secondary-nav">
				<span><?php if(isset($loginname)){ echo "Welcome " .$loginname; }; ?></span>
                <span><a href="mailto:giftdrive@thehome.org"><i class="icon_mail"></i>giftdrive@thehome.org</a></span>
                <span><a href="changedonorinfo.php" style = "color:#2b8938;">Edit Account</a></span>
                <span><a href="help.php" style = "color:#2b8938;">Help</a></span>
				<span><a href="logout.php" style = "color:#2b8938;">Log Out</a></span>
            </div>
            <div class="main-nav">
                <div class="brand"><a href="index.php"><img src="images/masthead.png" alt="" style="width:420px;margin-top:-25px;"></a></div><!--/.brand-->
                <nav>
					<a href="index.php"><img src="images/logo.png" alt="" style="width:550px;float:right;margin-bottom: 20px;"></a>
                    <ul class="dropdown">
						<li><a href="index.php">HOME</a>
						<li><a href="showchildren.php">CHILDREN'S WISHES</a>
						<li><a href="showfamilies.php">ADOPT A FAMILY</a>
						<li><a href="images/BigWishes2018_Top20.pdf" target="_blank">GENERAL DONATIONS</a>
						<li><a href="showcart.php">MY WISH CART</a>
					</ul>
					</div>
				</nav>
			</div>
		</div>
	</header>
	
<?php
	} else {
?>
	<header class="navigation" id="top">
		<div class="container">
			<div class="secondary-nav">				
                <span><a href="mailto:giftdrive@thehome.org"><i class="icon_mail"></i>giftdrive@thehome.org</a></span>
				<span><a href="login.php" style = "color:#2b8938;">Log In</a></span>
				<span><a href="createdonoraccount.php" style = "color:#2b8938;">Create Account</a></span>
				<span><a href="help.php" style = "color:#2b8938;">Help</a></span>
            </div>
            <div class="main-nav">
                <div class="brand"><a href="index.php"><img src="images/masthead.png" alt="" style="width:420px;margin-top:-25px;"></a></div><!--/.brand-->
                <nav>
					<a href="index.php"><img src="images/logo.png" alt="" style="width:550px;float:right;margin-bottom: 20px;"></a>
                    <ul class="dropdown">
						<li><a href="index.php">HOME</a>
						<li><a href="showchildren.php">CHILDREN'S WISHES</a>
						<li><a href="showfamilies.php">ADOPT A FAMILY</a>
						<li><a href="images/BigWishes2018_Top20.pdf" target="_blank">GENERAL DONATIONS</a>
						<li><a href="showcart.php">MY WISH CART</a>
					</ul>
					</div>
				</nav>
			</div>
		</div>
	</header>
<?php	
}}
?>