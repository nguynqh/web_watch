<?php session_start() ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>KVM WATCH | Admin - User</title>
  <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.min.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/admin_style.css">
</head>

<body>
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
        <a href="#" class="active">
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

  
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Người dùng</span>
      </div>
      <div class="profile-details">
        <img src="images/profile.jpg" alt="">
        <span class="admin_name"> <?php echo $_SESSION['username']?> </span>
        <!-- <i class='bx bx-log-out'></i> -->
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
            <p class="title">Phân loại</p>
            <div class="option-list user-manage">
              <form action="" class="crole">
                <select name="role">
                  <option value="all">Tất cả</option>
                  <option value="customer">Khách hàng</option>
                  <option value="loyalcustomer">Khách hàng thân thiết</option>
                </select>
              </form>
            </div>
          </div>
          <div class="option">
            <p class="title">Ngày đăng ký</p>
            <div class="option-list">
              <form action="">
                <input type="date" name="regisdate">
              </form>
            </div>
          </div>
          <!-- <div class="option">
            <p class="title">Trạng thái</p>
            <div class="option-list">
              <form action="">
                <select name="status">
                  <option value="all">Tất cả</option>
                  <option value="online">Online</option>
                  <option value="offline">Offline</option>
                </select>
              </form>
            </div>
          </div> -->
          <div class="option">
            <p class="title">Sắp xếp</p>
            <div class="option-list">
              <div class="sort">
                <button id="byname"><i class="fa-solid fa-arrow-up"></i> Theo tên</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--thêm chức năng thêm người dùng-->
      <div class="box user-list" onclick="handleBoxClick()">
        <div class="user-info" id="user_info">
          <h3>Thêm người dùng</h3>
          <form id="addUserForm">
            <div class="form-group">
              <label for="userName">Tên:</label>
              <input type="text" id="userName" class="form-control" placeholder="Nhập tên người dùng">
            </div>
            <div class="form-group">
              <label for="userEmail">Email:</label>
              <input type="email" id="userEmail" class="form-control" placeholder="Nhập địa chỉ email">
            </div>
            <div class="form-group">
              <label for="userAddress">Địa chỉ:</label>
              <input type="text" id="userAddress" class="form-control" placeholder="Nhập địa chỉ">
            </div>
            <div class="form-group">
              <label for="userPhone">Số điện thoại:</label>
              <input type="text" id="userPhone" class="form-control" placeholder="Nhập số điện thoại">
            </div>
            <div class="form-group">
              <label for="userBirthday">Ngày sinh nhật:</label>
              <input type="date" id="userBirthday" class="form-control">
            </div>
            <button type="button" onclick="confirmAddUser()" class="btn btn-primary">Thêm người dùng</button>
          </form>
        </div>
      </div>
      
      

      <div class="box user-list">
        <table>
          <thead>
            <tr>
              <th class="text-left">Người dùng</th>
              <th class="text-left">Số điện thoại</th>
              <th class="text-left">Phân loại</th>
              <th>Trạng thái</th>
              <th>Ngày đăng ký</th>
              <th>Hành động</th>
            </tr>
          </thead>
          <tbody>
            <?php
              require 'php_admin/connect.php';
              $sql = "SELECT * FROM customer";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                  echo "<tr>";
                  echo "<td class='text-left'>";
                  echo "<p>" . $row['CusFullName'] . "</p>";
                  echo "<p class='email'>" . $row['CusEmail'] . "</p>";
                  echo "</td>";
                  echo "<td class='text-left'>" . $row['CusPhone'] . "</td>";
                  echo "<td class='text-left'>" . $row['CusType'] . "</td>";
                  echo "<td><span class='status-unpaid'>"; if($row['status']==0){ echo"offline"; } else {echo"online";}; echo "</span></td>";
                  echo "<td>" . $row['DateCreate'] . "</td>";
                  echo "<td>";
                  echo "<i id='toggleIcon' class='bx bxs-lock-open' onclick='toggleLock()'>";
                  echo "<span class='tooltip' id='locket'>lock</span>";
                  echo "</i>";
                  echo "<i class='bx bxs-edit-alt'>";
                  echo "<span class='tooltip'>edit</span>";
                  echo "</i>";
                  echo "<i class='bx bx-mail-send'>";
                  echo "<span class='tooltip'>contact</span>";
                  echo "</i>";
                  echo "</td>";
                  echo "</tr>";
                }
              }
            ?>
            <!-- <tr>
              <td class="text-left">
                <p>Đỗ Anh Triết</p>
                <p class="email">Anhtrietdrop@gmail.com</p>
              </td>
              <td class="text-left">0987654321</td>
              <td class="text-left">Khách hàng</td>
              <td><span class="status-unpaid">Offline</span></td>
              <td>21-11-2023</td>
              <td>
                <i id="toggleIcon" class='bx bxs-lock-open' onclick="toggleLock()">
                  <span class="tooltip" id="locket">lock</span>
                </i>                
                <i class='bx bxs-edit-alt'>
                  <span class="tooltip">edit</span>
                </i>
                <i class="bx bx-mail-send">
                  <span class="tooltip">contact</span>
                </i>
              </td>
            </tr>
            <tr>
              <td class="text-left">
                <p>Nguyễn Ngọc Thúy Vy</p>
                <p class="email">vydangiu@gmail.com</p>
              </td>
              <td class="text-left">0192837433</td>
              <td class="text-left">Khách hàng thân thiết</td>
              <td><span class="status-paid">online</span></td>
              <td>31-07-2023</td>
              <td>
                <i id="toggleIcon1" class='bx bxs-lock-open' onclick="toggleLock1()">
                  <span class="tooltip" id="locket1">lock</span>
                </i>   
                <i class='bx bxs-edit-alt'>
                  <span class="tooltip">edit</span>
                </i>
                <i class="bx bx-mail-send">
                  <span class="tooltip">contact</span>
                </i>
              </td>
            </tr>
            <tr>
              <td class="text-left">
                <p>Nguyễn Ngọc Thúy Vy</p>
                <p class="email">vydangiu@gmail.com</p>
              </td>
              <td class="text-left">0192837433</td>
              <td class="text-left">Khách hàng thân thiết</td>
              <td><span class="status-paid">online</span></td>
              <td>31-07-2023</td>
              <td>
                <i id="toggleIcon1" class='bx bxs-lock-open' onclick="toggleLock1()">
                  <span class="tooltip" id="locket1">lock</span>
                </i>   
                <i class='bx bxs-edit-alt'>
                  <span class="tooltip">edit</span>
                </i>
                <i class="bx bx-mail-send">
                  <span class="tooltip">contact</span>
                </i>
              </td>
            </tr> -->

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

      <div class="box user-list">
        <table>
          <thead>
            <tr>
              <th class="text-left">Người quản lý</th>
              <th class="text-left">Số điện thoại</th>
              <th class="text-left">Chức vụ</th>
              <!-- <th>Trạng thái</th> -->
              <th>Ngày bắt đầu làm việc</th>
              <th>Hành động</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="text-left">
                <p>Lam Kien Minh</p>
                <p class="email">kienminhlam@gmail.com</p>
              </td>
              <td class="text-left">0927384234</td>
              <td class="text-left">Web_admin</td>
              <!-- <td><span class="status-paid">Online</span></td> -->
              <td>05-06-2023</td>
              <td>
                <i id="toggleIcon2" class='bx bxs-lock-open' onclick="toggleLock2()">
                  <span class="tooltip" id="locket2">lock</span>
                </i>   
                <i class='bx bxs-edit-alt'>
                  <span class="tooltip">edit</span>
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

  <div class="modal user-form">
    <form action="" class="modal-content animate">
      <div class="header">
        <h2>Thông tin người dùng</h2>
      </div>
      <div class="container">
        <label for="uname">Tên</label>
        <input type="text" name="uname" value="">
        <label for="uemail">Email</label>
        <input type="text" name="uemail" value="">
        <label for="uphone">Số điện thoại</label>
        <input type="text" name="uphone" value="">
        <label for="urole">Loại khách hàng</label>
        <select name="urole">
          <option value="customer">Khách hàng mới</option>
          <option value="loyal">Khách hàng thân thiết</option>
        </select>
      </div>
      <hr>
      <div class="footer">
        <a href="admin_user.php"><button type="button" class="cancel">Cancel</button></a>
        <button type="submit" class="done">Done</button>
      </div>
    </form>
  </div>

  <script>
    function logout() {
      alert("Bạn đã đăng xuất khỏi hệ thống");
    }
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

    //control user form
    let userForm = document.querySelector('.user-form');
    let editBtn = document.getElementsByClassName('bxs-edit-alt');
    let addBtn = document.querySelector('.add-user');
    for (let i = 0; i < editBtn.length; i++) {
      editBtn[i].addEventListener('click', () => {
        userForm.style.display = 'flex';
      });
    }
    addBtn.addEventListener('click', () => {
      userForm.style.display = 'flex';
    });
    let cancelBtn = document.querySelector('.cancel');
    cancelBtn.addEventListener('click', () => {
      userForm.style.display = 'none';
    })
    window.onclick = function (event) {
      if (event.target == userForm) {
        userForm.style.display = 'none';
      }
    }
  </script>
  <script>
 function toggleLock() {
  var icon = document.getElementById("toggleIcon");
  var iconlock = document.getElementById("locket");

  if (icon.classList.contains("bxs-lock-open")) {
    var confirmLock = confirm("Bạn có muốn khóa người dùng không?");

    if (confirmLock) {
      icon.classList.remove("bxs-lock-open");
      icon.classList.add("bxs-lock");
      iconlock.textContent = "unlock";
    }
  } else if (icon.classList.contains("bxs-lock")) {
    var confirmUnLock = confirm("Bạn có muốn mở khóa người dùng không?");
    
    if (confirmUnLock) {
      icon.classList.remove("bxs-lock");
      icon.classList.add("bxs-lock-open");
      iconlock.textContent = "lock";
    }
  }
}
function toggleLock1() {
  var icon = document.getElementById("toggleIcon1");
  var iconlock = document.getElementById("locket1");

  if (icon.classList.contains("bxs-lock-open")) {
    var confirmLock = confirm("Bạn có muốn khóa người dùng không?");

    if (confirmLock) {
      icon.classList.remove("bxs-lock-open");
      icon.classList.add("bxs-lock");
      iconlock.textContent = "unlock";
    }
  } else if (icon.classList.contains("bxs-lock")) {
    var confirmUnLock = confirm("Bạn có muốn mở khóa người dùng không?");
    
    if (confirmUnLock) {
      icon.classList.remove("bxs-lock");
      icon.classList.add("bxs-lock-open");
      iconlock.textContent = "lock";
    }
  }
}
function toggleLock2() {
  var icon = document.getElementById("toggleIcon2");
  var iconlock = document.getElementById("locket2");

  if (icon.classList.contains("bxs-lock-open")) {
    var confirmLock = confirm("Bạn có muốn khóa quản trị viên này không?");

    if (confirmLock) {
      icon.classList.remove("bxs-lock-open");
      icon.classList.add("bxs-lock");
      iconlock.textContent = "unlock";
    }
  } else if (icon.classList.contains("bxs-lock")) {
    var confirmUnLock = confirm("Bạn có muốn mở khóa quản trị viên này không?");
    
    if (confirmUnLock) {
      icon.classList.remove("bxs-lock");
      icon.classList.add("bxs-lock-open");
      iconlock.textContent = "lock";
    }
  }
}


  </script>

  <script>
   function confirmAddUser() {
  var confirmed = confirm("Bạn có chắc chắn muốn thêm người dùng không?");
  if (confirmed) {
    // Nếu người dùng nhấn OK trong hộp thoại xác nhận
    addUser(); // Gọi hàm để thêm người dùng (có thể thay đổi tùy theo logic của bạn)
  } else {
    // Nếu người dùng nhấn Cancel trong hộp thoại xác nhận
    // Có thể thực hiện hành động khác hoặc không làm gì cả
  }
}


  </script>

  <script>
    function handleBoxClick() {
      var userInfoDiv = document.getElementById('addUserForm');
      // Check if the div is disabled
      var isDisabled = userInfoDiv.disabled;

      // Check if the div is visible
      var isVisible = window.getComputedStyle(userInfoDiv).display !== "none";

      alert(isDisabled + " " + isVisible);
      if ( isVisible && isDisabled) {
        // userInfoDiv.style.display = "none";
        alert("visible");
      } else {
        // userInfoDiv.style.display = "block";
        alert("hidden");
      }
    }

  </script>
</body>

</html>