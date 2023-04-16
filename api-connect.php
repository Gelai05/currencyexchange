<?php
ob_start();
require_once('api.php');
$data = ob_get_contents();
ob_end_clean();
$response = json_decode($data, true);

if(isset($_POST['filter'])) {
    $date_from = $_POST['date_from'];
    $date_to = $_POST['date_to'];
  
    $sql = "SELECT * FROM currency WHERE date_from >= '$date_from' AND date_to <= '$date_to'";
    
} else {
    $sql = "SELECT * FROM currency";
}

$response = $conn->query($sql);
?>