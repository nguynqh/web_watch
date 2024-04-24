<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KVM WATCH | Admin - Statistical</title>
  <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.min.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/admin_style.css">
  <link
      rel="icon"
      type="image/x-icon"
      href="./asset/favicon/icondongho (2).png"
    />
</head>

<body>
  
  <?php
    include 'php_admin/side_bar.php';
  ?>

  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Thống kê</span>
      </div>
      <div class="profile-details">
        <img src="images/profile.jpg" alt="">
        <span class="admin_name">Khang</span>
        <i class='bx bx-chevron-down'></i>
      </div>
    </nav>

    <div class="home-content statistical">
      <div class="header">
        <div class="nav">
          <div class="search-box">
            <input type="text" placeholder="Tìm kiếm sản phẩm">
            <i class='bx bx-search'></i>
          </div>
          <div class="action">
            <div class="filter-list btn">
              <i class="bx bx-filter"></i>
            </div>
          </div>
        </div>

        <div class="filter">
          <div class="option">
            <p class="title">Thời gian</p>
            <div class="option-list">
              <form action="" class="time">
                <label for="time">Khoảng </label>
                <select name="time" id="time">
                  <option value="24h">24 giờ qua</option>
                  <option value="week">Tuần trước</option>
                  <option value="month">Tháng Trước</option>
                </select>
              </form>
              <form action="" class="date">
                <label for="date">Ngày</label>
                <input type="date" id="date">
              </form>
            </div>
          </div>
          <div class="option">
            <p class="title">Mức giá</p>
            <div class="option-list">
              <form action="" class="price-range">
                <div class="from">
                  <label for="from">Từ</label>
                  <input type="text" id="from" placeholder=".... ">
                </div>
                <div class="to">
                  <label for="to">Đến</label>
                  <input type="text" id="to" placeholder=".... ">
                </div>
              </form>
            </div>
          </div>
          <div class="option">
            <p class="title">Trạng thái</p>
            <div class="option-list">
              <div class="status">
                <button id="paid">Hoàn thành</button>
              </div>
              <div class="status">
                <button id="unpaid">Chưa hoàn thành</button>
              </div>
            </div>
          </div>
          <div class="option">
            <p class="title">Sắp xếp</p>
            <div class="option-list">
              <div class="sort">
                <button id="byname"><i class="fa-solid fa-arrow-up"></i> Theo tên</button>
              </div>
              <div class="sort">
                <button id="byprice"><i class="fa-solid fa-arrow-up"></i> Theo giá</button>
              </div>
            </div>
          </div>
        </div>  
      </div>

      <div class="box statistical-list">
        <table>
          <thead>
            <tr>
              <th class="text-left">Phân loại</th>
              <th class="text-left">Sản phẩm</th>
              <th>Số lượng đã bán</th>
              <th>Doanh thu</th>
              <th>Hành động</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-left">CASIO MTP - Nam</td>
              <td class="text-left">Casio MTP-1381D-1AVDF</td>
              <td>24</td>
              <td>5.000.000 đ</td>
              <td>
                <i class='bx bxs-edit-alt'>
                  <span class="tooltip">Edit</span>
                </i>
              </td>
            </tr>
            <tr>
              <td class="text-left">CASIO MTP - Nam</td>
              <td class="text-left">Casio MTP-1381L-9AVDF</td>
              <td>15</td>
              <td>8.000.000 đ</td>
              <td>
                <i class='bx bxs-edit-alt'>
                  <span class="tooltip">Edit</span>
                </i>
              </td>
            </tr>
            <tr>
              <td class="text-left">CASIO MTP - Nam</td>
              <td class="text-left">Casio MTP-1381L-9AVDF</td>
              <td>31</td>
              <td>10.000.000 đ</td>
              <td>
                <i class='bx bxs-edit-alt'>
                  <span class="tooltip">Edit</span>
                </i>
              </td>
            </tr>
        
          </tbody>
        </table>
      </div>
    </div>
    <div class="footer">
      <div class="page">
        <button><i class='bx bx-left-arrow-alt'></i></button>
        <button class="current-page">1</button>
        <button>2</button>
        <button>3</button>
        <button>4</button>
        <button>5</button>
        <button><i class='bx bx-right-arrow-alt'></i></button>
      </div>
    </div>
  </section>

  <script>
    // expand and shrink sidebar
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function () {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }

    // open and close filter list
    let filterBtn = document.querySelector(".filter-list");
    let header = document.querySelector('.header');
    filterBtn.addEventListener('click', () => {
      header.classList.toggle('active');
    })

    // increase and decrease according to time
    let sortByTimeBtn = document.querySelector('#bytime');
    sortByTimeBtn.addEventListener('click', () => {
      sortByTime = sortByTimeBtn.firstChild;
      if (sortByTime.classList.contains('fa-arrow-up')) {
        sortByTime.classList.replace('fa-arrow-up', 'fa-arrow-down');
      }
      else {
        sortByTime.classList.replace('fa-arrow-down', 'fa-arrow-up');
      }
    })

    // increase and decrease according to price
    let sortByPriceBtn = document.querySelector('#byprice');
    sortByPriceBtn.addEventListener('click', () => {
      sortByPrice = sortByPriceBtn.firstChild;
      if (sortByPrice.classList.contains('fa-arrow-up')) {
        sortByPrice.classList.replace('fa-arrow-up', 'fa-arrow-down');
      }
      else {
        sortByPrice.classList.replace('fa-arrow-down', 'fa-arrow-up');
      }
    })
  </script>
</body>

</html>