<title>Đánh giá của khách hàng</title>
<link rel="stylesheet" href="./icon/fontawesome/css/all.min.css">
<?php
$c = mysqli_connect('localhost', 'root', '', 'marina_fleet');
if (isset($_GET['action']) && isset($_GET['id']) && $_GET['action'] == 'delete') {
    $s = "DELETE FROM assess WHERE id =" . $_GET['id'];
    mysqli_query($c, $s);
}
if (isset($_GET['1']) && $_GET['1'] == 'desc') {
    $r = mysqli_query($c, "SELECT * FROM assess order by id DESC");
} else {
    isset($_GET['1']) && $_GET['1'] == 'asc';
    $r = mysqli_query($c, "SELECT * FROM assess order by id ASC");
}
?>
<style>
    body{
        font-family:'Times New Roman', Times, serif;
    }
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

<h2>Phản hồi của khách hàng</h2>
<button><a href="assess.php?1=asc"><i class="fas fa-chevron-up"></i> ASC</a></button>
<button><a href="assess.php?1=desc"><i class="fas fa-chevron-down"></i> DESC</a></button>
<br><br>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Service</th>
        <th>Image</th>
        <th>Comment</th>
        <th></th>
    </tr>
    <?php
    while ($row = mysqli_fetch_assoc($r)) {
    ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['service'] ?></td>
            <td><?php echo "<img src='" . $row["img"] . "'>"; ?></td>
            <td style=" text-align: justify"><?php echo $row['comment'] ?></td>
            <td><a href='assess_change.php?id="<?php echo $row['id'] ?>"'><i class="fas fa-exchange-alt"></i></a><br><br>
            <a href='assess.php?action=delete&id="<?php echo $row['id'] ?>"'><i class="fas fa-trash"></i></a> 
        </tr>
    <?php
    }
    $c->close();
    ?>
</table>