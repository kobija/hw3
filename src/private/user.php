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
<div class="area" style="height: 100%">
    <?php
    $username = $_SESSION['username'];
    $firstname = $_SESSION['firstname'];
    $lastname = $_SESSION['lastname'];
    $lastlogin = "last login: " . $_SESSION['lastlogin'];
    $created = "created on " . $_SESSION['created'];
    $csid =  $_SESSION['csuserid'];
    if ($_SESSION['isAdmin'] > 0) {
        echo "<p> user type: admin" . "</p>";
    } else {
        echo "<p> user type: regular" . "</p>";
    }
    echo "
     <form action=\"Web_database.php\" method=\"post\">
         username:  <input type='username' name='username' id ='username' placeholder='$username'> <br>
         firstname: <input type='firstname' name='firstname' id ='firstname' placeholder='$firstname'> <br>
         lastname:  <input type='lastname' name='lastname' id ='lastname' placeholder='$lastname'>  <br>
         cs id:     <input type='csid' name='csid' id ='csid' placeholder='$csid'> <br>    
        <input type=\"submit\" name = \"submit\" value =\"Change user profile\"><br>
       

    </form>";
    ?>
</div>
<?php include("../../shared/sidebar.php") ?>
</body>
</html>