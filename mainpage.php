<?php
include('api-connect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <title>WELCOME!</title>
</head>

<body>
    <div class="container mt-5">
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="row">
    <div class="col-lg-4">
      <div class="form-outline">
        <input type="date" name="date_from" id="date_from" default_value="<?php echo date('Y-m-d'); ?>" class="form-control border-dark" />
        <label class="form-label" for="date_from"></label>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="form-outline">
        <input type="date" name="date_to" id="date_to" default_value="<?php echo date('Y-m-d', strtotime('+30 days')); ?>" class="form-control border-dark" />
        <label class="form-label border-dark" for="date_to"></label>
      </div>
    </div>
    <div class="col-lg-4">
      <div class="text-center bg-primary">
        <button type="submit" name="filter" class="btn btn-primary mx-auto">Filter</button>
      </div>
    </div>
  </div>
</form>

    </form>

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
        <?php
            if ($response->num_rows > 0) {
                while ($row = $response->fetch_assoc()) {
                    echo "<tr>";
                    echo "<th scope='row'>" . $row['valuteID'] . "</th>";
                    echo "<td>" . $row['numCode'] . "</td>";
                    echo "<td>" . $row['charCode'] . "</td>";
                    echo "<td>" . $row['name'] . "</td>";
                    echo "<td>" . $row['value'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='5'>No records found.</td></tr>";
            }

            $conn->close();
        ?>
        </tbody>
    </table>
</body>
</html>
