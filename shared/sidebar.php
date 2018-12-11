<html>
<head>
    <style>
        @import url("../styles/default.css");
    </style>
</head>
<nav class="main-menu">
    <ul>
        <li>
            <a href="../public/mainpage.php">
                <i class="fa fa-home fa-2x"></i>
                <span class="nav-text"> Mainpage </span>
            </a>
        </li>
        <?php
        if (isRegular()) {
            echo "<li class=\"has-subnav\">
        <a href=\"../private/user.php\">
            <i class=\"fa fa-user fa-2x\"></i>
            <span class=\"nav-text\"> profile</span>
        </a>
        </li>";
        }
        ?>
        <?php
        if (isAdmin()) {
            echo "<li class=\"has-subnav\">
        <a href=\"../private/admin.php\">
            <i class=\"fa fa-users fa-2x\"></i>
            <span class=\"nav-text\"> Admin </span>
        </a>
        </li>";
        }
        ?>
    </ul>

    <?php
    if ($_COOKIE[PHPSESSID] && $_COOKIE[user]) {
        debug_to_console( "Test1" );
        echo "<ul class=\"logout\">
                <li>
                    <a href=\"../public/mainpage.php?action=logout\">
                        <i class=\"fa fa-power-off fa-2x\"></i>
                        <span class=\"nav-text\"> Sign out </span>
                    </a>
                </li>
             </ul>";
    } else {
        echo "<ul class=\"logout\">
                <li>
                    <a href=\"http://localhost:8888/hw3/index.html\">
                        <i class=\"fa fa-power-off fa-2x\"></i>
                        <span class=\"nav-text\"> Sign in </span>
                    </a>
                </li>
            </ul>";
    }
    ?>
</nav>
</html>