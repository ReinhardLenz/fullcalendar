<?php
// List of events
$json = array();

// Query that retrieves events
$request = "SELECT * FROM events ORDER BY id";

// connection to the database
try {
    require_once('../config/connect_DB.php');
    $dsn='mysql:host='.$host.';dbname='.$dbname;


    $bdd = new PDO($dsn,$user,$password);;
} catch (Exception $e) {
    exit($e);
}

// Execute the query
$result = $bdd->query($request) or die(print_r($bdd->errorInfo()));

// sending the encoded result to success page
echo json_encode($result->fetchAll(PDO::FETCH_ASSOC));

?>
