<?php
$conn = mysqli_connect("localhost","root","","currency_exchange");
$response = array();
if ($conn){
    $sql = "SELECT * FROM currency";
    $result = mysqli_query($conn,$sql);
    if($result){
        header("Content-Type:JSON");
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
        echo json_encode($response,JSON_PRETTY_PRINT);
    }
}
else{
    echo "Database connection failed";
}
?>