<?php
$c = mysqli_connect('localhost', 'root', '', 'marina_fleet');
$s = "SELECT * FROM info_contact";
$r = mysqli_query($c,$s);
?>
<h2>Danh sách khách hàng cần tư vấn</h2>
<table>
        <tr>
            <th>Customer_ID</th>
            <th>Full Name</th>
            <th>Phone</th>
            <th>Address</th>
            <th>Mail</th>
            <th>Nội dung</th>
            <th></th>
        </tr>
        <?php
        while ($row = mysqli_fetch_assoc($r)) {
            ?>
            <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['phone'] ?></td>
            <td><?php echo $row['address'] ?></td>
            <td><?php echo $row['mail'] ?></td>
            <td style=" text-align: justify"><?php echo $row['content'] ?></td>
            <td><br><a href='update.php?id="<?php echo $row['id']?>"'>Update <i class="fas fa-plus"></i></a><br><br>
            <a href='delete.php?id="<?php echo $row['id']?>"'><i class="fas fa-trash"></i> Delete</a><br><br>
            </tr>
        <?php
        }
        $c->close();
        ?>
    </table>
    <style>
        body{
        font-family:'Times New Roman', Times, serif;
    }
        table {
            width: 100%;
            border-collapse: collapse;
            border:2px solid #ccc;
        }
        
        th, td {
            padding: 8px;
            text-align: center;
            border: 1px solid #ccc;
        }
        
        tr:hover {
            background-color: #f5f5f5;
        }
        
        a {
            text-decoration: none;
        }
    </style>
    <link rel="stylesheet" href="./icon/fontawesome/css/all.min.css">