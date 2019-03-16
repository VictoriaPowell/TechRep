<?php
session_start();
include 'connect.php';
include 'utils.php';

/* Check that user and password fields were filled out */
if(isset($_REQUEST['user']) && isset($_REQUEST['password']))
{
	$user = $_REQUEST['user'];
    $password = $_REQUEST['password'];
	/* Verify that the user existed or return to the login page */
	$users = findUser($user);
	if(!$users || $users == null)
	{
		echo($users);
		$_SESSION['error'] = "Could not be logged in! Invalid User named : ".$users;
		header("Location: ".$_SESSION['ref']);
	}
	else
	{
		$_SESSION['user'] = $user;
	}
	
	if(!verifyPassword($_SESSION['user'], $password))
	{
		$_SESSION['error'] = "Could not be logged in! Invalid Password".$password;
		header("Location: ".$_SESSION['ref']);
	}
	else
	{
		$_SESSION['vu'] = TRUE;
        $_SESSION['uType'] = findUserType($user);
        $_SESSION['UID'] = getUID($user);
        if($_SESSION['uType'] == "technician" || $_SESSION['uType'] == "smanager" || $_SESSION['uType'] = "cmanager"){
            $_SESSION['EID'] = getEID( $_SESSION['UID']);
            $_SESSION['SID'] = getSID($_SESSION['EID']);
        }
        $uType = $_SESSION['uType'];
        $uRef = str_replace(".php", "_$uType.php",$_SESSION['ref']);
        $_SESSION['ref_uType'] = $uRef;
		$_SESSION['msg'] = "Login Success!";
		header("Location: ".$_SESSION["ref_uType"]);
	}
}

?>