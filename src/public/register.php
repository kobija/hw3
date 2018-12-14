<?php

register();

function register() {
	$servername = "cssrvlab01.utep.edu";
	$username = "kjvaldez";
	$password = "Sasuke99!";
	$dbname = "kjvaldez_db";


    $firstname      = $_POST["firstname"];
    $lastname       = $_POST["lastname"];
    $uname       = $_POST["username"];
    $pw       = $_POST["password"];
    $lastlogin = -1;
    $created = date("Y/m/d");

    $password_encrypted = password_hash($pw, PASSWORD_DEFAULT);

    $isAdmin = 0;
    if ($_POST["admin"] == 'admin') {
        debug_to_console('isAdmin');
        $isAdmin = 1;
    }

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO person (first_name, last_name, user_name, user_password, user_type, last_login, account_creation) VALUES ('$firstname', '$lastname', '$uname', '$password_encrypted', '$isAdmin', '$lastlogin', '$created')";

    if ($conn->query($sql) === TRUE) {
        $message = "New record created successfully";
        echo "<script type='text/javascript'>alert('$message'); window.location.href='../private/admin.php';</script>";
    } else {
        $message = "Error: " . $sql . "<br>" . $conn->error;
        echo "<script type='text/javascript'>alert('$message'); window.location.href='../private/admin.php';</script>";
    }
    $conn->close();

}

function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "');</script>";
}
