<html>
<head>
    <style>
        @import url("../../styles/default.css");
    </style>
</head>
<h2> User Page </h2>
<p>
    <?php include("../../shared/functions.php") ?>
</p>
<body>
<div class="area">
    <?php
    $username = "username: " . $_SESSION['username'];
    $firstname = "firstname: " . $_SESSION['firstname'];
    $lastname = "lastname: " . $_SESSION['lastname'];
    $lastlogin = "last login: " . $_SESSION['lastlogin'];
    $created = "created on " . $_SESSION['created'];
    $csid = "cs id " . $_SESSION['csuserid'];
    echo "<p> " . $username . "</p>";
    echo "<p> " . $firstname . "</p>";
    echo "<p> " . $lastname. "</p>";
    echo "<p> " . $lastlogin . "</p>";
    echo "<p> " . $csid . "</p>";
    if ($_SESSION['isAdmin'] > 0) {
        echo "<p> user type: admin" . "</p>";
    } else {
        echo "<p> user type: regular" . "</p>";
    }
    ?>
</div>
<?php include("../../shared/sidebar.php") ?>
</body>
</html>