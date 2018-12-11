<html>
<head>
    <style>
        @import url("../../styles/default.css");
    </style>
</head>
<h2> Main Page </h2>
<p>
    <?php include("../../shared/functions.php") ?>
</p>
<body>
<div class="area">
    <p> Welcome to CS 4339 Web Security! Use the left navigation bar to traverse through the web pages </p>
    <?php
    if (isAdmin()){
          include("../private/Web_database.php");

    }
    else echo "<p>this is for admins </p>";
    ?>
</div>
<?php include("../../shared/sidebar.php") ?>
</body>
</html>