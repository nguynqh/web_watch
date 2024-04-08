//tetsaduiasjhvnaklcalkcs
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>BKMT WATCH | Admin - Order_detail</title>
    <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.min.css" />
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/admin_style.css" />
  </head>

  <body>
    <div class="sidebar">
      <div class="logo-details">
        <i class='bx bx-alarm'></i>
        <span class="logo_name">KVM WATCH</span>
      </div>
      <ul class="nav-links">
        <li>
          <a href="admin_index.php" >
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
          <a href="#" class="active">
            <i class='bx bx-list-ul'></i>
            <span class="links_name">Danh sách đơn hàng</span>
          </a>
        </li>
        <li>
          <a href="admin_statistical.php">
            <i class='bx bx-pie-chart-alt-2'></i>
            <span class="links_name">Thống kê</span>
          </a>
        </li>
        <li>
          <a href="admin_user.php">
            <i class='bx bx-user'></i>
            <span class="links_name">Người dùng</span>
          </a>
        </li>
        <li class="log_out">
          <a href="index.php">
            <i class='bx bx-log-out'></i>
            <span class="links_name">Đăng xuất</span>
          </a>
        </li>
      </ul>
    </div>
    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">Chi tiết đơn hàng</span>
        </div>
        <div class="profile-details">
          <img src="images/profile.jpg" alt="" />
          <span class="admin_name">Khang</span>
          <i class="bx bx-chevron-down"></i>
        </div>
      </nav>

      <div class="home-content order-detail">
        <div class="header">
          <div class="nav">
            <div class="search-box">
              <input type="text" placeholder="Tìm kiếm sản phẩm" />
              <i class="bx bx-search"></i>
            </div>
            <div class="action">
              <div class="btn">
                <i class="bx bx-edit"></i>
              </div>
              <div class="btn">
                <a href="admin_order_list.php" ><i class="bx bx-exit"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="info">
          <div class="box order-info">
            <table>
              <caption>
                Thông tin đơn hàng
              </caption>
              <tbody>
                <tr>
                  <th>Mã đơn hàng</th>
                  <td>011235</td>
                </tr>
                <tr>
                  <th>Ngày</th>
                  <td>22-11-2022</td>
                </tr>
                <tr>
                  <th>Tổng hóa đơn</th>
                  <td>2.000.000 đ</td>
                </tr>
                <tr>
                  <th>Trạng thái</th>
                  <td><span class="status-paid">Hoàn thành</span></td>
                </tr>
              </tbody>
            </table>
          </div>
          <div class="box customer-info">
            <table>
              <caption>
                Thông tin khách hàng
              </caption>
              <tbody>
                <tr>
                  <th>Tên</th>
                  <td>Đỗ Anh Triết</td>
                </tr>
                <tr>
                  <th>Số điện thoại</th>
                  <td>0123456789</td>
                </tr>
                <tr>
                  <th>Địa chỉ</th>
                  <td>123 An Duong Vuong, P.5, Q.5, TPHCM</td>
                </tr>
                <tr>
                  <th>Email</th>
                  <td><a href="#">Anhtrietdrop@gmail.com</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="box product-list">
          <table>
            <caption>
              Danh sách sản phẩm
            </caption>
            <thead>
              <tr>
                <th></th>
                <th>Mô tả</th>
                <th>Giá bán</th>
                <th>Số lượng</th>
                <th>Tổng hóa đơn</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div
                    class="product-img"
                    style="background-image: url(image_manh/MTP-1183E-7ADF-1-.webp)"
                  ></div>
                </td>
                <td>
                  <h4>CASIO MTP-1183E-7ADF</h4>
                  <p>
                   Thể hiện sự lịch lãm , sang trọng.
                  </p>
                </td>
                <td>1.800.000 đ</td>
                <td>1</td>
                <td>1.800.000 đ</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </section>
  </body>
</html>
