<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8" />
  <title>Du Thuyền King</title>
  <link rel="stylesheet" href="./icon/fontawesome/css/all.min.css">
  <style>
    .header {
      width: 100%;
      padding: 20px 0;
      margin: auto;
      margin-bottom: 50px;
      background-color: rgb(244, 250, 255);
    }

    .header_p {
      text-align: center;
      margin-top: 0;
    }

    h1 {
      text-align: center;
      margin: 0;
    }

    h2 {
      font-size: 28px;
    }

    h3 {
      line-height: 1.4;
      color: #0095da;
      display: inline;
    }

    p {
      margin-top: 18px;
      margin-bottom: 0;
      font-size: 18px;
    }

    .img {
      width: 100%;
      height: 400px;
      border: 1px solid black;
    }

    .main {
      width: 75%;
      margin: auto;
    }

    .menu {
      height: auto;
      display: flex;
      margin: auto;
      border: 1px solid black;
    }

    .menu_info {
      flex-basis: 100%;
      height: 280px;
      overflow: auto;
      padding: 20px 20px 0 20px;
    }

    li {
      font-size: 19px;
      font-weight: bold;
    }

    .icon {
      color: #0095da;
      margin-right: 5px;
    }

    .yacht_info {
      display: flex;
      justify-content: space-around;
    }

    .yacht_info_flex {
      flex-basis: 30%;
    }

    .info_input {
      width: 360px;
      height: 40.8px;
      margin-right: 15px;
      padding-left: 10px;
    }

    ::placeholder {
      font-size: 15px;
    }

    select {
      width: 373px;
      height: 46px;
    }
  </style>
</head>
<?php
  if (isset($_POST['submit'])) {
    $c = mysqli_connect('localhost', 'root', '', 'marina_fleet');
    $start = $_POST['start'];
    $option = $_POST['option'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $tau = $_POST['tau'];
    $people = $_POST['people'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $menu = $_POST['menu'];

    $s = "INSERT INTO customers_eat(lichkhoihanh, vitringoi, name, phone, people, tau, email, address, menu)
    VALUES('$start', '$option', '$name', '$phone', '$people', '$tau', '$email', '$address', '$menu')";
    
    if (mysqli_query($c, $s)) {
      header('location: ticket.php');
      exit;
    } else {
      echo "Lỗi: " . mysqli_error($c);
    }
  }
?>
<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="header">
    <h1>-- Du Thuyền King --</h1><br>
    <p class="header_p"><i class="icon fa-solid fa-location-dot"></i>Tại Vịnh Hạ Long</p>
  </div>
  <div class="main">
    <div class="menu">
      <div class="menu_img">
        <img src="https://tausaigon.com.vn/thumbs/400x300x1/upload/product/2-1511006558149-2230.jpg">
      </div>
      <div class="menu_info">
        <input type="checkbox" name="menu" value="Menu - Du Thuyền King">
        <h3>Menu - Du Thuyền King</h3>
        <br><br>
        <h3>Giá: 500.000đ</h3>

        <div class="scrollbar">
          <p>1. Chả giò hải sản (Seafood spring rolls)</p>
          <p>2. Gỏi sen tôm thịt (Lotus Salad w.shirmp and pork)</p>
          <p>3. Cánh gà chiên nước mắm (Fried chicken wing w.fish-sauce)</p>
          <p>4. Cá lóc kho tộ (Braised snakehead fish)</p>
          <p>5. Heo luôc cà pháo (Boiled pork with eggplant)</p>
          <p>6. Rau muống xào tỏi (Sauteed garlic spinach)</p>
          <p>7. Canh thập cẩm (Mixed soup)</p>
          <p>8. Cơm trắng (Rice)</p>
          <p>9. Trái cây (Fresh fruits)</p>
          <p>10. Trà đá (Iced tea)</p>
        </div>
      </div>
    </div>
    <h2>Thông tin du thuyền</h2>
    <div class="yacht_info">
      <div class="yacht_info_flex">
        <i class="icon fa-solid fa-users"></i>Sức chứa:
        <p><b>900</b></p>
      </div>
      <div class="yacht_info_flex">
        <i class="icon fa-solid fa-ship"></i>Loại thuyền:
        <p><b>Nhà Hàng Du Thuyền</b></p>
      </div>
      <div class="yacht_info_flex">
        <i class="icon fa-solid fa-calendar-days"></i>Lộ trình:
        <p><b>Các địa điểm tại Vịnh Hạ Long</b>
        </p>
      </div>
    </div>
    <div class="text" style="text-align: justify;">
      <h2>Thông tin đặt dịch vụ</h2>
      
      <ul>
        <li>Giờ đón khách: 18:30 chiều</li>
        <li>Giờ khởi hành: 19:30 chiều</li>
        <li>Giờ trả khách: 22:30 chiều</li>
      </ul>
      <p>Du thuyền King được đầu tư 3 triệu USD với nội thất hiện đại nhưng mang phong cách cổ điển châu Âu chia làm 3
        tầng. Tầng hầm dành cho thủy thủ đoàn, đầu bếp và nhân viên phục vụ. Hai tầng chính là nơi hội họp và ăn tối.
        Tầng trên cùng cho khách trải nghiệm mới ban ngày có thể là nơi tắm nắng và tận hưởng không gian yên ắng của
        Hạ Long, buổi tối có thể là sàn khiêu vũ, sân khấu ca nhạc hay thời trang. Hotline đặt
        vé: 1234567890</p>

      <h2>Thông tin đặt chỗ</h2>
      
  <table>
    <tr>
      <td><input class="info_input" type="text" placeholder="Lịch khởi hành" name="start" required></td>
      <td>
        <select name="option">
          <option>Tầng 1</option>
          <option>Tầng 2</option>
          <option>Tầng 3</option>
        </select>
      </td>
    </tr>
  </table>
  <br>
  <input class="info_input" type="text" placeholder="Họ tên" name="name" required>
  <input class="info_input" type="number" placeholder="Số điện thoại" name="phone" required>
  <br><br>
  <input class="info_input" type="number" placeholder="Số người đăng ký" name="people" required>
  <input class="info_input" type="text" value="Du Thuyền King" name="tau" readonly>
  <br><br>
  <input class="info_input" type="email" placeholder="Email" name="email" required>
  <input class="info_input" type="text" placeholder="Địa chỉ" name="address" required>
  <br><br>
  <input type="submit" name="submit" value="Đặt ngay">
  <button><a href="home page.php">Về Trang Chủ</a></button>
</form>
</body>
</html>
