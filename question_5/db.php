<?php
include 'connect.php';

$conn = OpenConnection();

if(isset($_POST['signup-btn'])) {
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    $insert = "INSERT INTO users(email, password)VALUES('$email', '$pwd')";

    setData($insert);
    header("location: login.html");
}

if(isset($_POST['login-btn'])) {
    $email = $_POST['email'];
    $pwd = $_POST['password'];

    $select = "SELECT * FROM users WHERE email = '".$email."' AND password = '".$pwd."'";

    $result = mysqli_query($conn, $select);

    if(mysqli_fetch_assoc($result)) {
        header("location: index.html");
    }

    header("location: login.html");
}

CloseConnection($conn);

?>