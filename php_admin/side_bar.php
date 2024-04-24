<!-- check login -->
<?php
  session_start();
  if (!isset($_SESSION['login_admin'])) {
    header('location: ./login1.php');
  }
?>


<!-- side bar -->
<div class="sidebar">
    <div class="logo-details">
      <i class='bx bx-alarm'></i>
      <span class="logo_name">KVM WATCH</span>
    </div>
    <ul class="nav-links">
      <li>
        <a href="admin_index.php">
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
        <a href="php_admin/logout.php">
          <i class='bx bx-log-out'></i>
          <span class="links_name">Đăng xuất</span>
        </a>
      </li>
    </ul>
  </div>
