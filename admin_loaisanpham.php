<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>KVM WATCH | Admin - Dashboard</title>
  <link
  rel="icon"
  type="image/x-icon"
  href="./asset/favicon/icondongho (2).png"
/>
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <!-- <link rel="stylesheet" href="bootstrap-5.3.2-dist/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="asset/khang.css">
  <link rel="stylesheet" href="css/admin_style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

  <body>
    
  <?php
    include 'php_admin/side_bar.php';
  ?>

    <section class="home-section">
      <nav>
        <div class="sidebar-button">
          <i class="bx bx-menu sidebarBtn"></i>
          <span class="dashboard">Quản lý loại sản phẩm</span>
        </div>
        <!-- <div class="search-box">
      <input type="text" placeholder="Search...">
      <i class='bx bx-search'></i>
    </div> -->
        <div class="profile-details">
          <img src="images/profile.jpg" alt="" />
          <span class="admin_name">Admin</span>
          <i class="bx bx-chevron-down"></i>
        </div>
      </nav>

      <div class="home-content user">
        <div class="header">
          <div class="nav">
            <div class="search-box">
              <input type="text" placeholder="Tìm kiếm loại sản phẩm" />
              <i class="bx bx-search"></i>
            </div>
            <div class="action">
              <div class="add-user btn">
                <i class="bx bx-plus"></i>
              </div>
              <div class="filter-list btn">
                <i class="bx bx-filter"></i>
              </div>
            </div>
          </div>

          <div class="filter">
            <div class="option">
              <p class="title">Role</p>
              <div class="option-list user-manage">
                <form action="" class="crole">
                  <select name="role">
                    <option value="all">All</option>
                    <option value="customer">Customer</option>
                    <option value="loyalcustomer">Loyal customer</option>
                  </select>
                </form>
              </div>
            </div>
            <div class="option">
              <p class="title">Registration Date</p>
              <div class="option-list">
                <form action="">
                  <input type="date" name="regisdate" />
                </form>
              </div>
            </div>
            <div class="option">
              <p class="title">Status</p>
              <div class="option-list">
                <form action="">
                  <select name="status">
                    <option value="all">All</option>
                    <option value="online">Online</option>
                    <option value="offline">Offline</option>
                  </select>
                </form>
              </div>
            </div>
            <div class="option">
              <p class="title">Sort</p>
              <div class="option-list">
                <div class="sort">
                  <button id="byname">
                    <i class="fa-solid fa-arrow-up"></i> By name
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="box user-list">
          <table>
            <thead>
              <tr>
                <th class="text-center">Mã Loại</th>
                <th class="text-center">Tên Loại</th>
                <th class="text-center">Hành Động</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>1</td>
                <td>CASIO MTP</td>
                <td>
                  <button type="button" class="btn btn-success bx bxs-edit-alt">
                    Thêm
                  </button>
                  <button
                    type="button"
                    class="btn btn-warning bx bxs-edit-alt bxs-edit-alt-edit"
                  >
                    Sửa
                  </button>
                  <button type="button" class="btn btn-danger bx bxs-edit-alt">
                    Xóa
                  </button>
                </td>
              </tr>
              <tr>
                <td>2</td>
                <td>CASIO G-Shock</td>
                <td>
                  <button type="button" class="btn btn-success bx bxs-edit-alt">
                    Thêm
                  </button>
                  <button type="button" class="btn btn-warning bx bxs-edit-alt">
                    Sửa
                  </button>
                  <button type="button" class="btn btn-danger bx bxs-edit-alt">
                    Xóa
                  </button>
                </td>
              </tr>
              <tr>
                <td>3</td>
                <td>CASIO EDIFICE</td>
                <td>
                  <button type="button" class="btn btn-success bx bxs-edit-alt">
                    Thêm
                  </button>
                  <button
                    type="button"
                    class="btn btn-warning bx bxs-edit-alt bxs-edit-alt-edit"
                  >
                    Sửa
                  </button>
                  <button
                    type="button"
                    class="btn btn-danger bx bxs-edit-alt bxs-edit-alt-delete"
                  >
                    Xóa
                  </button>
                </td>
              </tr>
              <tr>
                <td>4</td>
                <td>CASIO BABY-G</td>
                <td>
                  <button type="button" class="btn btn-success bx bxs-edit-alt">
                    Thêm
                  </button>
                  <button
                    type="button"
                    class="btn btn-warning bx bxs-edit-alt bxs-edit-alt-edit"
                  >
                    Sửa
                  </button>
                  <button
                    type="button"
                    class="btn btn-danger bx bxs-edit-alt bxs-edit-alt-delete"
                  >
                    Xóa
                  </button>
                </td>
              </tr>
              <tr>
                <td>5</td>
                <td>CASIO LTP</td>
                <td>
                  <button type="button" class="btn btn-success bx bxs-edit-alt">
                    Thêm
                  </button>
                  <button
                    type="button"
                    class="btn btn-warning bx bxs-edit-alt bxs-edit-alt-edit"
                  >
                    Sửa
                  </button>
                  <button
                    type="button"
                    class="btn btn-danger bx bxs-edit-alt bxs-edit-alt-delete"
                  >
                    Xóa
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="footer">
        <div class="page">
          <button><i class="bx bx-left-arrow-alt"></i></button>
          <button class="current-page">1</button>
          <button>2</button>
          <button>3</button>
          <button>4</button>
          <button>5</button>
          <button><i class="bx bx-right-arrow-alt"></i></button>
        </div>
      </div>
    </section>

    <div class="modal user-form">
      <form action="" class="modal-content animate">
        <div class="header">
          <h2>Thêm sản phẩm</h2>
        </div>
        <div class="container">
          <label for="uname">Mã Loại</label>
          <input type="text" name="uname" value="" />
          <label for="uemail">Tên Loại</label>
          <input type="text" name="uemail" value="" />
        </div>
        <hr />
        <div class="footer">
          <button type="button" class="cancel">Đóng</button>
          <button type="submit" class="done done-add">Thêm</button>
        </div>
      </form>
    </div>

    <div class="modal user-form-edit">
      <form action="" class="modal-content animate">
        <div class="header">
          <h2>Sửa sản phẩm</h2>
        </div>
        <div class="container">
          <label for="uname">Mã Loại</label>
          <input type="text" name="uname" value="1" />
          <label for="uemail">Tên Loại</label>
          <input type="text" name="uemail" value="Casio" />
        </div>
        <hr />
        <div class="footer">
          <button type="button" class="cancel">Đóng</button>
          <button type="submit" class="done done-edit">Sửa</button>
        </div>
      </form>
    </div>
    <script>
      //

      // expand and shrink sidebar
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function () {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
          sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      };

      // open and close filter list
      let filterBtn = document.querySelector(".filter-list");
      let header = document.querySelector(".header");
      filterBtn.addEventListener("click", () => {
        header.classList.toggle("active");
      });

      // increase and decrease according to time
      let sortByTimeBtn = document.querySelector("#byname");
      sortByTimeBtn.addEventListener("click", () => {
        sortByTime = sortByTimeBtn.firstChild;
        if (sortByTime.classList.contains("fa-arrow-up")) {
          sortByTime.classList.replace("fa-arrow-up", "fa-arrow-down");
        } else {
          sortByTime.classList.replace("fa-arrow-down", "fa-arrow-up");
        }
      });

      //control user form add
      let userForm = document.querySelector(".user-form");
      let editBtn = document.getElementsByClassName("bxs-edit-alt");
      let addBtn = document.querySelector(".add-user");
      for (let i = 0; i < editBtn.length; i++) {
        editBtn[i].addEventListener("click", () => {
          userForm.style.display = "flex";
        });
      }
      addBtn.addEventListener("click", () => {
        userForm.style.display = "flex";
      });
      let cancelBtn = document.querySelector(".cancel");
      cancelBtn.addEventListener("click", () => {
        userForm.style.display = "none";
      });
      window.onclick = function (event) {
        if (event.target == userForm) {
          userForm.style.display = "none";
        }
      };
      let done_add = document.querySelector(".done-add");

      // Check if the element was found before adding an event listener
      if (done_add) {
        done_add.addEventListener("click", function (e) {
          alert("Thêm sản phẩm thành công");
          console.log("sss");
          // Assuming userForm is previously defined somewhere in your code
          userForm.style.display = "none";
        });
      } else {
        console.log("Element with class 'done-add' not found.");
      }
      //
      // btn sua
      let user_form_edit = document.querySelector(".user-form-edit");
      let editBtn_edit = document.getElementsByClassName("bxs-edit-alt-edit");

      for (let i = 0; i < editBtn_edit.length; i++) {
        editBtn_edit[i].addEventListener("click", () => {
          userForm.style.display = "flex";
        });
      }
      editBtn_edit.addEventListener("click", () => {
        user_form_edit.style.display = "inline";
      });
      let cancelBtn_edit = document.querySelector(".cancel");
      cancelBtn.addEventListener("click", () => {
        user_form_edit.style.display = "none";
      });
      window.onclick = function (event) {
        if (event.target == userForm) {
          userForm.style.display = "none";
        }
      };
      let done_edit = document.querySelector(".done-add");

      // Check if the element was found before adding an event listener
      if (done_add) {
        done_add.addEventListener("click", function (e) {
          alert("Thêm sản phẩm thành công");
          console.log("sss");
          // Assuming userForm is previously defined somewhere in your code
          userForm.style.display = "none";
        });
      } else {
        console.log("Element with class 'done-add' not found.");
      }
      //
    </script>
  </body>
</html>
