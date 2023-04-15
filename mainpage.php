<?php
include ('connect.php');

session_start();
if (!isset($_SESSION['username']) && !isset($_SESSION['password'])) {
    
    header("Location: index.php");
}
else{
    header("Location: mainpage.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WELCOME!</title>
</head>
<body>
    <h1>Currency Exchange</h1>
<table class="table">
  <thead>
    <tr>
      <th scope="col">Valute ID</th>
      <th scope="col">NumCode</th>
      <th scope="col">charCode</th>
      <th scope="col">name</th>
      <th scope="col">value</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>

  </tbody>
</table>
</body>
</html>