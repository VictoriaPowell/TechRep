<?php
include '../../connect.php';
include '../utils_pages.php';
$name = $_REQUEST['name'];
$code = $_REQUEST['code'];
$store = $_SESSION['SID'];
/* Needed variables */
$table_data = array();
$table_heads = array(
    'ID',
    'PID',
    'Name',
    'Description',
    'Price',
    'Stock',
    'Purchase Freq.');

/* Queries */
$data_query = "
SELECT
	i.inventoryID ID
    ,i.productID PID
    ,p.productName PName
    ,p.productDescription Description
    ,p.price Price
    ,i.currentStock Stock
    ,pur.purchaseCount
	FROM mgc353_4.Inventory i, mgc353_4.Product p, mgc353_4.Purchase pur
    WHERE i.productID = p.productID
      AND i.storeID = '$store'
      AND p.productID = pur.productID ";

if($name && $name != ""){
    $data_query .= " AND p.productName LIKE '%$name%'";
}
if($code && $code != ""){
    $data_query .= " AND i.productID = '$code'";
}
$result = mysqli_query($_SESSION['conn'], $data_query);
//$rowCount = mysqli_num_rows($result);
while($data_row= mysqli_fetch_array($result)){
    $data_row[4] = "$".$data_row[4];
    array_push($table_data, $data_row);
    //echo"alert($data_row)";
}
if(!$table_data)
{
    echo "No Results!";
    die( print_r( mysqli_error($_SESSION['conn']), true));
}
else{
    makeTable('Inventory',$table_heads, $table_data);
}
?>