<title>Tin tức</title>
<link rel="stylesheet" href="./icon/fontawesome/css/all.min.css">
<?php
$c = mysqli_connect('localhost', 'root', '', 'marina_fleet');
  if (isset($_GET['1']) && $_GET['1'] == 'desc') {
    $r = mysqli_query($c, "SELECT * FROM news order by id DESC");
} else {
    isset($_GET['1']) && $_GET['1'] == 'asc';
    $r = mysqli_query($c, "SELECT * FROM news order by id ASC");
}
if (isset($_GET['action']) && isset($_GET['id']) && $_GET['action'] == 'delete') {
    $s = "DELETE FROM news WHERE id =" . $_GET['id'];
    mysqli_query($c, $s);
}
?>
<style>
    
    table {
        width: 100%;
        border-collapse: collapse;
        border: 2px solid #ccc;
    }

    th,
    td {
        padding: 8px;
        text-align: center;
        border: 1px solid #ccc;
    }

    a {
        text-decoration: none;
    }

    table img {
        height: 200px;
        width: 200px;
    }

    th {
        background-color: #eaeaea;
        font-weight: bold;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #e0e0e0;
    }
</style>
<h2>Danh sách tin tức</h2>
<button><a href="news.php?1=asc"><i class="fas fa-chevron-up"></i>ASC</a></button>
<button><a href="news.php?1=desc"><i class="fas fa-chevron-down"></i>DESC</a></button><br><br>
<table>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Image</th>
        <th>Content</th>
        <th></th>
    </tr>
    <?php

    while ($row = mysqli_fetch_assoc($r)) {
    ?>
        <tr>
            <td>
                <?php echo $row['id'] ?>
            </td>
            <td>
                <?php echo $row['title'] ?>
            </td>
            <td>
                <?php echo "<img src='" . $row["image"] . "'>"; ?>
            </td>
            <td style=" text-align: justify">
                <?php echo $row['content']  ?>
            </td>
            <td><a href='news_change.php?id=<?php echo $row['id'] ?>'>Change <i class="fas fa-exchange-alt"></i></a><br><br>

                <?php echo "<a href='news.php?action=delete&id=" . $row["id"] . "'><i class='fas fa-trash'></i> Delete</a>" ?>
                <br><br>
        </tr>
    <?php
    }
    $c->close();
    ?>
</table>