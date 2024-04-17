<?php
  session_start()
?>

<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <title>KVM WATCH | Admin - Dashboard</title>
  <link
  rel="icon"
  type="image/x-icon"
  href="./asset/favicon/icondongho (2).png"
/>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/admin_style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
  <div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-alarm'></i>
      <span class="logo_name">KVM WATCH</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="#" class="active">
          <i class='bx bx-grid-alt'></i>
          <span class="links_name">Trang chủ</span>
        </a>
      </li>
      <li>
        <a href="admin_product.php">
          <i class='bx bx-box'></i>
          <span class="links_name">Sản phẩm</span>
        </a>
      </li>
      <li>
        <a href="admin_loaisanpham.php">
          <i class='bx bxl-product-hunt'></i>
          <span class="links_name">Loại sản phẩm</span>
        </a>
      </li>
      <li>
        <a href="admin_order_list.php">
          <i class='bx bx-list-ul'></i>
          <span class="links_name">Danh sách đơn hàng</span>
        </a>
      </li>
     
      <li>
        <a href="admin_user.php">
          <i class='bx bx-user'></i>
          <span class="links_name">Người dùng</span>
        </a>
      </li>
      <li class="log_out">
        <a href="login1.php">
          <i class='bx bx-log-out'></i>
          <span class="links_name">Đăng xuất</span>
        </a>
      </li>
    </ul>
  </div>
  <!--1-->
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Trang chủ</span>
      </div>
      <!---->
      <div class="profile-details">
        <img src="images/profile.jpg" alt="">
        <span class="admin_name"><?php echo $_SESSION['username'] ?></span>
        <i class='bx bx-chevron-down'></i>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Tổng đơn hàng</div>
            <div class="number">40,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Tăng so với hôm qua</span>
            </div>
          </div>
          <i class='bx bx-cart-alt cart'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Tổng doanh số</div>
            <div class="number">38,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Tăng so với hôm qua</span>
            </div>
          </div>
          <i class='bx bxs-cart-add cart two'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Tổng lợi nhuận</div>
            <div class="number">$12,876</div>
            <div class="indicator">
              <i class='bx bx-up-arrow-alt'></i>
              <span class="text">Tăng so với hôm qua</span>
            </div>
          </div>
          <i class='bx bx-cart cart three'></i>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Tổng lợi tức</div>
            <div class="number">-11,02%</div>
            <div class="indicator">
              <i class='bx bx-down-arrow-alt down'></i>
              <span class="text">Giảm so với hôm nay</span>
            </div>
          </div>
          <i class='bx bxs-cart-download cart four'></i>
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Đơn hàng gần đây</div>
          <div class="sales-details">
            <ul class="details">
              <li class="topic">Ngày</li>
              <li>02 - 12 - 2023</li>
              <li>02 - 12 - 2023</li>
              <li>02 - 12 - 2023</li>
              <li>02 - 12 - 2023</li>
              <li>02 - 12 - 2023</li>
              <li>02 - 12 - 2023</li>
              <li>02 - 12 - 2023</li>
              <li>02 - 12 - 2023</li>
              <li>02 - 12 - 2023</li>
            </ul>
            <ul class="details">
              <li class="topic">Khách hàng</li>
              <li><a href="#">Quang Minh</a></li>
              <li><a href="#">Minh Khang</a></li>
              <li><a href="#">Phúc Mạnh</a></li>
              <li><a href="#">Thúy Vy</a></li>
              <li><a href="#">Minh Thư</a></li>
              <li><a href="#">Duy Toàn</a></li>
              <li><a href="#">Thu Hường</a></li>
              <li><a href="#">Hoàng Anh</a></li>
              <li><a href="#">Anh Triết</a></li>
            </ul>
            <ul class="details">
              <li class="topic">Trạng thái</li>
              <li><a href="#">Đã giao hàng</a></li>
              <li><a href="#">Chờ thanh toán</a></li>
              <li><a href="#">Đã giao hàng</a></li>
              <li><a href="#">Đã giao hàng</a></li>
              <li><a href="#">Chờ thanh toán</a></li>
              <li><a href="#">Hoàn đơn hàng</a></li>
              <li><a href="#">Đã giao hàng</a></li>
              <li><a href="#">Đã giao hàng</a></li>
              <li><a href="#">Hoàn đơn hàng</a></li>
            </ul>
            <ul class="details">
              <li class="topic">Tổng thanh toán</li>
              <li><a href="#">2.300.000đ</a></li>
              <li><a href="#">2.300.000đ</a></li>
              <li><a href="#">2.300.000đ</a></li>
              <li><a href="#">2.300.000đ</a></li>
              <li><a href="#">2.300.000đ</a></li>
              <li><a href="#">2.300.000đ</a></li>
              <li><a href="#">2.300.000đ</a></li>
              <li><a href="#">2.300.000đ</a></li>
              <li><a href="#">2.300.000đ</a></li>
            </ul>
          </div>
          <div class="button">
            <a href="admin_order_list.php">Tất cả</a>
          </div>
        </div>
        <div class="top-sales box">
          <div class="title">Top sản phẩm bán chạy</div>
          <ul class="top-sales-details">
            <li>
              <a href="#">
                <img src="image_manh/MTP-1183E-7ADF-1-.webp" alt="">
                <span class="product">Casio MTP-1183E-7ADF </span>
              </a>
              <span class="price">18.000.000đ</span>
            </li>
            <li>
              <a href="#">
                <img src="image_manh/24_LTP-1308D-4AVDF-1.webp" alt="">
                <span class="product">Casio LTP-1308D-4AVDF </span>
              </a>
              <span class="price">12.000.000đ</span>
            </li>
            <li>
              <a href="#">
                <img src="image_manh/39_MTP-V001L-1BUDF-1-.webp" alt="">
                <span class="product">CASIO-MTP-V001L-1BUDF </span>
              </a>
              <span class="price">10.000.000đ</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function () {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
  </script>

</body>

</html>