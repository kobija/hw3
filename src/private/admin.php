<html>
<head>
    <style>
        @import url("../../styles/default.css");
    </style>
</head>
<h2> Admin </h2>
<p>
    <?php include("../../shared/functions.php") ?>
</p>
<body>
<div class="area">

    <?php if (!isAdmin()) {
        echo "<p> you need to be logged in as an administrator to access this page... </p>";
    } else {
        include("./user_table.php");
    }
    ?>
</div>
<?php include("../../shared/sidebar.php") ?>
</body>
</html>