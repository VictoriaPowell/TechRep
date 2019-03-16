<?php
if(!isset($_SESSION['vu']) && !$_SESSION['vu']) 
{
	echo "
	<div id='login'>
		<form action='validatelogin.php' method='POST'>
			<table>
				<tr>
					<td>Username: </td>
					<td>
						<input type='text' name='user' />
					</td>
				</tr>
				<tr>
					<td>Password: </td>
					<td>
						<input type='password' name='password' />
					</td>
				</tr>
			</table>
			<input type='submit' value='Login' />
		</form>
	</div>
	";
}
else
{
	$user = null;
	if(isset($_SESSION['user'])){
		$user = $_SESSION['user'];
        $userType = $_SESSION['uType'];
	}
    $ref = $_SESSION['ref'];

    if(strpos($ref,'index') !== false){
        echo "
	<div id='login'>
		Welcome, $userType!<br/>";
        echo "<a href='logout.php'/>Logout of $user</a><br/>";
    }
    else{
        echo "
	<div id='login'>
		Welcome, $userType $user!";
    }
    echo "</div>";
}
?>