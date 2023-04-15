<?php
include_once ('connect.php');
// Check if parameters are provided
if (isset($_GET['valuteID']) && isset($_GET['from']) && isset($_GET['to'])) {
    $valuteID = $_GET['valuteID'];
    $from = $_GET['from'];
    $to = $_GET['to'];

    $sql = "SELECT * FROM currency WHERE valuteID='$valuteID' AND date_from>='$from' AND date_to<='$to'";
    $result = mysqli_query($conn,$sql);
    if($result){
        $i=0;
        while($row = mysqli_fetch_assoc($result)){
            $response[$i]['id'] = $row ['id'];
            $response[$i]['valuteID'] = $row ['valuteID'];
            $response[$i]['numCode'] = $row ['numCode'];
            $response[$i]['charCode'] = $row ['charCode'];
            $response[$i]['name'] = $row ['name'];
            $response[$i]['value'] = $row ['value'];
            $response[$i]['date_from'] = $row ['date_from'];
            $response[$i]['date_to'] = $row ['date_to'];
            $i++;
        }
        // Return the result as JSON
        header("Content-Type: application/json");
        echo json_encode($response, JSON_PRETTY_PRINT);
    } else {
        // Return error message
        http_response_code(404);
        echo json_encode(array("message" => "No records found."));
    }
} else {
    // Return error message
    http_response_code(400);
    echo json_encode(array("message" => "Invalid parameters."));
}
?>