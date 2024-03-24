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

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>Du thuyền Princess</title>
  <!-- Đường dẫn tới file CSS và JavaScript khác -->
  <link rel="stylesheet" href="./icon/fontawesome/css/all.min.css">
  <script src="libs/angular.min.js"></script>
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
      margin-top: 10px;
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
<body>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <div class="header">
    <h1>-- Du Thuyền Princess --</h1><br>
    <p class="header_p"><i class="icon fa-solid fa-location-dot"></i>Khu vực quanh cảng và thành phố Vũng Tàu</p>
  </div>
  <div class="main">

    <div class="menu">
      <div class="menu_img">
        <img
          src="https://tausaigon.com.vn/thumbs/400x300x1/upload/product/canh-ga-chien-tam-xot-ca-chua-mat-ong-xot-toi-nuong-mayo-8944.jpg">
      </div>
      <div class="menu_info">
        <input type="checkbox" name="menu" value="CHỌN MENU TRẺ EM - PLUTO KID (Từ 5-11 tuổi)">
        <h3>CHỌN MENU TRẺ EM - PLUTO KID (Từ 5-11 tuổi) - Du Thuyền Princess 5 sao</h3>
        <br><br>
        <h3>Giá: 700.000đ</h3>
        <br><br>
        <i class="icon fa-solid fa-utensils"></i>Cánh Gà Chiên tẩm xốt cà chua mật ong, Xốt tỏi nướng Mayo<br><br>
        <i class="icon fa-solid fa-utensils"></i>Súp gà măng tây cùng trứng cút và hương dầu mè<br><br>
        <i class="icon fa-solid fa-utensils"></i>Mì xào hải sản và rau củ<br><br>
        <i class="icon fa-solid fa-utensils"></i>Chọn 1 loại kem: Vani/Sô-cô-la/Dâu/Dừa
      </div>
    </div>
    <div class="menu">
      <div class="menu_img">
        <img
          src="https://tausaigon.com.vn/thumbs/400x300x1/upload/product/tom-su-dut-lo-sot-me-dung-cung-khoai-lang-nghien-min-toi-tay-baby-va-sot-chanh-day-huong-ngo-1083.jpg">
      </div>
      <div class="menu_info">
        <input type="checkbox" name="menu" value="CHỌN ASIAN SEAFOOD 4 MÓN">
        <h3>CHỌN ASIAN SEAFOOD 4 MÓN- Du Thuyền Princess 5 sao</h3>
        <br><br>
        <h3>Giá: 1.150.000đ</h3>
        <br><br>
        <i class="icon fa-solid fa-utensils"></i>Salad Tôm sú, cùng bạc hà, khoai lang nghiền và xốt nước mắm<br><br>
        <i class="icon fa-solid fa-utensils"></i>Súp Hải Sản Kèm Tôm Sú, Vẹm, Cá Hồi, Lá Chanh Thái và Các Loại
        Nấm<br><br>
        <i class="icon fa-solid fa-utensils"></i>Cá Hồi Na Uy áp chảo sốt “Teriyaki” dùng cùng Măng Tây, cải bó xôi và
        Cơm nghệ tây cao cấp<br><br>
        <i class="icon fa-solid fa-utensils"></i>Bánh lá dứa cùng thơm sấy<br><br>
        <i class="icon fa-solid fa-utensils"></i>Thức uống: Trà hoặc Café
      </div>
    </div>
    <div class="menu">
      <div class="menu_img">
        <img src="https://tausaigon.com.vn/thumbs/400x300x1/upload/product/than-bo-uc-thuong-hang-1-6-4660.jpg">
      </div>
      <div class="menu_info">
        <input type="checkbox" name="menu" value="CHỌN INTERNATIONAL 3 MÓN">
        <h3>CHỌN INTERNATIONAL 3 MÓN - Du Thuyền Princess 5 sao</h3>
        <br><br>
        <h3>Giá: 850.000đ</h3>
        <br><br>
        <i class="icon fa-solid fa-utensils"></i>Súp Gà chua cay cùng Nấm, Lá chanh và Ca Chua bi<br><br>
        <i class="icon fa-solid fa-utensils"></i> Thăn Nội Bò Úc thượng hạng dùng cùng Rau củ nướng và Bánh bắp phô mai
        đút lò, xốt tiêu<br><br>
        <i class="icon fa-solid fa-utensils"></i> Thạch trà xanh hạnh nhân cùng trái vải<br><br>
        <i class="icon fa-solid fa-utensils"></i> Thức uống: Trà hoặc Café
      </div>
    </div>
    <div class="menu">
      <div class="menu_img">
        <img
          src="https://tausaigon.com.vn/thumbs/400x300x1/upload/product/goi-rau-tien-vua-dung-voi-bo-uc-nuong-va-nuoc-mam-chua-ngot-5439.jpg">
      </div>
      <div class="menu_info">
        <input type="checkbox" name="menu" value="CHỌN VIETNAMESE 3 MÓN">
        <h3>CHỌN VIETNAMESE 3 MÓN - Du Thuyền Princess 5 sao</h3>
        <br><br>
        <h3>Giá: 850.000đ</h3>
        <br><br>
        <i class="icon fa-solid fa-utensils"></i>Gỏi Rau Tiến Vua dùng với Bò Úc Nướng và nước mắm chua ngọt<br><br>
        <i class="icon fa-solid fa-utensils"></i>Gà muối Ớt nướng Ống Tre, phục vụ cùng Cơm Hạt Sen và Rau Củ
        Xào<br><br>
        <i class="icon fa-solid fa-utensils"></i>Tàu Hũ đường thốt nốt, gừng và Trân châu<br><br>
        <i class="icon fa-solid fa-utensils"></i>Thức uống: Trà hoặc Café
      </div>
    </div>
    <div class="menu">
      <div class="menu_img">
        <img
          src="https://tausaigon.com.vn/thumbs/400x300x1/upload/product/sup-tam-to-phuc-loc-tho-thit-cua-ga-va-tom-4384.jpg">
      </div>
      <div class="menu_info">
        <input type="checkbox" name="menu" value="CHỌN FUSION 3 MÓN">
        <h3>CHỌN FUSION 3 MÓN - Du Thuyền Princess 5 sao</h3>
        <br><br>
        <h3>Giá: 850.000đ</h3>
        <br><br>
        <i class="icon fa-solid fa-utensils"></i>Súp Tam Tơ Phúc Lộc Thọ ( thịt cua, gà và tôm)<br><br>
        <i class="icon fa-solid fa-utensils"></i>Cá Hồi Na Uy áp chảo sốt “Teriyaki” dùng cùng Măng Tây, cải bó xôi và
        Cơm nghệ tây cao cấp<br><br>
        <i class="icon fa-solid fa-utensils"></i>Bánh Phô Mai phúc bồn tử và quế tây<br><br>
        <i class="icon fa-solid fa-utensils"></i>Thức uống: Trà hoặc Café
      </div>
    </div>
    <div class="menu">
      <div class="menu_img">
        <img
          src="https://tausaigon.com.vn/thumbs/400x300x1/upload/product/goi-xoai-buoi-hong-cung-so-diep-nhat-tom-tuoi-va-rau-thom-9331.jpg">
      </div>
      <div class="menu_info">
        <input type="checkbox" name="menu" value="CHỌN VIETNAMESE 4 MÓN">
        <h3>CHỌN VIETNAMESE 4 MÓN - Du Thuyền Princess 5 sao</h3>
        <br><br>
        <h3>Giá: 1.150.000đ</h3>
        <br><br>
        <i class="icon fa-solid fa-utensils"></i>Gỏi Xoài & Bưởi Hồng cùng Sò Điệp Nhật, Tôm tươi và Rau Thơm<br><br>
        <i class="icon fa-solid fa-utensils"></i> Súp sườn heo nấm củ sen, hạt sen và nấm hương<br><br>
        <i class="icon fa-solid fa-utensils"></i> Cá bống mú nướng sốt đặc biệt dùng kèm rau củ ngâm chua, cơm hạt
        sen<br><br>
        <i class="icon fa-solid fa-utensils"></i>Chè Hạt Sen Long nhãn<br><br>
        <i class="icon fa-solid fa-utensils"></i>Thức uống: Trà hoặc Café
      </div>
    </div>
    <div class="menu">
      <div class="menu_img">
        <img
          src="https://tausaigon.com.vn/thumbs/400x300x1/upload/product/pate-dui-vit-dung-banh-mi-grissini-me-banh-quy-hat-bi-cung-xot-nam-viet-quat-8011.jpg">
      </div>
      <div class="menu_info">
        <input type="checkbox" name="menu" value="CHỌN FUSION 4 MÓN">
        <h3>CHỌN FUSION 4 MÓN - Du Thuyền Princess 5 sao</h3>
        <br><br>
        <h3>Giá: 1.150.000đ</h3>
        <br><br>
        <i class="icon fa-solid fa-utensils"></i>Pate đùi Vịt dùng bánh mì Grissini mè, Bánh quy hạt bí cùng xốt Nam
        việt quất<br><br>
        <i class="icon fa-solid fa-utensils"></i>Súp Kem Khoai lang phô mai. Khoai lang nghiền nấu cùng hành tây, kem
        béo và phô mai Cheddar<br><br>
        <i class="icon fa-solid fa-utensils"></i>Thăn nội Bò thượng hạng, dùng cùng tôm càng sông,bánh bắp phô mai đút
        lò và xốt nấm<br><br>
        <i class="icon fa-solid fa-utensils"></i>Bánh Panna Cotta sữa chua Hy Lạp kèm xốt chanh dây<br><br>
        <i class="icon fa-solid fa-utensils"></i>Thức uống: Trà hoặc Café
      </div>
    </div>
    <div class="menu">
      <div class="menu_img">
        <img
          src="https://tausaigon.com.vn/thumbs/400x300x1/upload/product/ca-hoi-na-uy-ap-chao-xot-teriyaki-dung-cung-mang-tay-cai-bo-xoi-va-com-nghe-tay-cao-cap-4887.jpg">
      </div>
      <div class="menu_info">
        <input type="checkbox" name="menu" value="CHỌN ASIAN SEAFOOD 5 MÓN">
        <h3>CHỌN ASIAN SEAFOOD 5 MÓN - Du Thuyền Princess 5 sao</h3>
        <br><br>
        <h3>Giá: 1.650.000đ</h3>
        <br><br>
        <i class="icon fa-solid fa-utensils"></i>Salad Tôm sú, cùng bạc hà, khoai lang nghiền và xốt nước mắm<br><br>
        <i class="icon fa-solid fa-utensils"></i>Sò Điệp Nhật áp chảo cùng xốt nước tương mật ong, Mè rang và Chanh
        confit<br><br>
        <i class="icon fa-solid fa-utensils"></i>Súp Hải Sản Kèm Tôm Sú, Vẹm, Cá Hồi, Lá Chanh Thái và Các Loại
        Nấm<br><br>
        <i class="icon fa-solid fa-utensils"></i>Cá Hồi Na Uy áp chảo xốt “Teriyaki” dùng cùng Măng Tây, cải bó xôi và
        Cơm nghệ tây cao cấp<br><br>
        <i class="icon fa-solid fa-utensils"></i>Thức uống: Trà hoặc Café
      </div>
    </div>
    <div class="menu">
      <div class="menu_img">
        <img
          src="https://tausaigon.com.vn/thumbs/400x300x1/upload/product/goi-sua-vit-quay-kieu-phap-cung-xoai-xanh-va-sot-xo-9132.jpg">
      </div>
      <div class="menu_info">
        <input type="checkbox" name="menu" value="CHỌN CHEF'S CHOICE BIRTHDAY">
        <h3>CHỌN CHEF'S CHOICE BIRTHDAY - Du Thuyền Princess 5 sao</h3>
        <br><br>
        <h3>Giá: 1.650.000đ</h3>
        <br><br>
        <i class="icon fa-solid fa-utensils"></i>Gỏi Sứa Vịt Quay Kiểu Pháp cùng xoài xanh và sốt X.O<br><br>
        <i class="icon fa-solid fa-utensils"></i>Sò điệp nhật áp chảo cùng xốt nước tương mật ong, Mè rang và Chanh
        confit<br><br>
        <i class="icon fa-solid fa-utensils"></i>Súp kem khoai lang phô mai. Khoai lang nghiền nấu cùng hành tây, kem
        béo và phô mai cheddar<br><br>
        <i class="icon fa-solid fa-utensils"></i>Thăn nội Bò Úc thượng hạng, dùng cùng tôm càng sông, bánh bắp phô mai
        đút lò và xốt nấm<br><br>
        <i class="icon fa-solid fa-utensils"></i>Thức uống: Trà và Cà phê
      </div>
    </div>
    <div class="menu">
      <div class="menu_img">
        <img
          src="https://tausaigon.com.vn/thumbs/400x300x1/upload/product/sup-kem-khoai-lang-pho-mai-khoai-lang-nghien-nau-cung-hanh-tay-kem-beo-va-pho-mai-cheddar-7468.jpg">
      </div>
      <div class="menu_info">
        <input type="checkbox" name="menu" value="CHỌN FUSION MENU 5 MÓN ">
        <h3>CHỌN FUSION MENU 5 MÓN - Du Thuyền Princess 5 sao</h3>
        <br><br>
        <h3>Giá: 1.650.000đ</h3>
        <br><br>
        <i class="icon fa-solid fa-utensils"></i>Pate Vịt cùng bánh mì Grissini mè, bánh quy hạt bí cùng xốt Nam việt
        quất<br><br>
        <i class="icon fa-solid fa-utensils"></i>Sò Điệp Nhật áp chảo cùng đậu Hà Lan nghiền, xốt Romesco<br><br>
        <i class="icon fa-solid fa-utensils"></i>Súp kem khoai lang phô mai. Khoai lang nghiền nấu cùng hành tây, kem
        béo và phô mai cheddarKe<br><br>
        <i class="icon fa-solid fa-utensils"></i>Thăn nội Bò Úc thượng hạng, dùng cùng tôm càng sông, bánh bắp phô mai
        đút lò và xốt nấm<br><br>
        <i class="icon fa-solid fa-utensils"></i>Thức uống: Trà hoặc Café
      </div>
    </div>
    <h2>Thông tin du thuyền</h2>
    <div class="yacht_info">
      <div class="yacht_info_flex">
        <i class="icon fa-solid fa-users"></i>Sức chứa:
        <p><b>1000</b></p>
      </div>
      <div class="yacht_info_flex">
        <i class="icon fa-solid fa-ship"></i>Loại thuyền:
        <p><b>Nhà Hàng Du Thuyền</b></p>
      </div>
      <div class="yacht_info_flex">
        <i class="icon fa-solid fa-calendar-days"></i>Lộ trình:
        <p><b>Các địa điểm quanh cảng và thành phố Vũng Tàu</b>
        </p>
      </div>
    </div>
    <div class="text" style="text-align: justify;">
      <h2>Thông tin đặt dịch vụ</h2>
      <ul>
        <li>Giờ đón khách: 6:30 chiều</li>
        <li>Giờ khởi hành: 7:30 chiều</li>
        <li>Giờ trả khách: 9:30 chiều</li>
      </ul>
      <p>Princess được đầu tư 3 triệu USD với nội thất hiện đại nhưng mang phong cách cổ điển châu Âu chia làm 3
        tầng. Tầng hầm dành cho thủy thủ đoàn, đầu bếp và nhân viên phục vụ. Hai tầng chính là nơi hội họp và ăn tối.
        Tầng trên cùng cho khách trải nghiệm mới ban ngày có thể là nơi tắm nắng và tận hưởng không gian yên ắng của Vũng Tàu, buổi tối có thể là sàn khiêu vũ, sân khấu ca nhạc hay thời trang. Hotline đặt
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
  <input class="info_input" type="text" value="Du Thuyền Princess" name="tau" readonly>
  <br><br>
  <input class="info_input" type="email" placeholder="Email" name="email" required>
  <input class="info_input" type="text" placeholder="Địa chỉ" name="address" required>
  <br><br>
  <input type="submit" name="submit" value="Đặt ngay">
  <button><a href="home page.php">Về Trang Chủ</a></button>
  </form>

</body>
</html>
