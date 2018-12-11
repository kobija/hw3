<?php
session_start(); // this NEEDS TO BE AT THE TOP of the page before any output etc

function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "');</script>";
}

if(isset($_GET['action']) && $_GET['action'] == 'logout'){
    logout();
}

function logout() {
    unset($_COOKIE[user]);
    setcookie(user, null, -1, '/');
    $_SESSION['isAdmin'] = null;

}

function isAdmin() {
    $value = $_SESSION['isAdmin'];
    if ($value == 1) {
        return true;
    }
    return false;
}
function isRegular() {
    $value = $_SESSION['isAdmin'];
    if ($value == 1) {
        return true;
    }
    return false;
}
function display_user_info() {


}
