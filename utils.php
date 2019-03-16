<?php
include 'connect.php';
function findUser($user)
{
	$query = "
		SELECT username
			FROM mgc353_4.User
			WHERE username = '$user'";
	$result = mysqli_query($_SESSION['conn'], $query);
    $row = mysqli_fetch_assoc($result);
	if(!$row)
	{
		echo "Error in retrieving row.\n".mysqli_fetch_assoc($result)." username result";
		die( print_r( mysqli_error($_SESSION['conn']), true));
	} 
	return $row['username'];
}
/* Verify user entered password against the db */
function verifyPassword($user, $password)
{
	$is_valid = FALSE;
	$query = "
		SELECT uPassword
			FROM mgc353_4.User
			WHERE username = '$user'";
	$result = mysqli_query($_SESSION['conn'], $query);
    $row = mysqli_fetch_assoc($result);
	if(!$row)
	{
		echo "Error in retrieving row.\n".$row."password result for".$user;
		die( print_r( mysqli_error($_SESSION['conn']), true));
	}
	$dbpw = $row['uPassword'];
	if($dbpw == $password)
		$is_valid = TRUE;
	return $is_valid;
}
function findUserType($user){
    $query = "
		SELECT uType
			FROM mgc353_4.User
			WHERE username = '$user'";
    $result = mysqli_query($_SESSION['conn'], $query);
    $row = mysqli_fetch_assoc($result);
    if(!$row)
    {
        echo "Error in retrieving row.\n".mysqli_fetch_assoc($result)." username result";
        die( print_r( mysqli_error($_SESSION['conn']), true));
    }
    return $row['uType'];
}

function getUID($user){
    $query = "
		SELECT userID
			FROM mgc353_4.User
			WHERE username = '$user'";
    $result = mysqli_query($_SESSION['conn'], $query);
    $row = mysqli_fetch_assoc($result);
    if(!$row)
    {
        echo "Error in retrieving row.\n".mysqli_fetch_assoc($result)." username result";
        die( print_r( mysqli_error($_SESSION['conn']), true));
    }
    return $row['userID'];
}
function getEID($uid){
    $query = "
		SELECT employeeID
			FROM mgc353_4.Employee
			WHERE userID = '$uid'";
    $result = mysqli_query($_SESSION['conn'], $query);
    $row = mysqli_fetch_assoc($result);
    if(!$row)
    {
        echo "Error in retrieving row.\n".mysqli_fetch_assoc($result)." username result";
        die( print_r( mysqli_error($_SESSION['conn']), true));
    }
    return $row['employeeID'];
}
function getSID($eid){
    $query = "
		SELECT storeID
			FROM mgc353_4.Employee
			WHERE employeeID = '$eid'";
    $result = mysqli_query($_SESSION['conn'], $query);
    $row = mysqli_fetch_assoc($result);
    if(!$row)
    {
        echo "Error in retrieving row.\n".mysqli_fetch_assoc($result)." username result";
        die( print_r( mysqli_error($_SESSION['conn']), true));
    }
    return $row['storeID'];
}
?>