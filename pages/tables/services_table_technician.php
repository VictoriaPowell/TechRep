<?php
include '../../connect.php';
include '../utils_pages.php';
$date = $_REQUEST['date'];
$technician = $_SESSION['EID'];
$client = $_REQUEST['client'];
if($date && $date != ""){
}
else {
    $date = '2015-01-01';
}
// THE REST IS STUFF YOU CAN USE AS A BASE
/* Needed variables */
$query = "
  SELECT s.percent
	FROM mgc353_4.Seniority s, mgc353_4.Employee e
    WHERE e.seniorityID = s.seniorityID
		AND e.employeeID = '$technician'";
$res = mysqli_query($_SESSION['conn'], $query);
$row= mysqli_fetch_array($res);
$percent = $row[0];
//echo $percent;

$table_data = array();
$table_heads = array(
    'Date',
    'ID',
    'DID',
    'Service',
    'Type',
    'Location',
    'Client Notes',
    'Technician Notes',
    'Manager Notes',
    'Minutes',
    'Price',
    'Commision'
    );

/* Queries */
$data_query = "
SELECT
    DATE_FORMAT(s.date,'%b %d, %Y'),
    s.serviceID,
    s.deviceID,
    s.serviceType,
    s.issueType,
    s.location,
    s.clientNotes,
    s.technicianNotes,
    s.managerNotes,
    s.minutes,
    s.price
FROM Service s
WHERE s.employeeID = '$technician' ";

if($client && $client != ""){
    $data_query .= "AND s.clientID = '$client' ";
}
if($date && $date != "" && $date != "all"){
    $data_query .= "AND s.date = '$date' ";
}
//echo $data_query;
/*if($code && $code != ""){
    $data_query .= " AND P.productID = '$code'";
}*/
$result = mysqli_query($_SESSION['conn'], $data_query);
//$rowCount = mysqli_num_rows($result);
while($data_row= mysqli_fetch_array($result)){
    //$commision = $percent;
    $commision = $data_row[10]*($percent/100.00);
    $commision = number_format($commision , 2, '.', '');
    $commision = "$".$commision;
    $data_row[10] = "$".$data_row[10];
    array_push($data_row,$commision);
    array_push($table_data, $data_row);
    //echo"alert($data_row)";
}
if(!$table_data)
{
    echo "No Results! Search: ".$date. " ".$technician." ".$client." ";
    die( print_r( mysqli_error($_SESSION['conn']), true));
}
else{
    makeTable('Services',$table_heads, $table_data);
}
?>