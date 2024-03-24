<link rel="stylesheet" href="./icon/fontawesome/css/all.min.css">
<style>
    body {
        font-family: 'Times New Roman', Times, serif;
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
<?php
$c = mysqli_connect('localhost', 'root', '', 'marina_fleet');
if (isset($_GET['action']) && isset($_GET['id']) && $_GET['action'] == 'delete') {
    $s = "DELETE FROM customers_eat WHERE id =" . $_GET['id'];
    mysqli_query($c, $s);
}
if (isset($_GET['1']) && $_GET['1'] == 'desc') {
    $r = mysqli_query($c, "SELECT * FROM customers_eat order by id DESC");
} else {
    isset($_GET['1']) && $_GET['1'] == 'asc';
    $r = mysqli_query($c, "SELECT * FROM customers_eat order by id ASC");
}

?>

<h2>Danh sách khách hàng đặt lịch ăn tối</h2>
<button><a href="order.php?1=asc"><i class="fas fa-chevron-up"></i> ASC</a></button>
<button><a href="order.php"><i class="fas fa-chevron-down"></i> DESC</a></button>
<br><br>
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Lịch trình</th>
        <th>Vị trí ngồi</th>
        <th>Số điện thoại</th>
        <th>Tàu</th>
        <th>Số người</th>
        <th>Email</th>
        <th>Địa chỉ</th>
        <th>Thực đơn</th>
    </tr>
    <?php
    while ($row = mysqli_fetch_assoc($r)) {
    ?>
        <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['lichkhoihanh'] ?></td>
            <td><?php echo $row['vitringoi'] ?></td>
            <td><?php echo $row['phone'] ?></td>
            <td><?php echo $row['tau'] ?></td>
            <td><?php echo $row['people'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['address'] ?></td>
            <td><?php echo $row['menu'] ?></td>
            <td><br><br><a href='order.php?id="<?php echo $row['id'] ?>"'>Change <i class="fas fa-exchange-alt"></i></a><br><br>
                <a href='order.php?action=delete&id="<?php echo $row['id'] ?>"'><i class="fas fa-trash"></i> Delete</a> <br><br>

        </tr>
    <?php
    }
    $c->close();
    ?>
</table>