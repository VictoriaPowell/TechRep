<?php
include '../../connect.php';
include '../utils_pages.php';
$date = $_REQUEST['date'];
$technician = $_REQUEST['technician'];
$client = $_REQUEST['client'];
if($date && $date != ""){
}
else {
    $date = '2015-01-01';
}
// THE REST IS STUFF YOU CAN USE AS A BASE
/* Needed variables */
$table_data = array();
$table_heads = array(
    'Date',
    'ID',
    'EID',
    'DID',
    'Service',
    'Type',
    'Location',
    'Client Notes',
    'Technician Notes',
    'Manager Notes',
    'Minutes',
    'Price',
    'Commision');

/* Queries */
$data_query = "
SELECT
    DATE_FORMAT(s.date,'%b %d, %Y'),
    s.serviceID,
    s.employeeID,
    s.deviceID,
    s.serviceType,
    s.issueType,
    s.location,
    s.clientNotes,
    s.technicianNotes,
    s.managerNotes,
    s.minutes,
    s.price,
    sen.percent
FROM Service s, Employee e, Seniority sen
WHERE s.employeeID = e.employeeID
	AND e.seniorityID = sen.seniorityID ";
if($date !== 'all' && $date && $date != "") {
    $data_query .= "AND s.date = '$date' ";
}
if($technician && $technician != ""){
    $data_query .= "AND s.employeeID = '$technician' ";
}
if($client && $client != "") {
    $data_query .= "AND s.clientID = '$client' ";
}
//echo $data_query;
/*if($code && $code != ""){
    $data_query .= " AND P.productID = '$code'";
}*/
$result = mysqli_query($_SESSION['conn'], $data_query);
//$rowCount = mysqli_num_rows($result);
while($data_row= mysqli_fetch_array($result)){
    $data_row[12] = $data_row[11]*($data_row[12]/100.00);
    $data_row[12] = "$".$data_row[12];
    $data_row[11] = "$".$data_row[11];
    array_push($table_data, $data_row);
    //echo"alert($data_row)";
}
if(!$table_data)
{
    echo "No Results! Search: ".$date. " ".$technician." ".$client." ";
    die( print_r( mysqli_error($_SESSION['conn']), true));
}
else{
    makeTable('All Services',$table_heads, $table_data);
}
?>