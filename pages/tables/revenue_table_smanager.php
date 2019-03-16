<?php
//include '../../connect.php';
//include '../utils_pages.php';
$store = $_SESSION['SID'];
$result = null;

$query_online_purchase = "SELECT SUM(pur.purchaseCount*p.price) AS onlinePurchases
	FROM Purchase pur, Product p
	WHERE pur.productID = p.productID
		AND pur.location = 'online'
		AND pur.storeID = '$store'";
$result = mysqli_query($_SESSION['conn'], $query_online_purchase);
$onlineSalesTot = mysqli_fetch_array($result);
$onlineSalesTot = $onlineSalesTot[0];

$result = null;
$query_online_repair = "SELECT SUM(price)
FROM mgc353_4.Service
WHERE location = 'online'
	AND storeID = '$store'";
$result = mysqli_query($_SESSION['conn'], $query_online_repair);
$onlineServiceTot = mysqli_fetch_array($result);
$onlineServiceTot = $onlineServiceTot[0];
$onlineTot = $onlineServiceTot+ $onlineSalesTot;

$result = null;
$query_instore_purchase = "SELECT SUM(pur.purchaseCount*p.price) AS onlinePurchases
	FROM Purchase pur, Product p
	WHERE pur.productID = p.productID
		AND pur.location = 'in-store'
		AND pur.storeID = '$store'";
$result = mysqli_query($_SESSION['conn'], $query_instore_purchase);
$instoreSalesTot = mysqli_fetch_array($result);
$instoreSalesTot = $instoreSalesTot[0];

$result = null;
$query_instore_repair = "SELECT SUM(price)
FROM mgc353_4.Service
WHERE location = 'in-store'
	AND storeID = '$store'";
$result = mysqli_query($_SESSION['conn'], $query_instore_repair);
$instoreServiceTot = mysqli_fetch_array($result);
$instoreServiceTot = $instoreServiceTot[0];

$instoreTot = $instoreServiceTot+ $instoreSalesTot;

$result = null;
$query_technician = "SELECT SUM(e.currEarning)
	FROM mgc353_4.Employee e, mgc353_4.Seniority s
	WHERE e.seniorityID = s.seniorityID
		AND s.seniority <> 'smanager'
        AND s.seniority <> 'cmanager'
        AND e.storeID = '$store'";
$result = mysqli_query($_SESSION['conn'], $query_technician);
$technicianTot = mysqli_fetch_array($result);
$technicianTot = $technicianTot[0];

$totRevenue = $instoreTot+$onlineTot-$technicianTot;
?>
<h1 style="text-align: center;"><b>Current Revenues:</b> <?php echo "$".$totRevenue; ?> </h1>
<br class="clear" />
<h3><b>Online:</b> <?php echo "$".$onlineTot; ?> </h3>
<p><b>Sales:</b> <?php echo "$".$onlineSalesTot; ?> </p>
<p><b>Service:</b> <?php echo "$".$onlineServiceTot; ?> </p>
<br class="clear" />
<h3><b>In-Store:</b> <?php echo "$".$instoreTot; ?> </h3>
<p><b>Sales:</b> <?php echo "$".$instoreSalesTot; ?> </p>
<p><b>Service:</b> <?php echo "$".$instoreServiceTot; ?> </p>
<br class="clear" />
<h3><b>Technician Commision:</b> <?php echo "-$".$technicianTot; ?> </h3>
<br class="clear" />