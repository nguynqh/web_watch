<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KVM WATCH | Admin - Product</title>
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
        <span class="dashboard">Sản phẩm</span>
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
            <input type="text" placeholder="Tìm kiếm sản phẩm">
            <i class='bx bx-search'></i>
          </div>
          <div class="action">
            <div class="add-order btn">
              <i class="bx bx-plus"></i>
            </div>
            <div class="filter-list btn">
              <i class="bx bx-filter"></i>
            </div>
          </div>
        </div>

        <div class="filter">
          <div class="option">
            <p class="title">Phân loại</p>
            <div class="option-list">
              <form action="" class="category">
                <select name="category" id="category">
                  <option value="all">Tất cả</option>
                  <option value="men">Đồng hồ nam</option>
                  <option value="women">Đồng hồ nữ</option>
                </select>
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
              <form action="" class="status">
                <select name="category" id="category">
                  <option value="all">Tất cả</option>
                  <option value="stocking">Còn hàng</option>
                  <option value="soldout">Hết hàng</option>
                  <option value="nearlysoldout">Sắp hết hàng</option>
                </select>
              </form>
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

      <div class="box product-list">
        <table>
          <thead>
            <tr>
              <th class="product-name text-left">Tên sản phẩm</th>
              <th>Phân loại</th>
              <th>Kho hàng</th>
              <th>Trạng thái</th>
              <th>Giá bán</th>
              <th>Hành động</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-left">Casio MTP-1381D-1AVDF – Nam</td>
              <td>Đồng hồ nam</td>
              <td>60</td>
              <td><span class="status-paid">Còn hàng</span></td>
              <td>1.710.000 ₫</td>
              <td>
                <i class='bx bxs-detail'>
                  <span class="tooltip">Chi tiết</span>
                </i>
                <i class='bx bxs-edit-alt'>
                  <span class="tooltip">Chỉnh sửa</span>
                </i>
                <i class='bx bxs-trash'>
                  <span class="tooltip">Xóa</span>
                </i>
              </td>
            </tr>
            <tr>
              <td class="text-left">Casio MTP-1381L-9AVDF – Nam </td>
              <td>Đồng hồ nam</td>
              <td>60</td>
              <td><span class="status-paid">Còn hàng</span></td>
              <td>1.710.000 ₫</td>
              <td>
                <i class='bx bxs-detail'>
                  <span class="tooltip">Chi tiết</span>
                </i>
                <i class='bx bxs-edit-alt'>
                  <span class="tooltip">Chỉnh sửa</span>
                </i>
                <i class='bx bxs-trash'>
                  <span class="tooltip">Xóa</span>
                </i>
              </td>
            </tr>
            <tr>
              <td class="text-left">Casio MTP-1381D-1AVDF – Nam</td>
              <td>Đồng hồ nam</td>
              <td>60</td>
              <td><span class="status-paid">Còn hàng</span></td>
              <td>1.710.000 ₫</td>
              <td>
                <i class='bx bxs-detail'>
                  <span class="tooltip">Chi tiết</span>
                </i>
                <i class='bx bxs-edit-alt'>
                  <span class="tooltip">Chỉnh sửa</span>
                </i>
                <i class='bx bxs-trash'>
                  <span class="tooltip">Xóa</span>
                </i>
              </td>
            </tr>
            <tr>
              <td class="text-left">Casio MTP-1381D-1AVDF – Nam</td>
              <td>Đồng hồ nam</td>
              <td>60</td>
              <td><span class="status-paid">Còn hàng</span></td>
              <td>1.710.000 ₫</td>
              <td>
                <i class='bx bxs-detail'>
                  <span class="tooltip">Chi tiết</span>
                </i>
                <i class='bx bxs-edit-alt'>
                  <span class="tooltip">Chỉnh sửa</span>
                </i>
                <i class='bx bxs-trash'>
                  <span class="tooltip">Xóa</span>
                </i>
              </td>
            </tr>
            <tr>
              <td class="text-left">Casio MTP-1381D-1AVDF – Nam</td>
              <td>Đồng hồ nam</td>
              <td>60</td>
              <td><span class="status-paid">Còn hàng</span></td>
              <td>1.710.000 ₫</td>
              <td>
                <i class='bx bxs-detail'>
                  <span class="tooltip">Chi tiết</span>
                </i>
                <i class='bx bxs-edit-alt'>
                  <span class="tooltip">Chỉnh sửa</span>
                </i>
                <i class='bx bxs-trash'>
                  <span class="tooltip">Xóa</span>
                </i>
              </td>
            </tr>
            <tr>
              <td class="text-left">Casio MTP-1381D-1AVDF – Nam</td>
              <td>Đồng hồ nam</td>
              <td>60</td>
              <td><span class="status-paid">Còn hàng</span></td>
              <td>1.710.000 ₫</td>
              <td>
                <i class='bx bxs-detail'>
                  <span class="tooltip">Chi tiết</span>
                </i>
                <i class='bx bxs-edit-alt'>
                  <span class="tooltip">Chỉnh sửa</span>
                </i>
                <i class='bx bxs-trash'>
                  <span class="tooltip">Xóa</span>
                </i>
              </td>
            </tr>
            <tr>
              <td class="text-left">Casio MTP-1381D-1AVDF – Nam</td>
              <td>Đồng hồ nam</td>
              <td>0</td>
              <td><span class="status-unpaid">Hết hàng</span></td>
              <td>1.710.000 ₫</td>
              <td>
                <i class='bx bxs-detail'>
                  <span class="tooltip">Chi tiết</span>
                </i>
                <i class='bx bxs-edit-alt'>
                  <span class="tooltip">Chỉnh sửa</span>
                </i>
                <i class='bx bxs-trash'>
                  <span class="tooltip">Xóa</span>
                </i>
              </td>
            </tr>
            <tr>
              <td class="text-left">Casio MTP-1381D-1AVDF – Nam</td>
              <td>Đồng hồ nam</td>
              <td>0</td>
              <td><span class="status-unpaid">Hết hàng</span></td>
              <td>1.710.000 ₫</td>
              <td>
                <i class='bx bxs-detail'>
                  <span class="tooltip">Chi tiết</span>
                </i>
                <i class='bx bxs-edit-alt'>
                  <span class="tooltip">Chỉnh sửa</span>
                </i>
                <i class='bx bxs-trash'>
                  <span class="tooltip">Xóa</span>
                </i>
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
  </section>

  <div class="modal product-form">
    <form action="" class="modal-content animate">
      <div class="header">
        <h2>Thông tin sản phẩm</h2>
      </div>
      <div class="container">
        <label for="pname">Tên sản phẩm</label>
        <input type="text" name="pname" value="">
        <label for="pcategory">Phân loại</label>
        <input type="text" name="pcategory" value="">
        <label for="pstock">Kho hàng</label>
        <input type="text" name="pstock" value="">
        <label for="pstatus">Tình trạng</label>
        <input type="text" name="pstatus" value="">
        <label for="pprice">Giá</label>
        <input type="text" name="pprice" value="">
        <label for="pdecs">Mô tả</label>
        <textarea name="pdecs" cols="30" rows="3"></textarea>
<h4 class="h5 text-muted mt-3">Thêm ảnh</h4>
<div class="input-group">
  <img src="./image_manh/images.png" id="product-pic" style=" border-radius: 50%; object-fit: cover; background: #dfdfdf;">
  <input type="file" accept="image/jpeg ,image/png , image/jpg" class="form-control" id="input-file">
</div>
      </div>
      <hr>
      <div class="footer">
        <button type="button" class="cancel">Hủy</button>
        <button type="submit" class="done">Hoàn thành</button>
      </div>
    </form>
  </div>

  <div class="modal product-detail">
    <div class="container animate">
      <div class="product-img" style="background-image:url(image_manh/MTP-1302D-1A1VDF-1-.webp);"></div>
      <h4>Mô tả</h4>
      <p>Far far away, behind the word mountains, far from the countries</p>
      <div class="footer"><button type="button" class="close">Đóng</button></div>
    </div>
  </div>

  <div class="modal product-delete">
    <div class="container animate">
      <h2>Bạn có chắc chắn<br>
        muốn xóa sản phẩm này không</h2>
      <div class="action">
        <button type="button" class="confirm">Có</button>
        <button type="button" class="cancel-deletion">Không</button>
      </div>
    </div>
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
    let sortByTimeBtn = document.querySelector('#byname');
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
  <script>
      //add img
    let productPic = document.getElementById("product-pic");
    let inputFile = document.getElementById("input-file");

    inputFile.onchange =function(){
      productPic.src= URL.createObjectURL(inputFile.files[0]);
    }
  </script>
  <script src="js/admin_product.js"></script>
</body>

</html>