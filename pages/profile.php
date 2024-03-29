<?php
include_once '../utils.php';
$_SESSION['ref'] = "profile.php"?>
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
    <title>TechRep | Profile</title>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <link rel="stylesheet" href="../layout/styles/layout.css" type="text/css" />
    <script type="text/javascript" src="../jsUtils.js"></script>
    <link rel="icon" href="../logo2.ico" type="image/x-icon">
</head>
<body id="top">
<div id="header">
    <div class="wrapper">
        <div class="fl_left">
            <h1><a href="../index.php"><img src="../images/logo.jpg" title="Tech Rep" alt="Tech Rep" width="260" height="80" border="0" /></a>
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
                <li><a href="../index.php">Home</a></li>
                <li class="active"><a href="profile.php">Profile</a></li>
                <li><a href="repair.php">Repair</a></li>
                <li><a href="product_main.php">Products</a>
                    <ul>
                        <li><a href="product_comps.php">Computers</a></li>
                        <li><a href="product_hardware.php">Hardware</a></li>
                        <li><a href="product_software.php">Software</a></li>
                    </ul>
                </li>
                <li class="last"><a href="locations.php">Locations</a></li>
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
            <li><a href="../index.php">Home</a></li>
            <li>&#187;</li>
            <li class="current"><a href="#">Profile</a></li>
        </ul>
    </div>
</div>
<!-- ####################################################################################################### -->
<div id="container">
    <div class="wrapper">
<!--        <div id="content">
            <h1>&lt;h1&gt; to &lt;h6&gt; - Headline Colour and Size Are All The Same</h1>
            <img class="imgr" src="../images/demo/imgr.gif" alt="" width="125" height="125" />
            <p>Aliquatjusto quisque nam consequat doloreet vest orna partur scetur portortis nam. Metadipiscing eget facilis elit sagittis felisi eger id justo maurisus convallicitur.</p>
            <p>Dapiensociis <a href="#">temper donec auctortortis cumsan</a> et curabitur condis lorem loborttis leo. Ipsumcommodo libero nunc at in velis tincidunt pellentum tincidunt vel lorem.</p>
            <img class="imgl" src="../images/demo/imgl.gif" alt="" width="125" height="125" />
            <p>This is a W3C compliant free website template from <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a>. This template is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>.</p>
            <p>You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files. For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>.</p>
            <p>Portortornec condimenterdum eget consectetuer condis consequam pretium pellus sed mauris enim. Puruselit mauris nulla hendimentesque elit semper nam a sapien urna sempus.</p>
            <h2>Table(s)</h2>
            <table summary="Summary Here" cellpadding="0" cellspacing="0">
                <thead>
                <tr>
                    <th>Header 1</th>
                    <th>Header 2</th>
                    <th>Header 3</th>
                    <th>Header 4</th>
                </tr>
                </thead>
                <tbody>
                <tr class="light">
                    <td>Value 1</td>
                    <td>Value 2</td>
                    <td>Value 3</td>
                    <td>Value 4</td>
                </tr>
                <tr class="dark">
                    <td>Value 5</td>
                    <td>Value 6</td>
                    <td>Value 7</td>
                    <td>Value 8</td>
                </tr>
                <tr class="light">
                    <td>Value 9</td>
                    <td>Value 10</td>
                    <td>Value 11</td>
                    <td>Value 12</td>
                </tr>
                <tr class="dark">
                    <td>Value 13</td>
                    <td>Value 14</td>
                    <td>Value 15</td>
                    <td>Value 16</td>
                </tr>
                </tbody>
            </table>
            <div id="comments">
                <h2>Comments</h2>
                <ul class="commentlist">
                    <li class="comment_odd">
                        <div class="author"><img class="avatar" src="../images/demo/avatar.gif" width="32" height="32" alt="" /><span class="name"><a href="#">A Name</a></span> <span class="wrote">wrote:</span></div>
                        <div class="submitdate"><a href="#">August 4, 2009 at 8:35 am</a></div>
                        <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
                    </li>
                    <li class="comment_even">
                        <div class="author"><img class="avatar" src="../images/demo/avatar.gif" width="32" height="32" alt="" /><span class="name"><a href="#">A Name</a></span> <span class="wrote">wrote:</span></div>
                        <div class="submitdate"><a href="#">August 4, 2009 at 8:35 am</a></div>
                        <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
                    </li>
                    <li class="comment_odd">
                        <div class="author"><img class="avatar" src="../images/demo/avatar.gif" width="32" height="32" alt="" /><span class="name"><a href="#">A Name</a></span> <span class="wrote">wrote:</span></div>
                        <div class="submitdate"><a href="#">August 4, 2009 at 8:35 am</a></div>
                        <p>This is an example of a comment made on a post. You can either edit the comment, delete the comment or reply to the comment. Use this as a place to respond to the post or to share what you are thinking.</p>
                    </li>
                </ul>
            </div>
            <h2>Write A Comment</h2>
            <div id="respond">
                <form action="#" method="post">
                    <p>
                        <input type="text" name="name" id="name" value="" size="22" />
                        <label for="name"><small>Name (required)</small></label>
                    </p>
                    <p>
                        <input type="text" name="email" id="email" value="" size="22" />
                        <label for="email"><small>Mail (required)</small></label>
                    </p>
                    <p>
                        <textarea name="comment" id="comment" cols="100%" rows="10"></textarea>
                        <label for="comment" style="display:none;"><small>Comment (required)</small></label>
                    </p>
                    <p>
                        <input name="submit" type="submit" id="submit" value="Submit Form" />
                        &nbsp;
                        <input name="reset" type="reset" id="reset" tabindex="5" value="Reset Form" />
                    </p>
                </form>
            </div>
        </div>
        <div id="column">
            <div class="subnav">
                <h2>Secondary Navigation</h2>
                <ul>
                    <li><a href="#">Navigation - Level 1</a></li>
                    <li><a href="#">Navigation - Level 1</a>
                        <ul>
                            <li><a href="#">Navigation - Level 2</a></li>
                            <li><a href="#">Navigation - Level 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Navigation - Level 1</a>
                        <ul>
                            <li><a href="#">Navigation - Level 2</a></li>
                            <li><a href="#">Navigation - Level 2</a>
                                <ul>
                                    <li><a href="#">Navigation - Level 3</a></li>
                                    <li><a href="#">Navigation - Level 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#">Navigation - Level 1</a></li>
                </ul>
            </div>
            <div class="holder">
                <h2 class="title"><img src="../images/demo/60x60.gif" alt="" />Nullamlacus dui ipsum conseque loborttis</h2>
                <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque.</p>
                <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
            </div>
            <div id="featured">
                <ul>
                    <li>
                        <h2>Indonectetus facilis leonib</h2>
                        <p class="imgholder"><img src="../images/demo/240x90.gif" alt="" /></p>
                        <p>Nullamlacus dui ipsum conseque loborttis non euisque morbi penas dapibulum orna. Urnaultrices quis curabitur phasellentesque congue magnis vestibulum quismodo nulla et feugiat. Adipisciniapellentum leo ut consequam ris felit elit id nibh sociis malesuada.</p>
                        <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
                    </li>
                </ul>
            </div>
            <div class="holder">
                <h2>Lorem ipsum dolor</h2>
                <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed.</p>
                <ul>
                    <li><a href="#">Lorem ipsum dolor sit</a></li>
                    <li>Etiam vel sapien et</li>
                    <li><a href="#">Etiam vel sapien et</a></li>
                </ul>
                <p>Nuncsed sed conseque a at quismodo tris mauristibus sed habiturpiscinia sed. Condimentumsantincidunt dui mattis magna intesque purus orci augue lor nibh.</p>
                <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
            </div>
        </div>-->
       <?php include "tables/profile_table_smanager.php"; ?>
    </div>
</div>
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
        <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">TechRep</a></p>
        <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
        <br class="clear" />
    </div>
</div>
</body>
</html>