<link rel='stylesheet' type='text/css' media='screen' href='home page.css'>
<?php
echo '
<div class="nav-item"></div>
  <div class="navbar" style="background:url('."'img/agt.jpg'".');background-repeat:no-repeat; background-size:cover;;width:100%;">
    <div class="nav-item"style="padding-left:200px">
      <i class="icon-facebook fa-brands fa-square-facebook"></i>
      <i class="icon-google fa-brands fa-square-google-plus"></i>
      <i class="icon-twitter fa-brands fa-square-twitter"></i>
      <i class="icon-pinterest fa-brands fa-square-pinterest"></i>
    </div>
    <div class="nav-item" ></div>
    <div class="nav-item" style="padding-left:50px">
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
    <img class="flag" src="img/mi.png" alt="English" onclick="changeLanguage("en")" style="padding-left:2px">
        <img class="flag" src="img/Co-Vietnam.webp" alt="Tiếng Việt" onclick="changeLanguage("vn")">
        <br><br>
      <div class="login">
        <span class="login"><i class="fas fa-sign-in-alt"></i>
        <a href="login.php">Login Admin</a></a></span>
      </div>
    </div>
  </div>

  <ul id="menu" style="margin:0%;padding:0%">
    <li class="dropdown home"><a href="home page.php" style="background-color: rgb(32, 153, 247);color:rgb(230, 232, 238)"><i class="fas fa-home"></i>Home</a></li>
    <li class="dropdown"><a href=""><i class="fas fa-chevron-down"></i>Các dịch vụ</a>
      <div class="dropdown-content">
        <a href="#dattiec">Đặt tiệc - Ăn tối</a>
        <a href="rent yatch.php">Tàu - Du thuyền</a>
        <a href="chualam.php">Tour du lịch</a>
      </div>
    </li>
    <li class="dropdown"><a href="#introduce">Giới thiệu Marina Fleet</a>
    <li class="dropdown"><a href="#news">Tin tức</a></li>
    <li class="dropdown"><a href="assess_create.php">Đánh giá dịch vụ</a></li>
    <li class="dropdown"><a href="#wap_footer clear">Liên hệ và tư vấn</a></li>
    <li class="dropdown"><a href="path/to/your/file.pdf" download>
        <i class="fas fa-download"> </i>Download PDF
      </a></li>
  </ul>
  '?>