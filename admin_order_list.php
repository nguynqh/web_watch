<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KVM WATCH | Admin - Order_List</title>
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
        <span class="dashboard">Danh sách đơn hàng</span>
      </div>
      <div class="profile-details">
        <img src="images/profile.jpg" alt="">
        <span class="admin_name">Khang</span>
        <i class='bx bx-chevron-down'></i>
      </div>
    </nav>

    <div class="home-content product">
      <div class="header">
        <div class="nav">
          <div class="search-box">
            <input type="text" placeholder="Tìm kiếm..">
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

      <div class="order-list">
        <table>
          <thead>
            <tr>
              <th>Mã đơn hàng</th>
              <th>Số điện thoại</th>
              <th>Tổng thanh toán</th>
              <th>Ngày</th>
              <th>Trạng thái</th>
              <th>Hành động</th>
            </tr>
          </thead>
          <tbody>

            <tr>
              <td>012345</td>
              <td>0987654321</td>
              <td>2.000.000 đ</td>
              <td>11-11-2022</td>
              <td><span class="status-paid">Hoàn thành</span></td>
              <td>
                <a href="order_detail.php">
                  <i class='bx bxs-detail'>
                    <span class="tooltip">Chi tiết</span>
                  </i>
                </a>
              </td>
            </tr>
            <tr>
              <td>012345</td>
              <td>0125543265</td>
              <td>2.000.000 đ</td>
              <td>23-06-2022</td>
              <td><span class="status-unpaid">Không hoàn thành</span></td>
              <td>
                <a href="order_detail.php">
                  <i class='bx bxs-detail'>
                    <span class="tooltip">Chi tiết</span>
                  </i>
                </a>
              </td>
            </tr>
            <tr>
              <td>012345</td>
              <td>0983275463</td>
              <td>2.000.000 đ</td>
              <td>31-07-2022</td>
              <td><span class="status-unpaid">Không hoàn thành</span></td>
              <td>
                <a href="order_detail.php">
                  <i class='bx bxs-detail'>
                    <span class="tooltip">Chi tiết</span>
                  </i>
                </a>
              </td>
            </tr>
            <tr>
              <td>012345</td>
              <td>0983254321</td>
              <td>2.000.000 đ</td>
              <td>21-05-2022</td>
              <td><span class="status-paid">Hoàn thành</span></td>
              <td>
                <a href="order_detail.php">
                  <i class='bx bxs-detail'>
                    <span class="tooltip">Chi tiết</span>
                  </i>
                </a>
              </td>
            </tr>
            <tr>
              <td>012345</td>
              <td>0987282645</td>
              <td>2.000.000 đ</td>
              <td>12-12-2022</td>
              <td><span class="status-unpaid">Không hoàn thành</span></td>
              <td>
                <a href="order_detail.php">
                  <i class='bx bxs-detail'>
                    <span class="tooltip">Chi tiết</span>
                  </i>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
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
    </div>
  </section>

  <div class="modal order-form">
    <form action="" class="modal-content animate">
      <div class="header">
        <h2>Customer Information</h2>
      </div>
      <div class="container">
        <label for="customer">Customer's name</label>
        <input type="text" name="customer" value="">
        <label for="cphone">Phone number</label>
        <input type="text" name="uemail" value="">
        <label for="total">Total price</label>
        <input type="text" name="uphone" value="">
        <label for="status">Status</label>
        <select name="status">
          <option value="complete">Complete</option>
          <option value="incomplete">Incomplete</option>
          <option value="processing">Processing</option>
        </select>
        <label for="date">Date</label>
        <input type="date" name="date">
      </div>
      <hr>
      <div class="footer">
        <button type="button" class="cancel">Cancel</button>
        <button type="submit" class="done">Done</button>
      </div>
    </form>
  </div>

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

    // control order form
    let orderForm= document.querySelector('.order-form');
    let editBtn = document.getElementsByClassName('bxs-edit-alt');
    let addBtn = document.querySelector('.add-order');
    for (let i = 0; i < editBtn.length; i++) {
      editBtn[i].addEventListener('click', () => {
        orderForm.style.display = 'flex';
      });
    }
    addBtn.addEventListener('click', () => {
      orderForm.style.display = 'flex';
    });
    let cancelBtn = document.querySelector('.cancel');
    cancelBtn.addEventListener('click', () => {
      orderForm.style.display = 'none';
    })
    window.onclick = (event) => {
      if (event.target == orderForm) {
        orderForm.style.display = 'none';
      }
    }
  </script>
</body>

</html>