<?php
$id = $_POST['id'];
try {
    require_once('../config/connect_DB.php');
    $dsn='mysql:host='.$host.';dbname='.$dbname;


    $bdd = new PDO($dsn,$user,$password);;
} catch (Exception $e) {
    exit($e);
}

$sql = "DELETE from events WHERE id=" . $id;
$q = $bdd->prepare($sql);
$q->execute();
?>
