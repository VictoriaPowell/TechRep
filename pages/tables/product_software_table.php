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
    'Name',
    'OS',
    'Version',
    'Price');

/* Queries */
$data_query = "
SELECT
	P.productID ID
    ,S.type Type
    ,P.productName Name
    ,S.osRequirement OS
    ,S.version Version
    ,P.price Price
FROM mgc353_4.Software S, mgc353_4.Product P
WHERE P.classificationID = S.classificationID ";

if($name && $name != ""){
    $data_query .= " AND P.productName LIKE '%$name%'";
}
if($code && $code != ""){
    $data_query .= " AND P.productID = '$code'";
}
$result = mysqli_query($_SESSION['conn'], $data_query);
//$rowCount = mysqli_num_rows($result);
while($data_row= mysqli_fetch_array($result)){
    $data_row[5] = "$".$data_row[5];
    array_push($table_data, $data_row);
    //echo"alert($data_row)";
}
if(!$table_data)
{
    echo "No Results!";
    die( print_r( mysqli_error($_SESSION['conn']), true));
}
else{
    makeTable('Software',$table_heads, $table_data);
}
?>