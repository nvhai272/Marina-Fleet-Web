<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./icon/fontawesome/css/all.min.css">
    <title>Admin Page</title>
    <link rel="stylesheet" href="admin.css">
</head>

<body>
    <div class="sidebar">
        <ul>
            <li style="background-color:blanchedalmond "><a href="home page.php"><i class="fas fa-home"> </i> Home Page</a></li>
            <li><i class="fas fa-user"></i> Customers
                <ul class="submenu">
                    <li><a href="admin.php?page=assess.php"><i class="fas fa-list"></i> Assess List</a></li>
                    <li><a href="admin.php?page=counsel.php"><i class="fas fa-list"></i> Counsel List</a></li>
                    <li><a href="admin.php?page=order.php"><i class="fas fa-list"></i> Order List</a></li>
                </ul>
            </li>
            <li><i class="fas fa-box"></i> Services
                <ul class="submenu">
                    <li><a href="admin.php?page=news.php"><i class="fas fa-ship"></i> Ships And Yachts</a></li>
                    <li><a href="admin.php?page=news.php"><i class="fas fa-bars"></i> Restaurant Menu</a></li>
                    <li></li>
                </ul>
            </li>
            <li><i class="fas fa-newspaper"></i> News
                <ul class="submenu">
                    <li><a href="admin.php?page=news.php"><i class="fas fa-cogs"></i> Manage News</a></li>
                    <li><a href="news_create.php"><i class="fas fa-plus"></i> Add News</a></li>
                </ul>
            </li>
            <li><i class="fas fa-cog"></i> Settings</li>
        </ul>
    </div>

    <div class="content">

        <?php

        if (isset($_GET['page'])) {
            include $_GET['page']; // page = gido.php
        } else {
            echo '<h2>Dashboard</h2>
        <p>Welcome to the admin panel.</p>';
        }

        ?>
    </div>
</body>

</html>