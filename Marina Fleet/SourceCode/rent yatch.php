<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="rentYatch.css">
  <link rel="stylesheet" href="home page.css">
  <title>Dịch vụ thuê tàu - du thuyền</title>
</head>

<body>
  <div class="nav-item"></div>
  <div class="navbar" style="background:url('img/agt.jpg');background-repeat:no-repeat; background-size:cover;width:100%;">
    <div class="nav-item" style="padding-left:200px">
      <i class="icon-facebook fa-brands fa-square-facebook"></i>
      <i class="icon-google fa-brands fa-square-google-plus"></i>
      <i class="icon-twitter fa-brands fa-square-twitter"></i>
      <i class="icon-pinterest fa-brands fa-square-pinterest"></i>
    </div>
    <div class="nav-item"></div>
    <div class="nav-item" style="padding-left:100px">
      <img class="logo" src="img/Anchor Beach Logo.png" alt="Logo">
    </div>
    <div class="nav-item" style="padding-left:100px">
      <div class="search-bar">
        <input type="text" placeholder="Tìm kiếm...">
        <span class="search-icon"><i class="fas fa-search"></i></span>
      </div>
    </div>
    <div class="nav-item"></div>
    <div class="nav-item" style="display:inline-block">
      <img class="flag" src="img/mi.png" alt="English" onclick="changeLanguage(en)" style="padding-left:2px">
      <img class="flag" src="img/Co-Vietnam.webp" alt="Tiếng Việt" onclick="changeLanguage(vn)">
      <br><br>
      <div class="login">
        <span class="login"><i class="fas fa-sign-in-alt"></i>
          <a href="login.php">Login Admin</a></a></span>
      </div>
    </div>
  </div>

  <ul id="menu" style="margin:0;padding:0">
    <li class="dropdown home"><a href="index.php" style="background-color: rgb(32, 153, 247);color:rgb(230, 232, 238)"><i class="fas fa-home"></i>Home</a></li>
    <li class="dropdown"><a href="#"><i class="fas fa-chevron-down"></i>Các dịch vụ</a>
      <div class="dropdown-content">
        <a href="index.php">Đặt tiệc - Ăn tối</a>
        <a href="Rent Yatch.php">Tàu - Du thuyền</a>
        <a href="chualam.php">Tour du lịch</a>
      </div>
    </li>
    <li class="dropdown"><a href="#1">Thuê Du Thuyền</a>
    <li class="dropdown"><a href="#2">Thuê Tàu</a></li>
    <li class="dropdown"><a href="assess_create.php">Đánh giá dịch vụ</a></li>
    <li class="dropdown"><a href="#wap_footer clear">Liên hệ và tư vấn</a></li>
    <li class="dropdown"><a href="path/to/your/file.pdf" download>
        <i class="fas fa-download"> </i>Download PDF
      </a></li>
  </ul>

  <h2 class="main" id="1">Thuê du thuyền</h2>

  <div class="wap_item">
    <div class="item">
      <span class="phantram">-6%</span>
      <div class="img_sp zoom_hinh"><a href="chualam.php" title="Du Thuyền Yacht 12"><img onerror="this.src='thumbs/400x350x1/assets/images/noimage.png'" src="img/duthuyen.jpg" alt="Du Thuyền Yacht 12"></a>
        <p>
          <span><i class="fas fa-clock"></i> Hợp đồng</span>
          <span><i class="fas fa-map-marker-alt"></i> Việt Nam</span>
        </p>
      </div>

      <div class="mota">
        <h3 class="name_sp catchuoi2"><a href="chualam.php" title="Du Thuyền Yacht 12">Du Thuyền Yacht
            12</a></h3>
        <p class="gia_sp">
          <span class="giamoi">27.500.000đ</span>
          <span class="gia giacu">28.000.000đ</span>
        </p>
      </div>
      <ul>
        <li><i class="fas fa-calendar-alt"></i><span> Lịch khởi hành: </span>Theo yêu cầu</li>
        <li><i class="fas fa-map-marker-alt"></i><span> Lộ trình: </span>Thiết kế theo yêu cầu</li>
        <li><i class="fas fa-map-marker-alt"></i><span> Địa điểm: </span>Đà Nẵng</li>
      </ul>
      <p class="thaotac">
        <a href="chualam.php"> Đặt lịch ngay<i class="fas fa-heart"></i></a>
      </p>
    </div>
    <div class="item">
      <span class="phantram">-5%</span>
      <div class="img_sp zoom_hinh"><a href="chualam.php" title="Du Thuyền Yacht 11"><img onerror="this.src='thumbs/400x350x1/assets/images/noimage.png'" src="img/chien.jpg" alt="Du Thuyền Yacht 11"></a>
        <p>
          <span><i class="fas fa-clock"></i> Hợp đồng</span>
          <span><i class="fas fa-map-marker-alt"></i> Việt Nam</span>
        </p>
      </div>

      <div class="mota">
        <h3 class="name_sp catchuoi2"><a href="chualam.php" title="Du Thuyền Yacht 11">Du Thuyền Yacht
            11</a></h3>
        <p class="gia_sp">
          <span class="giamoi">24.750.000đ</span>
          <span class="gia giacu">25.000.000đ</span>
        </p>
      </div>
      <ul>
        <li><i class="fas fa-calendar-alt"></i><span> Lịch khởi hành: </span>Theo yêu cầu</li>
        <li><i class="fas fa-map-marker-alt"></i><span> Lộ trình: </span>Thiết kế theo yêu cầu</li>
        <li><i class="fas fa-map-marker-alt"></i><span> Địa điểm: </span>Nha Trang</li>
      </ul>
      <p class="thaotac">
        <a href="chualam.php">Đặt lịch ngay<i class="fas fa-heart"></i></a>
      </p>
    </div>
    
    <div class="item">
      <span class="phantram">-2%</span>
      <div class="img_sp zoom_hinh"><a href="chualam.php" title="Du Thuyền Geleon 640 FLy"><img onerror="this.src='thumbs/400x350x1/assets/images/noimage.png'" src="img/galeon640.jpg" alt="Du Thuyền Geleon 640 FLy"></a>
        <p>
          <span><i class="fas fa-clock"></i> Hợp đồng</span>
          <span><i class="fas fa-map-marker-alt"></i> Việt Nam</span>
        </p>
      </div>

      <div class="mota">
        <h3 class="name_sp catchuoi2"><a href="chualam.php" title="Du Thuyền Geleon 640 FLy">Du
            Thuyền Geleon 640 FLy</a></h3>
        <p class="gia_sp">
          <span class="giamoi">26.000.000đ</span>
          <span class="gia giacu">26.500.000đ</span>
        </p>
      </div>
      <ul>
        <li><i class="fas fa-calendar-alt"></i><span> Lịch khởi hành: </span>Theo yêu cầu</li>
        <li><i class="fas fa-map-marker-alt"></i><span> Lộ trình: </span>Thiết kế theo yêu cầu</li>
        <li><i class="fas fa-map-marker-alt"></i><span> Địa điểm: </span>Hạ Long</li>
      </ul>
      <p class="thaotac">
        <a href="chualam.php">Đặt lịch ngay<i class="fas fa-heart"></i></a>
      </p>
    </div>
    <div class="item">
      <span class="phantram">-1%</span>
      <div class="img_sp zoom_hinh"><a href="chualam.php" title="Du Thuyền Galeon 420 FLy"><img onerror="this.src='thumbs/400x350x1/assets/images/noimage.png'" src="img/galeon420.jpg" alt="Du Thuyền Galeon 420 FLy"></a>
        <p>
          <span><i class="fas fa-clock"></i> Theo chính sách của tàu</span>
        </p>
      </div>

      <div class="mota">
        <h3 class="name_sp catchuoi2"><a href="chualam.php" title="Du Thuyền Galeon 420 FLy">Du
            Thuyền Galeon 420 FLy</a></h3>
        <p class="gia_sp">
          <span class="giamoi">13.800.000đ</span>
          <span class="gia giacu">14.000.000đ</span>
        </p>
      </div>
      <ul>
        <li><i class="fas fa-calendar-alt"></i><span> Lịch khởi hành: </span>Theo yêu cầu</li>
        <li><i class="fas fa-map-marker-alt"></i><span> Lộ trình: </span>Thiết kế theo yêu cầu</li>
        <li><i class="fas fa-map-marker-alt"></i><span> Địa điểm: </span>Nha Trang</li>
      </ul>
      <p class="thaotac">
        <a href="chualam.php">Đặt lịch ngay<i class="fas fa-heart"></i></a>
      </p>
    </div>
  </div>

  <h2 class="main" id="2">Thuê tàu</h2>

  <div class="wap_item">
    <div class="item">
      <span class="phantram">-5%</span>
      <div class="img_sp zoom_hinh"><a href="chualam.php" title="Tàu câu"><img onerror="this.src='thumbs/400x350x1/assets/images/noimage.png'" src="img/taucau.jpg" alt=""></a>
        <p>
          <span><i class="fas fa-clock"></i> Hợp đồng</span>
          <span><i class="fas fa-map-marker-alt"></i> Việt Nam</span>
        </p>
      </div>

      <div class="mota">
        <h3 class="name_sp catchuoi2"><a href="chualam.php" title="Tàu câu">Tàu du lịch biển</a></h3>
        <p class="gia_sp">
          <span class="giamoi">8.500.000đ</span>
          <span class="gia giacu">9.000.000đ</span>
        </p>
      </div>
      <ul>
        <li><i class="fas fa-calendar-alt"></i><span> Lịch khởi hành: </span>Theo yêu cầu</li>
        <li><i class="fas fa-map-marker-alt"></i><span> Lộ trình: </span>Thiết kế theo yêu cầu</li>
        <li><i class="fas fa-map-marker-alt"></i><span> Địa điểm: </span>Nha Trang</li>
      </ul>
      <p class="thaotac">
        <a href="chualam.php"> Đặt lịch ngay<i class="fas fa-heart"></i></a>
      </p>
    </div>
    <div class="item">
      <span class="phantram">-25%</span>
      <div class="img_sp zoom_hinh"><a href="chualam.php" title="Tàu Đi Biển"><img onerror="this.src='thumbs/400x350x1/assets/images/noimage.png'" src="img/tauthue.jpg" alt="Tàu Đi Biển"></a>
        <p>
          <span><i class="fas fa-clock"></i> Hợp đồng</span>
          <span><i class="fas fa-map-marker-alt"></i> Việt Nam</span>
        </p>
      </div>

      <div class="mota">
        <h3 class="name_sp catchuoi2"><a href="chualam.php">Tàu Đi Biển</a></h3>
        <p class="gia_sp">
          <span class="giamoi">11.750.000đ</span>
          <span class="gia giacu">15.000.000đ</span>
        </p>
      </div>
      <ul>
        <li><i class="fas fa-calendar-alt"></i><span> Lịch khởi hành: </span>Theo yêu cầu</li>
        <li><i class="fas fa-map-marker-alt"></i><span> Lộ trình: </span>Thiết kế theo yêu cầu</li>
        <li><i class="fas fa-map-marker-alt"></i><span> Địa điểm: </span>Hạ Long</li>
      </ul>
      <p class="thaotac">
        <a href="chualam.php">Đặt lịch ngay<i class="fas fa-heart"></i></a>
      </p>
    </div>
    <div class="item">
      <span class="phantram">-9%</span>
      <div class="img_sp zoom_hinh"><a href="chualam.php"><img onerror="this.src='thumbs/400x350x1/assets/images/noimage.png'" src="img/haha.jpg" alt="Tàu Cano"></a>
        <p>
          <span><i class="fas fa-clock"></i> Hợp đồng</span>
          <span><i class="fas fa-map-marker-alt"></i> Việt Nam</span>
        </p>
      </div>

      <div class="mota">
        <h3 class="name_sp catchuoi2"><a href="chualam.php" title="Tàu Cano">Tàu Cano</a></h3>
        <p class="gia_sp">
          <span class="giamoi">9.000.000đ</span>
          <span class="gia giacu">10.000.000đ</span>
        </p>
      </div>
      <ul>
        <li><i class="fas fa-calendar-alt"></i><span> Lịch khởi hành: </span>Theo yêu cầu</li>
        <li><i class="fas fa-map-marker-alt"></i><span> Lộ trình: </span>Thiết kế theo yêu cầu</li>
        <li><i class="fas fa-map-marker-alt"></i><span> Địa điểm: </span>Đà Nẵng</li>
      </ul>
      <p class="thaotac">
        <a href="chualam.php"> Đặt lịch ngay<i class="fas fa-heart"></i></a>
      </p>
    </div>
    <div class="item">
      <span class="phantram">-20%</span>
      <div class="img_sp zoom_hinh"><a href="chualam.php" title="Tàu Dragon FLy"><img onerror="this.src='thumbs/400x350x1/assets/images/noimage.png'" src="img/yatch11.jpg" alt="Tàu Dragon Fly"></a>
        <p>
          <span><i class="fas fa-clock"></i> Hợp đồng</span>
          <span><i class="fas fa-map-marker-alt"></i> Việt Nam</span>
        </p>
      </div>

      <div class="mota">
        <h3 class="name_sp catchuoi2"><a href="chualam.php" title="Tàu Dragon FLy">Tàu Dragon FLy</a></h3>
        <p class="gia_sp">
          <span class="giamoi">8.000.000đ</span>
          <span class="gia giacu">10.500.000đ</span>
        </p>
      </div>
      <ul>
        <li><i class="fas fa-calendar-alt"></i><span> Lịch khởi hành: </span>Theo yêu cầu</li>
        <li><i class="fas fa-map-marker-alt"></i><span> Lộ trình: </span>Thiết kế theo yêu cầu</li>
        <li><i class="fas fa-map-marker-alt"></i><span> Địa điểm: </span>Vũng Tàu</li>
      </ul>
      <p class="thaotac">
        <a href="chualam.php">Đặt lịch ngay<i class="fas fa-heart"></i></a>
      </p>
    </div>  
  </div>
  <hr>
  <div id="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.7724991409355!2d105.87748417594672!3d21.001754680640925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac005bc3ca7d%3A0x300819b092a5e8b8!2sHarbor%20Hanoi!5e0!3m2!1sen!2s!4v1687830240630!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div id="wap_footer clear" style="width:100%">
    <div class="footer main_fix">

      <div class="item_f">
        <h3 class="title_f">Chúng tôi cung cấp dịch vụ</h3>
        <ul>
          <li><a class="dvu" style="text-decoration: none;" href="">Tổ Chức Đặt Tiệc</a></li>
          <li><a class="dvu" style="text-decoration: none;" href="">Ăn Tối Trên Du Thuyền</a></li>
          <li><a class="dvu" style="text-decoration: none;" href="">Cho Thuê Du Thuyền - Tàu</a></li>
          <li><a class="dvu" style="text-decoration: none;" href="">Tổ Chức Tour Du Lịch</a></li>
        </ul>
      </div>
      <div class="main_f">
        <h3 class="title_f">Liên hệ với chúng tôi</h3>
        <p>Hạm Đội Marina</p>
        <p>Địa Chỉ Văn Phòng: Harbor Hà Nội</p>
        <p>Hotline: 123 456 7890</p>
        <p>Email: marina_fleet@gmail.com.vn</p>
        <p>Thời Gian Hoạt Động: Từ Thứ 2 đến Chủ Nhật Hằng Tuần</p>
        <p>Giờ mở cửa: 9h Hằng Ngày</p>
        <p>Giờ Đóng Cửa: 23h00 Hằng Ngày</p>
        <p>
          <img alt="VTC Academy | Hình thức thanh toán" src="https://vtc.edu.vn/wp-content/uploads/2020/10/thanh-toan-vtc-academy-1.jpg" width=350px;>
        </p>
      </div>
      <div class="lienhe_f">
        <h3 class="title_f">Để lại thông tin tư vấn</h3>
        <form class="" method="post">
          <div class="input-contact">
            <input type="text" class="form-control" name="name" placeholder="Họ tên" required="">
          </div>
          <div class="input-contact">
            <input type="number" class="form-control" id="dienthoai" name="phone" placeholder="Số điện thoại" required="">

          </div>
          <div class="input-contact">
            <input type="text" class="form-control" id="diachi" name="address" placeholder="Địa chỉ" required="">

          </div>
          <div class="input-contact">
            <input type="email" class="form-control" id="email" name="mail" placeholder="Email" required="">

          </div>
          <div class="input-contact">
            <textarea class="form-control" name="content" placeholder="Nội dung" required=""></textarea>
          </div>
          <input type="submit" class="sub" value="Gửi" name="submit">
        </form>
      </div>
    </div>
  </div>
  <div class="wap_copy clear">
    <div class="copy main_fix">
      <p style="text-align: center;background-color:black;color:#fdfcfc;padding:15px;margin:0px;" class="ds">@Quyền sở hữu thuộc về Hạm Đội Marina
      </p>
    </div>
  </div>
  <div class="ad-container">
    <div class="ad">
      <a href=""><img src="img/qc4.jpg" alt="Quang cao"></a>
      <button class="close-button">X</button>
    </div>
    <div class="ad">
      <a href=""><img src="img/qc3.jpg" alt="Quang cao"></a>
      <button class="close-button">X</button>
    </div>
  </div>

  <script>
    setTimeout(function() {
      var adContainer = document.querySelector(".ad-container");
      adContainer.style.display = "block";
    }, 3000);

    var closeButtons = document.getElementsByClassName("close-button");
    for (var i = 0; i < closeButtons.length; i++) {
      closeButtons[i].addEventListener("click", function() {
        var ad = this.parentNode;
        ad.style.display = "none";
      });
    }
  </script>
</body>

</html>
<?php
  $c = mysqli_connect('sql205.infinityfree.com', 'if0_37764859', '4rnvkcAX2q7P', 'if0_37764859_XXX');
  if (isset($_POST['submit'])) {
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $address = $_POST["address"];
  $mail = $_POST["mail"];
  $content = $_POST["content"];
  $sql = "INSERT INTO info_contact (name,phone,address,mail,content) 
        VALUES ('$name','$phone','$address','$mail','$content')";
  mysqli_query($c, $sql);
  function function_alert($message)
  {
    // Display the alert box 
    echo "<script>alert('$message');</script>";
  }
  // Function call
  function_alert("Gửi thông tin thành công. Chúng tôi sẽ sớm liên hệ với bạn!");
}
$c->close();
exit();
?>