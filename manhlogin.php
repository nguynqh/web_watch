<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Đăng nhập</title>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <link
    rel="icon"
    type="image/x-icon"
    href="./asset/favicon/icondongho (2).png"
  />
  <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.css">
    <link
      href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900&display=swap"
      rel="stylesheet"
    />

    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <link rel="stylesheet" href="./login-form-17/css/loginstyle.css" />
    <link rel="stylesheet" href="./login-form-17/css/bootstrap.min.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css"
    />
    <link rel="stylesheet" href="./css/manh.css" />
    <link rel="stylesheet" href="asset/khang.css" />
  </head>
  <body>
	<header>
      <section class="myheader">
        <nav class="navbar bg-light navbar-expand-lg ftco_navbar ftco-navbar-light"  id="ftco-navbar">
          <div class="container">
            <a class="navbar-brand-manh" href="./index.php" >
              KVM Watches
            </a>
        
            <div class="collapse navbar-collapse" id="ftco-nav">
              <ul class="navbar-nav mb-2 mb-lg-0 me-auto">
                <li class="nav-item">
                  <a href="./index.php" class="nav-link active" aria-current="page" style="font-size: 18px;
                  font-weight: 600;">TRANG CHỦ</a>
                </li>
                <li class="nav-item dropdown">
                  <a href="" 
                     class="nav-link dropdown-toggle" 
                     id="navbarAdvancedDropdown" 
                     data-bs-toggle="dropdown" 
                     role="button" 
                     aria-expanded="false"
                     aria-haspopup="true" style="    font-size: 18px;
                     font-weight: 600;">sản phẩm</a>
                  <ul class="dropdown-menu header-dr" aria-labelledby="navbarAdvancedDropdown">
                    <li>
                      <a href="./dongHoNam.php" class="dropdown-item" style="color: #ffad33;text-align: left;">Đồng hồ nam</a>
                    </li>
                    <li>
                      <a href="./dongHoNu.php" class="dropdown-item" style="color: #ffad33;text-align: left;">Đồng hồ nữ</a>
                    </li>
                    <li>
                      <a href="#" class="dropdown-item" style="color: #ffad33;text-align: left;">Bộ sưu tập mới</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="./about.php" class="nav-link" style="    font-size: 18px;
                  font-weight: 600;">Về chúng tôi</a>
                </li>
                <li class="nav-item">
                  <a href="./contact.php" class="nav-link" style="    font-size: 18px;
                  font-weight: 600;">Liên hệ</a>
                </li>
               
              </ul>
              </div>
              <div id="right">
                <form class="example" action="dongHoNam.php" >
                  <input type="text" placeholder="Search.." name="search2">
                  <button type="submit" style="background-color: #ffad33;"><i class="fa fa-search"></i></button>
                  </form>
              </div>
              
                <div class="collapse navbar-collapse ftco-nav-right" id="ftco-nav" style="margin-left: -65px;">
                  <ul class="navbar-nav ml-auto header-right">
                    <li class="nav-item" style="display: none;" id="lsmh">
                      <a href="orderHistory.php" class="nav-link" style="font-size: 15px !important; padding-left: 0px;
                      padding-right: 0px;
                      padding-bottom: 0px;
                      padding-top: 9px;width: 107px;font-weight: 600;" 
                        >Lịch Sử Mua Hàng</a>
                    </li>
                    <li class="nav-item">
                      <a href="cart.php" class="nav-link"
                        ><i class="fa-solid fa-cart-shopping"></i
                      ></a>
                    </li>
                    <li class="nav-item islogined" id="logined">
                      <a href="./manhlogin.php" class="nav-link" style="font-size: 15px !important; padding-left: 0px;
                      padding-right: 0px;
                      padding-bottom: 0px;
                      padding-top: 20px;width: 107px;font-weight: 600;" 
                        >Đăng nhập</a>
                    </li>
                    <li class="nav-item" style="height: 2px;width: 1px; color: #010409;">
                    
                    </li>
                    <li class="nav-item islogined" id="logouted" onclick="dangxuat()">
                      <a href="#" class="nav-link" onclick="dangxuat()"
                        ><i class="fa-solid fa-right-from-bracket"></i></a>
                    </li>
                      <li class="nav-item" id="register">
                        <a href="./manhregister.php" class="nav-link"
                        style="font-size: 15px !important; padding-left: 0px;
                        padding-right: 0px;
                        padding-bottom: 0px;
                        padding-top: 20px;width: 107px;font-weight: 600;"  >Đăng ký</a>
                      </li>
                    
                  </ul>
                  <div id="loggedInUserInfo" style="font-size: 20px;"></div>
                </div>
              </form>
            </div>
        </nav>
      </section>
     </header>
    <section class="ftco-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-6 text-center mb-5"></div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-12 col-lg-10">
            <div class="wrap d-md-flex">
              <div
                class="text-wrap p-4 p-lg-5 text-center d-flex align-items-center order-md-last"
              >
                <div class="text w-100">
                  <h2>XIN CHÀO, BẠN</h2>
                  <p>Bạn là, khách hàng mới?</p>
                  <a
                    href="./manhregister.php"
                    class="btn btn-white btn-outline-white"
                    >Tạo tài khoản</a
                  >
                </div>
              </div>
              <!--bentrai-->
              <div class="login-wrap p-4 p-lg-5">
                <div class="d-flex">
                  <div class="w-100">
                    <a href="./index.php" style="font-size: 0.8em"
                      ><i class="bi bi-arrow-left">Quay lại trang chủ</i></a
                    >
                    <h3 class="mb-4">Đăng nhập</h3>
                  </div>
                  <!--lược bớt phần đăng nhập qua facebook-->
                  <!-- <div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div> -->
                </div>
                <form action="#" class="signin-form form-login-manh">
                  <div class="form-group mb-3">
                    <label class="label" for="name">Tên người dùng</label>
                    <input
                      id="username"
                      type="text"
                      class="form-control"
                      placeholder="Nhập tên"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label class="label" for="password">Mật khẩu</label>
                    <input
                      id="password"
                      type="password"
                      class="form-control"
                      placeholder="Nhập mật khẩu"
                      required
                    />
                  </div>
                  <div class="form-group">
                    <button
                      type="submit"
                      value="Login"
                      class="form-control btn submit px-3 btn-login-manh"
                      style="
                        background: linear-gradient(
                          135deg,
                          #f9cc76 0%,
                          #ec870e 100%
                        ) !important;
                      "
                      onclick="login()"
                    >
                      <span style="color: white" class="text-login"
                        >Đăng nhập</span
                      >
                    </button>
                  </div>
                  <div class="form-group d-md-flex">
                    <div class="w-50 text-left">
                      <label class="checkbox-wrap checkbox-primary mb-0"
                        >Ghi nhớ tôi
                        <input type="checkbox" checked />
                        <span class="checkmark"></span>
                      </label>
                    </div>
                    <div class="w-50 text-md-right">
                      <a href="#">Quên mật khẩu</a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>



 <!--fotter-->
 <div class="container-fluid footer">
  <div class="row" style="margin-left: 100px">
    <div class="col-sm-12 col-md-6 col-lg-3 footer-col-1 mt-4">
    <p class="footer-image">
      <a href="index.php"
      ><img
        style="height: 150px; width: auto"
        src="./image_manh/pngegg.png"
        alt=""
      /></a>
    </p>
    <p style="font-weight: 500">
      Chúng tôi là một công ty chuyên kinh doanh và phân phối đồng hồ với
      hơn 30 năm kinh nghiệm trong ngành. Sứ mệnh của chúng tôi là mang
      đến cho khách hàng những sản phẩm đồng hồ chất lượng, đa dạng về mẫu
      mã và giá trị.
    </p>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-3 footer-col-2 mt-4">
    <strong class="footer-title">HỆ THỐNG CỬA HÀNG</strong>
    <div class="mt-4 info-text-Manh">
      <p class="p1">TP. Hồ Chí Minh</p>
      <p class="p2">Hà Nội</p>
      <p class="p3">Biên Hòa - Bình Dương</p>
      <p class="p4">Long An</p>
      <p class="p5">Đà Nẵng</p>
      <p class="p6">Bà Rịa - Vũng Tàu</p>
      <p class="p7">Trung Tâm Bảo Hành</p>
    </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-3 footer-col-3 mt-4">
    <strong class="footer-title">HỖ TRỢ KHÁCH HÀNG</strong>
    <div class="mt-4 info-text-Manh">
      <p class="p1">TP. Hồ Chí Minh</p>
      <p class="p2">Hà Nội</p>
      <p class="p3">Biên Hòa - Bình Dương</p>
      <p class="p4">Long An</p>
      <p class="p5">Đà Nẵng</p>
      <p class="p6">Bà Rịa - Vũng Tàu</p>
      <p class="p7">Trung Tâm Bảo Hành</p>
    </div>
    </div>
    <div class="col-sm-12 col-md-6 col-lg-3">
    <div class="footer-image">
      <img
      style="height: 150px; width: auto"
      src="./image_manh/pngegg.png"
      alt=""
      />
    </div>
    </div>
  </div>
  <!--chua viet-->
  
  </div>
  <div class="footer-end" >
   <p>Copyright by KVM WATCHES® </p> 
  </div>
  <!--      -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
      function login() {
        var username = document.getElementById("username").value;
        console.log(username);
        var password = document.getElementById("password").value;
        console.log(password);
        if (username.trim() === "Khang" && password.trim() === "123") {
		localStorage.setItem("loggedInUser", username);
          window.location.href="index.php"
          alert("Bạn đã đăng nhập thành công");
		 
          console.log("success");
        }
        else if (username.trim() === "Manh" && password.trim() === "123") {
		localStorage.setItem("loggedInUser", username);
    window.location.href="index.php"
          alert("Bạn đã đăng nhập thành công");
		 
          console.log("success");}
          else if (username.trim() === "Rua" && password.trim() === "632004") {
		localStorage.setItem("loggedInUser", username);
    window.location.href="index.php"
          alert("Bạn đã đăng nhập thành công");
		 
          console.log("success");   
        }else
        {
          alert("Thông tin đăng nhập không chính xác. Vui lòng thử lại.");
        }
      }

    
      console.log("")
    </script>
    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction();
      };

      function scrollFunction() {
        if (
          document.body.scrollTop > 20 ||
          document.documentElement.scrollTop > 20
        ) {
          document.getElementById("myBtn").style.display = "block";
        } else {
          document.getElementById("myBtn").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }


function dangxuat() {
    localStorage.clear(); // Xóa toàn bộ dữ liệu trong localStorage
    let logoutedNavItem = document.getElementById("logouted");
    let registerNavItem = document.getElementById("register");
    let loginedNavItem = document.getElementById("logined");
    let loggedInUserInfo = document.getElementById("loggedInUserInfo");
    logoutedNavItem.style.display="none";
    loggedInUserInfo.style.display="none";
    registerNavItem.style.display="inline";
    loginedNavItem.style.display="inline";
    alert("Bạn đã đăng xuất");
    console.log("đã clear ");
}

  // Lấy thông tin đã lưu
// Kiểm tra nếu có thông tin đăng nhập lưu trong localStorage thì hiển thị thông tin đó
let loggedInUser = localStorage.getItem("loggedInUser");
let logoutedNavItem = document.getElementById("logouted");
let registerNavItem = document.getElementById("register");
 let lsmh=document.getElementById("lsmh")
let headerRight = document.querySelector('.header-right');
  
if (loggedInUser) {
   let loggedInUserInfo = document.getElementById("loggedInUserInfo");
    loggedInUserInfo.textContent = "Chào " + loggedInUser + "!";

    // Ẩn nút đăng nhập và hiển thị thông tin người dùng đã đăng nhập
    let loginedNavItem = document.getElementById("logined");
    logoutedNavItem.style.display="inline";
    loginedNavItem.style.display = "none";
    registerNavItem.style.display="none";
    headerRight.classList.add('loggedin');
    lsmh.style.display="inline"
   
} else {
    // Nếu không có thông tin đăng nhập thì hiển thị nút đăng nhập và ẩn thông tin người dùng
    let loggedInUserInfo = document.getElementById("loggedInUserInfo");
    loggedInUserInfo.style.display = "none";
    logoutedNavItem.style.display="none";
}

  
    </script>
  </body>
</html>
