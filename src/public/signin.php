<?php

signIn();

$isAdmin = false;
function signIn() {
    $con =  mysqli_connect("cssrvlab01.utep.edu", "kjvaldez", "Sasuke99!", "kjvaldez_db");

    $user_name      = $_POST["user_name"];
    $user_password       = $_POST["user_password"];


    $userStatement = "SELECT * FROM person WHERE user_name ='$user_name'";
    $result = $con->query($userStatement);
    if ($result->num_rows === 1) {
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if (password_verify($user_password, $row['user_password'])){
            debug_to_console("password match");
            echo "Match";
            session_start();
            $_SESSION["token"] = "39s8dk2kjal";
            $_SESSION["csuserid"] = $row["csid"];
            $_SESSION["username"] = $row["user_name"];
            $_SESSION["firstname"] = $row["first_name"];
            $_SESSION["lastname"] = $row["last_name"];
            $_SESSION['isAdmin'] = $row["user_type"];
            $_SESSION['lastlogin'] = date("Y/m/d");
            $_SESSION['created'] = $row["account_creation"];
            $cookie_name = "user";

            $cookie_value = $row["user_name"];
            setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
            echo "session " . $_SESSION["token"] . ".<br>";
            header('Location: /hw3/src/public/mainpage.php');

        } else {
            debug_to_console("The username or password do not match");
        }
    }
    else {
       $message = "The username or password do not match";
        echo "<script type='text/javascript'>alert('$message'); window.location.href='../../index.html';</script>";
    }
}



function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "');</script>";
}
