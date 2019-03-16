<?php 
	include 'connect.php';
	$_SESSION['ref'] = "index.php";
	include_once 'utils.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Internet Business
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>TechRep</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<link rel="icon" href="logo2.ico" type="image/x-icon">
<script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="layout/scripts/jquery.hslides.1.0.js"></script>
<script type="text/javascript">
$((function () {
    $('#accordion').hSlides({
        totalWidth: 920,
        totalHeight: 300,
        minPanelWidth: 111,
        maxPanelWidth: 476,
		easing: "easeOutBack",
		activeClass: 'current'
    });
}));
</script>
</head>
<body id="top">
<div id="header">
  <div class="wrapper">
    <div class="fl_left">
      <h1>
	  <a href="<?php if($_SESSION['uType']) ?>index.php"><img src="images/logo.jpg" title="Tech Rep" alt="Tech Rep" width="260" height="80" border="0" /></a>
	  </h1>
    </div>
    <div class="fl_right">
	<?php 
		include 'login.php'; 
		if(isset($_SESSION['error']))
		{
			$error = $_SESSION['error'];
			unset($_SESSION['error']);
			echo "
			<div class='site_error'>
			$error
			</div>
			";
			
		}
		if(isset($_SESSION['alert']))
		{
			$alert = $_SESSION['alert'];
			unset($_SESSION['alert']);
			echo "
			<div class='site_alert'>
			$alert
			</div>
			";
		}
		if(isset($_SESSION['msg']))
		{
			$msg = $_SESSION['msg'];
			unset($_SESSION['msg']);
			echo "
			<div class='site_msg'>
			$msg
			</div>
			";
		}
		?>
	</div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div id="topbar">
  <div class="wrapper">
    <div id="topnav">
      <ul>
        <li class="active"><a href="index.php">Home</a></li>
        <li><a href="pages/profile.php">Profile</a></li>
        <li><a href="pages/repair.php">Repair</a></li>
        <li><a href="pages/product_main.php">Products</a>
          <ul>
            <li><a href="pages/product_comps.php">Computers</a></li>
            <li><a href="pages/product_hardware.php">Hardware</a></li>
            <li><a href="pages/product_software.php">Software</a></li>
          </ul>
        </li>
        <li class="last"><a href="pages/locations.php">Locations</a></li>
      </ul>
    </div>
    <div id="search">
      <form action="#" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" value="Search Our Website&hellip;"  onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
          <input type="submit" name="go" id="go" value="Search" />
        </fieldset>
      </form>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div id="featured_slide">
  <div class="wrapper">
    <div class="featured_content">
      <ul id="accordion">
        <li class="current">
          <div class="featured_box">
            <h2>Profile</h2>
            <p>View your computer recommendation, purchase history and history of repair. Add a review on your previous repairs and rate your technician.</p>
            <p class="readmore"><a href="pages/profile.php">Go Now &raquo;</a></p>
          </div>
          <div class="featured_tab"> <img src="images/user_logo.png" alt="" />
            <p>Profile</p>
          </div>
        </li>
        <li>
          <div class="featured_box">
            <h2>Purchase Computer Software and Hardware</h2>
            <p>Shop all computer parts and software.From operating systems to hard drives. Purchase all your needs for a great price and have a technician set up your new purchase. </p>
            <p class="readmore"><a href="pages/product_main.php">Go Now &raquo;</a></p>
          </div>
          <div class="featured_tab"><img src="images/cart_logo.png" alt="" />
            <p>Shop</p>
          </div>
        </li>
        <li>
          <div class="featured_box">
            <h2>Maintenance and Repair</h2>
            <p>Apply for a Technician to update your computer for your needs or to fix any issues you have. Choose from our team of technicians in your area and view their ratings and reviews. Prices are based on ratings and ranking from Senior Technician to Junior Technician.</p>
            <p class="readmore"><a href="pages/repair.php">Go Now &raquo;</a></p>
          </div>
          <div class="featured_tab"><img src="images/repair_logo.png" alt="" />
            <p>Repair</p>
          </div>
        </li>
        <li>
          <div class="featured_box">
            <h2>Join our Team!</h2>
            <p>Are you looking for an exciting hands on job that allows you to work at your own pace. Apply Now! We are looking for all types of positions, from technicians to managers. </p>
            <p class="readmore"><a href="#">Apply Here &raquo;</a></p>
          </div>
          <div class="featured_tab"><img src="images/apply.png" alt="" />
            <p>Career</p>
          </div>
        </li>
        <li>
          <div class="featured_box">
            <h2>Contact Information and Locations</h2>
            <p>Search for store locations close to you and their contact information.</p>
            <p class="readmore"><a href="#">Go Now &raquo;</a></p>
          </div>
          <div class="featured_tab"><img src="images/locate.jpg" alt="" />
            <p>Locations</p>
          </div>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div id="homecontent">
  <div class="wrapper">
      <h1>Top Technicians</h1>
    <ul>
      <li>
        <h2 class="title"><img src="images/demo/face1.jpg" alt="" />Nickie Jackson, Senior Technician</h2>
        <p>With 15 years experience in technical repairs and degree in Computer Hardware from MIT, Nickie is our top Senior Technician. She works hands on with customers to solve any technical issues. If she cannot solve the issue, there is no one else who can or your money back.</p>
      </li>
      <li>
        <h2 class="title"><img src="images/demo/face2.jpg" alt="" />Jack Birks, Junior Technician</h2>
        <p>Jack is a hardware genius. He has fixed more computers over the past year than most technicians do in 5. He has a perfect rating and constant high comments. </p>
      </li>
      <li class="last">
        <h2 class="title"><img src="images/demo/face3.jpg" alt="" />Michael Nework, Technician</h2>
        <p>From working at top computer companies repairing all types of issues, Michael can fix almost anything. He has worked with computers from disasters including fire, car accidents, water damage and major viruses.</p>
      </li>
    </ul>
      <br class="clear" />
      <br class="clear" />
      <br class="clear" />
      <br class="clear" />
      <br class="clear" />
<!--      <div>
          <h2>Due Date</h2>
          <iframe src="https://freesecure.timeanddate.com/countdown/i4l6q1xy/n165/cf101/cm0/cu3/ct2/cs1/ca0/co0/cr0/ss0/cacfff/cpc000/pc900/tcf00/fn3/fs300/szw426/szh180/iso2015-04-05T17:00:00/bas8/bat5/bacfff/pa20" allowTransparency="true" frameborder="0" width="482" height="236"></iframe>
      </div>-->
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<!--<div id="container">
  <div class="wrapper">
    <div id="content">
      <h2>Due Date</h2>
      <iframe src="https://freesecure.timeanddate.com/countdown/i4l6q1xy/n165/cf101/cm0/cu3/ct2/cs1/ca0/co0/cr0/ss0/cacfff/cpc000/pc900/tcf00/fn3/fs300/szw426/szh180/iso2015-04-05T17:00:00/bas8/bat5/bacfff/pa20" allowTransparency="true" frameborder="0" width="482" height="236"></iframe>
    </div>
    <div id="column">
      <div class="holder">
        <h2>Nullamlacus loborttis</h2>
        <ul id="latestnews">
          <li> <img class="imgl" src="images/demo/100x75.gif" alt="" />
            <p><strong><a href="#">Indonectetus facilis leo.</a></strong></p>
            <p>Nullamlacus dui ipsum cons eque loborttis non euis que morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque.</p>
          </li>
          <li class="last"> <img class="imgl" src="images/demo/100x75.gif" alt="" />
            <p><strong><a href="#">Indonectetus facilis leo.</a></strong></p>
            <p>Nullamlacus dui ipsum cons eque loborttis non euis que morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque.</p>
          </li>
        </ul>
      </div>
    </div>
    <br class="clear" />
  </div>
</div>-->
<!-- ####################################################################################################### -->
<!--<div id="footer">
  <div class="wrapper">
    <div id="newsletter">
      <h2>Stay In The Know !</h2>
      <p>Please enter your email to join our mailing list</p>
      <form action="#" method="post">
        <fieldset>
          <legend>News Letter</legend>
          <input type="text" value="Enter Email Here&hellip;"  onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" />
          <input type="submit" name="news_go" id="news_go" value="GO" />
        </fieldset>
      </form>
      <p>To unsubscribe please <a href="#">click here &raquo;</a></p>
    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Lacus interdum</h2>
      <ul>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Praesent et eros</a></li>
        <li><a href="#">Lorem ipsum dolor</a></li>
        <li><a href="#">Suspendisse in neque</a></li>
        <li class="last"><a href="#">Praesent et eros</a></li>
      </ul>
    </div>
    <br class="clear" />
  </div>
</div>-->
<!-- ####################################################################################################### -->
<div id="copyright">
  <div class="wrapper">
    <p class="fl_left">Copyright &copy; 2015 - All Rights Reserved - <a href="#">TechRep</a></p>
    <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
    <br class="clear" />
  </div>
</div>
</body>
</html>