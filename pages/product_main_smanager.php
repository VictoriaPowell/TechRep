<?php
include_once '../utils.php';
include '../connect.php';
$_SESSION['ref'] = "product_main_smanager.php"?>
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
    <title>TechRep | Product-Hardware</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <script type="text/javascript" src="jsUtils.js"></script>
    <script src="../sortable-0.6.0/js/sortable.min.js"></script>
    <link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
    <link rel="icon" href="../logo2.ico" type="image/x-icon">
</head>
<body id="top">
<div id="header">
    <div class="wrapper">
        <div class="fl_left">
            <h1><a href="../index_smanager.php"><img src="../images/logo.jpg" title="Tech Rep" alt="Tech Rep" width="260" height="80" border="0" /></a>
            </h1>
        </div>
        <div class="fl_right">
            <?php
            include '../login.php';
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
                <li><a href="../index_smanager.php">Home</a></li>
                <li><a href="profile_smanager.php">Profile</a></li>
                <li><a href="services_smanager.php">Services</a></li>
                <li><a href="technicians_smanager.php">Technicians</a></li>
                <li><a href="revenue_smanager.php">Revenue</a></li>
                <li class="active"><a href="product_main_smanager.php">Products</a>
                    <ul>
                        <li><a href="product_hardware_smanager.php">Hardware</a></li>
                        <li><a href="product_software_smanager.php">Software</a></li>
                    </ul>
                </li>
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
<div id="breadcrumb">
    <div class="wrapper">
        <ul>
            <li class="first">You Are Here</li>
            <li>&#187;</li>
            <li><a href="../index_smanager.php">Home</a></li>
            <li>&#187;</li>
            <li class="current"><a href="#">Product</a></li>
        </ul>
    </div>
</div>
<!-- ####################################################################################################### -->
<div id="container">
    <div class="wrapper">
        <div id="search">
            <table style="width:400px; margin-left:auto; margin-right:auto;">
                <thead>
                <tr>
                    <th colspan="2">Inventory Search</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Name:</td>
                    <td><input id="name" type="text"></td>
                </tr>
                <tr>
                    <td> Code:</td>
                    <td><input id="code" type="text"></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;">
                        <button type="button" id="SubmitButton" onclick="searchInventory()">Search</button>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <br class="clear" />
        <div id="table"> </div>
    </div>
</div>
<div id="copyright">
    <div class="wrapper">
        <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">TechRep</a></p>
        <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
        <br class="clear" />
    </div>
</div>
</body>
</html>