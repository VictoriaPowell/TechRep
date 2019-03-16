<?php
include '../../connect.php';
include '../utils_pages.php';
/* Needed variables */
$store = $_SESSION['SID'];
$employee = $_SESSION['EID'];

$phone = $_REQUEST['phone'];
$address = $_REQUEST['address'];
$nickname = $_REQUEST['nickname'];
$email = $_REQUEST['email'];
$description = $_REQUEST['description'];

$data_query = "UPDATE mgc353_4.Employee
        SET phoneNumber = '$phone'
          , address = '$address'
          , nickname = '$nickname'
          , email = '$email'
          , description = '$description'
        WHERE employeeID = '$employee'";

$result = mysqli_query($_SESSION['conn'], $data_query);
if(! $result )
{
    die('Could not update data: ' . mysqli_error($conn));
}
echo "<h3 style='text-align:center; margin-left: -14.5%;'>*Updated data successfully*</h3>";

$data_query = null;

$table_data = array();
$table_heads = array(
    'EID',
    'SID',
    'Seniority',
    'Rating',
    'Percent',
    'Hourly Rate',
    'Start Date',
    'Name',
    'Birthday',
    'Current Earning',
    'Current Minutes',
    'Phone Number',
    'Address',
    'Preferred Name',
    'Email',
    'Description (MAX 255 chars)');

/* Queries */
$data_query = "
SELECT
e.employeeID
,e.storeID
,s.seniority
,s.rating
,s.percent
,s.hrRate
,DATE_FORMAT(e.startDate,'%b %d, %Y')
,e.name
,DATE_FORMAT(e.birthday,'%b %d, %Y')
,e.currEarning
,e.currMinutes
,e.phoneNumber
,e.address
,e.nickname
,e.email
,e.description
	FROM mgc353_4.Employee e, mgc353_4.Seniority s
	WHERE e.seniorityID = s.seniorityID
		AND storeID = '$store'
        AND employeeID = '$employee'";
$result = mysqli_query($_SESSION['conn'], $data_query);
$employeeInfo = mysqli_fetch_array($result);
//echo "<div style='padding-left: 150px;' id='profileInfo'>";
for($i = 0; $i < count($table_heads); $i++) {
    if($employeeInfo[2] == "cmanager" || $employeeInfo[2] == "smanager" || $employeeInfo[2] == "intern" ){
        if($i == "2"){ // rating
            if($employeeInfo[2] == "cmanager"){
                $seniority = "Company Manager";
                echo "<p><b>$table_heads[$i] :</b> $seniority</p>";
            }
            if($employeeInfo[2] == "smanager"){
                $seniority = "Store Manager";
                echo "<p><b>$table_heads[$i] :</b> $seniority</p>";
            }
            if($employeeInfo[2] == "intern"){
                $seniority = "Intern";
                echo "<p><b>$table_heads[$i] :</b> $seniority</p>";
            }
        }
        else if($i == "3"){ // rating
        }
        else if($i == "4"){ // percent
        }
        else if($i == "5"){ // hr Rate
            $employeeInfo[$i] = "$".$employeeInfo[$i];
            echo "<p><b>$table_heads[$i] :</b> $employeeInfo[$i]</p>";
        }
        else if($i == "9"){ // curr Earning
            $employeeInfo[$i] = "$".$employeeInfo[$i];
            echo "<p><b>$table_heads[$i] :</b> $employeeInfo[$i]</p>";
        }
        else{
            echo "<p><b>$table_heads[$i] :</b> $employeeInfo[$i]</p>";
        }
    }
    else{
        if($i == "2") { // seniority
            $seniority = $employeeInfo[$i]." technician";
            echo "<p><b>$table_heads[$i] :</b> $seniority</p>";
        }
        else if($i == "3"){ // rating
            if($employeeInfo[3] == "0"){
                echo "<p><b>$table_heads[$i] :</b> $employeeInfo[$i]</p>";
            }
            else if($employeeInfo[3] == "1"){
                echo "<p><b>$table_heads[$i] :</b> $employeeInfo[$i]</p>";
            }
            else if($employeeInfo[3] == "2"){
                echo "<p><b>$table_heads[$i] :</b> $employeeInfo[$i]</p>";
            }
            else if($employeeInfo[3] == "3"){
                echo "<p><b>$table_heads[$i] :</b> $employeeInfo[$i]</p>";
            }
            else if($employeeInfo[3] == "4"){
                echo "<p><b>$table_heads[$i] :</b> $employeeInfo[$i]</p>";
            }
            else if($employeeInfo[3] == "5"){
                echo "<p><b>$table_heads[$i] :</b> $employeeInfo[$i]</p>";
            }
        }
        else if($i == "4"){ // percent
            $employeeInfo[$i] .= "%";
            echo "<p><b>$table_heads[$i] :</b> $employeeInfo[$i]</p>";
        }
        else if($i == "5"){ // hr Rate
            $employeeInfo[$i] = "$".$employeeInfo[$i];
            echo "<p><b>$table_heads[$i] :</b> $employeeInfo[$i]</p>";
        }
        else if($i == "9"){ // curr Earning
            $employeeInfo[$i] = "$".$employeeInfo[$i];
            echo "<p><b>$table_heads[$i] :</b> $employeeInfo[$i]</p>";
        }
        else{
            echo "<p><b>$table_heads[$i] :</b> $employeeInfo[$i]</p>";
        }
    }
}
//echo "</div>";
?>