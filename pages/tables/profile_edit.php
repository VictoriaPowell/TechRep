<?php
include '../../connect.php';
include '../utils_pages.php';
/* Needed variables */
$store = $_SESSION['SID'];
$employee = $_SESSION['EID'];
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

        //** INPUTS **/
        else if($i == "11"){
            echo "<p><b>$table_heads[$i] :</b> <input type='text' id='phone' value='$employeeInfo[$i]'></p>";
        }
        else if($i == "12"){
            echo "<p><b>$table_heads[$i] :</b> <input type='text' id='address' size='30' value='$employeeInfo[$i]'></p>";
        }
        else if($i == "13"){
            echo "<p><b>$table_heads[$i] :</b> <input type='text' id='nickname' value='$employeeInfo[$i]'></p>";
        }
        else if($i == "14"){
            echo "<p><b>$table_heads[$i] :</b> <input type='email' id='email' size='30' value='$employeeInfo[$i]'></p>";
        }
        else if($i == "15"){
            echo "<p><b>$table_heads[$i] :</b> <input type='text' id='description' maxlength='255' size='80' value='$employeeInfo[$i]'></p>";
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
        //** INPUTS **/
        else if($i == "11"){
            echo "<p><b>$table_heads[$i] :</b> <input type='text' id='phone' value='$employeeInfo[$i]'></p>";
        }
        else if($i == "12"){
            echo "<p><b>$table_heads[$i] :</b> <input type='text' id='address' size='30' value='$employeeInfo[$i]'></p>";
        }
        else if($i == "13"){
            echo "<p><b>$table_heads[$i] :</b> <input type='text' id='nickname' value='$employeeInfo[$i]'></p>";
        }
        else if($i == "14"){
            echo "<p><b>$table_heads[$i] :</b> <input type='email' id='email' size='30' value='$employeeInfo[$i]'></p>";
        }
        else if($i == "15"){
            echo "<p><b>$table_heads[$i] :</b> <input type='text' id='description' maxlength='255' height='60' size='60' value='$employeeInfo[$i]'></p>";
        }
        else{
            echo "<p><b>$table_heads[$i] :</b> $employeeInfo[$i]</p>";
        }
    }
}
echo "<button type='button' id='SubmitButton' onclick='profileSubmit()' style='text-align: center;'>Submit</button>";
//echo "</div>";
?>