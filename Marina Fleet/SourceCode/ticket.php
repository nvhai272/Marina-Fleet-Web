<?php
  $c = mysqli_connect('localhost', 'root', '', 'marina_fleet');
  $query = "SELECT * FROM customers_eat ORDER BY id DESC LIMIT 1";
  $result = mysqli_query($c, $query);
  $row = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Hiển thị thông tin vé</title>
  <style>
    body {
      font-family:'Times New Roman', Times, serif;
      background-color: #f2f2f2;
      display: flex;
      margin-top: 10%;
      flex:1;
    }

    .ticket {
      max-width: 350px;
      margin: 0 auto;
      background-color:cornsilk;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      padding: 20px;
      text-align: center;
      font-size:larger;
    }

    .ticket h1 {
      margin: 0;
      font-size: 24px;
      color: #333;
      padding-bottom: 10px;
      border-bottom: 1px solid #ccc;
    }

    .ticket table {
      width: 100%;
      margin-top: 20px;
      border-collapse: collapse;
    }

    .ticket td {
      padding: 10px;
      border-bottom: 1px solid #ccc;
      text-align: left;
    }

    .ticket td:first-child {
      font-weight: bold;
    }

    .ticket td:nth-child(even) {
      color: #666;
    }
    div{
        width:60%;
        font-size: larger;
    }
    div input {
        padding:5px;
    }
  </style>
</head>
<body style="background:url('img/ocean.webp');background-repeat:no-repeat; background-size:cover;">
  <div class="ticket">
    <?php if ($row): ?>
      <h1>Thông tin vé #<?php echo $row['id']; ?></h1>
      <table>
        <tr>
          <td>Lịch khởi hành</td>
          <td><?php echo $row['lichkhoihanh']; ?></td>
        </tr>
        
        <tr>
          <td>Vị trí gọi</td>
          <td><?php echo $row['vitringoi']; ?></td>
        </tr>
        
        <tr>
          <td>Họ tên</td>
          <td><?php echo $row['name']; ?></td>
        </tr>
        
        <tr>
          <td>Số điện thoại</td>
          <td><?php echo $row['phone']; ?></td>
        </tr>
        
        <tr>
          <td>Thuê</td>
          <td><?php echo $row['tau']; ?></td>
        </tr>
        
        <tr>
          <td>Số người</td>
          <td><?php echo $row['people']; ?></td>
        </tr>
        <tr>
          <td>Thực đơn</td>
          <td><?php echo $row['menu'] ; ?></td>
        </tr>
      </table>
    <?php else: ?>
      <p>Không có thông tin vé.</p>
    <?php endif; ?>
  </div>
  <div>
    <h2>Cảm ơn quý khách đã tin tưởng dịch vụ của Marina!</h2>
    <p>Thông tin đăng kí sẽ được gửi về email cá nhân và số điện thoại đăng ký của quý khách.<br>
    <br> Vui lòng nhập mã xác thực số điện thoại để nhận thông tin vé: </p>
    <input type="number"> <input type="submit" value="Gửi lại mã"><br><br>
    <input type="submit" value="Xác nhận"> <br><br><a href="home page.php"> Về Trang Chủ</a>
</div>
</body>
</html>
<?php
mysqli_close($c);
?>
