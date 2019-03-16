<?php
include '../../connect.php';
include '../utils_pages.php';
$code = $_REQUEST['code'];
$store = $_SESSION['SID'];
/* Needed variables */
$table_data = array();
$table_heads = array(
    'ID',
    'Started',
    'Seniority',
    'Rating',
    'Rate(per hr)',
    '% Commision',
    'total Mins',
    'total Earning');

/* Queries */
$data_query = "
SELECT
	e.employeeID ID
    ,e.startDate
	,s.seniority
    ,s.rating
    ,s.hrRate
    ,s.percent
    ,e.currMinutes
    ,e.currEarning
FROM mgc353_4.Employee e, mgc353_4.Seniority s
WHERE e.seniorityID = s.seniorityID
  AND s.seniority <> 'smanager'
  AND s.seniority <> 'cmanager'
  AND e.storeID = '$store' ";

if($code && $code != ""){
    $data_query .= " AND e.employeeID = '$code'";
}
$result = mysqli_query($_SESSION['conn'], $data_query);
//$rowCount = mysqli_num_rows($result);
while($data_row= mysqli_fetch_array($result)){
    $data_row[4] = "$".$data_row[4];
    $data_row[7] = "$".$data_row[7];
    array_push($table_data, $data_row);
    //echo"alert($data_row)";
}
if(!$table_data)
{
    echo "No Results!";
    die( print_r( mysqli_error($_SESSION['conn']), true));
}
else{
    makeTable('Technicians',$table_heads, $table_data);
}
?>