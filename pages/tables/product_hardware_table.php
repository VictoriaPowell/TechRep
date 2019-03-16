<?php
include '../../connect.php';
include '../utils_pages.php';
$name = $_REQUEST['name'];
$code = $_REQUEST['code'];
/* Needed variables */
$table_data = array();
$table_heads = array(
    'ID',
    'Type',
    'Company',
    'Name',
    'OS',
    'Version',
    'Price');

/* Queries */
$data_query = "
	SELECT
	P.productID ID
    ,H.partType Type
    ,H.compType Company
    ,P.productName Name
    ,H.osType OS
    ,H.version Version
    ,P.price Price
FROM mgc353_4.Hardware H, mgc353_4.Product P
WHERE P.classificationID = H.classificationID";

if($name && $name != ""){
    $data_query .= " AND P.productName LIKE '%$name%'";
}
if($code && $code != ""){
    $data_query .= " AND P.productID = '$code'";
}
$result = mysqli_query($_SESSION['conn'], $data_query);
//$rowCount = mysqli_num_rows($result);
while($data_row= mysqli_fetch_array($result)){
    $data_row[6] = "$".$data_row[6];
    array_push($table_data, $data_row);
    //echo"alert($data_row)";
}
if(!$table_data)
{
    echo "No Results!";
    die( print_r( mysqli_error($_SESSION['conn']), true));
}
else{
    makeTable('Hardware',$table_heads, $table_data);
}
?>