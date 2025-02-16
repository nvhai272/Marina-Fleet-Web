<link rel='stylesheet' type='text/css' media='screen' href='home.css'>
<?php
echo '
  <div id="map">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.7724991409355!2d105.87748417594672!3d21.001754680640925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac005bc3ca7d%3A0x300819b092a5e8b8!2sHarbor%20Hanoi!5e0!3m2!1sen!2s!4v1687830240630!5m2!1sen!2s"
      width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
  <div id="wap_footer clear">
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
          <img alt="VTC Academy | Hình thức thanh toán"
            src="https://vtc.edu.vn/wp-content/uploads/2020/10/thanh-toan-vtc-academy-1.jpg" width=350px;>
        </p>
      </div>
      <div class="lienhe_f">
        <h3 class="title_f">Để lại thông tin tư vấn</h3>
        <form class="" method="post">
          <div class="input-contact">
            <input type="text" class="form-control" name="name" placeholder="Họ tên" required="">
          </div>
          <div class="input-contact">
            <input type="number" class="form-control" id="dienthoai" name="phone" placeholder="Số điện thoại"
              required="">

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
      <p style="text-align: center;background-color:black;color:#fdfcfc;padding:15px;margin:0px;"
       class="ds">@Quyền sở hữu thuộc về Hạm Đội Marina  
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
 ' ?>
 <?php
$c = mysqli_connect('localhost', 'root', '', 'marina_fleet');
  if (isset($_POST['submit'])) {
  $name = $_POST["name"];
  $phone = $_POST["phone"];
  $address = $_POST["address"];
  $mail = $_POST["mail"];
  $content = $_POST["content"];
  $sql = "INSERT INTO info_contact (name,phone,address,mail,content) 
    VALUES ('$name','$phone','$address','$mail','$content')";
  mysqli_query($c, $sql);
  function function_alert($message) {
    // Display the alert box 
    echo "<script>alert('$message');</script>";
}
// Function call
function_alert("Gửi thông tin thành công. Chúng tôi sẽ sớm liên hệ với bạn!");
}
$c->close();
exit();
?>