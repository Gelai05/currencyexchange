<?php
include ('connect.php');

if(isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = mysqli_prepare($conn, "SELECT * FROM users WHERE username = ?");

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if(mysqli_num_rows($result) == 1){
        $row = mysqli_fetch_assoc($result);
        $stored_password = $row['password'];
        if(password_verify($password, $stored_password)){
            // password is correct, start session and redirect to mainpage
            $_SESSION['username'] = $username;
            header("Location: mainpage.php");
            exit();
        }
    }

    // incorrect login, redirect to index.php
    header("Location: index.php");
    exit();
}
?>