<!DOCTYPE html>
<html lang="en">

<head>
  <title>KVM WATCH | About</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link
  rel="icon"
  type="image/x-icon"
  href="./asset/favicon/icondongho (2).png"
/>

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">

  <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.css">

  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
  <!-- <link rel="stylesheet" href="css/mystyle.css"> -->
  <link rel="stylesheet" href="css/manh.css">
  <link rel="stylesheet" href="./asset/khang.css">
</head>

<body class="goto-here">
  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
		<div class="container">
			<a class="navbar-brand" href="index.php">KVM WATCH</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
				aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="oi oi-menu"></span> Menu
			</button>

      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav mb-2 mb-lg-0 me-auto">
          <li class="nav-item">
            <a href="./index.php" class="nav-link active" 
            aria-current="page" 
            style="font-size: 15px;
            font-weight: 600;">TRANG CHỦ</a>
          </li>
          <li class="nav-item dropdown">
            <a href="" 
               class="nav-link dropdown-toggle" 
               id="navbarAdvancedDropdown" 
               data-bs-toggle="dropdown" 
               role="button" 
               aria-expanded="false"
               aria-haspopup="true" 
               style="font-size: 15px;
               font-weight: 600;">sản phẩm</a>
            <ul class="dropdown-menu header-dr" aria-labelledby="navbarAdvancedDropdown">
              <li>
                <a href="./dongHoNam.php" class="dropdown-item" style="color: #ffad33;text-align: left">Đồng hồ nam</a>
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
            <a href="./about.php" class="nav-link" 
            style="font-size: 15px;
            font-weight: 600;">Về chúng tôi</a>
          </li>
          <li class="nav-item">
            <a href="./contact.php" class="nav-link" 
            style="font-size: 15px;
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
		</div>
	</nav>
  <!-- END nav -->

  <div class="hero-wrap hero-bread" style="background-image: url('./image_manh/108_LTP-1183A-7ADF-2.webp');">
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <p class="breadcrumbs"><span class="mr-2"><a href="index.php" style="font-size: 30px; color:white">
          </a></span></p>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center"
          style="background-image: url(images/photo-1598337000462-436a6c75220b.avif); height: 400px; margin-top: 70px;background-size: contain;">
          </a>
        </div>
        <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
          <div class="heading-section-bold mb-4 mt-md-5">
            <div class="ml-md-0">
              <h2 class="mb-4">Chào mừng bạn đến với đồng hồ BKMT </h2>
            </div>
          </div>
          <div class="pb-md-5">
            <p>Nếu bạn đang tìm kiếm một chiếc đồng hồ cho bản thân, gia đình hoặc thứ gì đó đơn giản để tặng trong ngày đặc biệt,
               thì bạn đã đến đúng nơi rồi.
            <p>Tại đây bạn có thể tìm kiếm rất nhiều hãng, rất nhiều loại và chúng tôi luôn cập nhật phiên bản mới của các hãng khác.</p>
            <p><a href="#" class="btn btn-primary">Mua sắm ngay bây giờ</a></p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
    <div class="container py-4">
      <div class="row d-flex justify-content-center py-5">
        <div class="col-md-6">
          <h2 style="font-size: 22px;" class="mb-0">Theo dõi bản tin của chúng tôi</h2>
          <span>Nhận thông tin cập nhật qua email về các cửa hàng mới nhất và ưu đãi đặc biệt của chúng tôi.</span>
        </div>
        <div class="col-md-6 d-flex align-items-center">
          <form action="#" class="subscribe-form">
            <div class="form-group d-flex">
              <input type="text" class="form-control" placeholder="Nhập địa chỉ email">
              <input type="submit" value="Đăng kí" class="submit px-3">
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section ftco-counter img" id="section-counter"
    style="background-image: url(images/de.avif);">
    <div class="container">
      <div class="row justify-content-center py-5">
        <div class="col-md-10">
          <div class="row">
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="10000">0</strong>
                  <span>Khách hàng hài lòng</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="100">0</strong>
                  <span>Chi nhánh</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="1000">0</strong>
                  <span>Cộng sự</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="100">0</strong>
                  <span>Giải thưởng</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section ftco-animate text-center">
          <span class="subheading">Chứng nhận</span>
          <h2 class="mb-4">Khách hàng hài lòng của chúng tôi nói</h2>
          <p style="margin-bottom:20px ; font-size:25px;font-style: italic;font-weight: bold;">"NGÀY ĐẶC BIỆT CÓ ĐỒNG HỒ ĐẶC BIỆT"</p>
        </div>
      </div>
      <div class="customer">
              <div class="customer1">
                  <img src="images/z4841375803836_6a49339e62eb9648bcbed8bde5bb5a64.jpg" alt="">
                  <div class="name">
                    <h4 style="margin-left: 2px">Nguyễn Ngọc</h4>
                    <span>NHÀ PHÂN TÍCH</span>
                  </div>
                  <div class="comment">
                    <p>Tôi sẽ quay lại lần sau, với dịch vụ tốt nhất. Tôi rất thích những món đồ mới ở cửa hàng BKMT. </p>
                  </div>
              </div>
              <div class="customer2">
                <img src="images/z4841358918544_d80a84d81dcb53dc5f8edc588e2f9e41.jpg" alt="">
                <div class="name">
                  <h4>Thúy Nguyễn</h4>
                  <span >SINH VIÊN</span>
                </div>
                <div class="comment">
                  <p>Tôi thực sự yêu thích đồng hồ và cửa hàng này có đủ loại đồng hồ tôi có thể mua với giá cả hợp lý và dịch vụ tuyệt vời!</p>
                </div>
            </div>
            <div class="customer3">
              <img src="images/z4841375820444_e21665dd0bde270eba262d780756389d.jpg" alt="">
              <div class="name" >
                <h4 style="margin-left: 8px;">Nguyễn Vy</h4>
                <span >THIẾT KẾ HÌNH ẢNH</span>
              </div>
              <div class="comment">
                <p>Mình là người khá kén chọn trong việc mua sắm nhưng shop này làm mình rất vui khi mua hàng, đó là một thành công lớn cho shop này.</p>
              </div>
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
      <!-- nuton top -->
      <div>
        <button
          onclick="topFunction()"
          id="myBtn"
          title="Go to top"
          style="z-index: 111111111"
          class="rounded-circle"
        >
          <i class="fa fa-arrow-up" style="color: #010409"></i>
        </button>
      </div>



  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
      <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
      <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
        stroke="#F96D00" />
    </svg></div>
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
// let loggedInUser = localStorage.getItem("loggedInUser");
// let logoutedNavItem = document.getElementById("logouted");
// let registerNavItem = document.getElementById("register");
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

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
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
var loggedInUser = localStorage.getItem("loggedInUser");
var logoutedNavItem = document.getElementById("logouted");
var registerNavItem = document.getElementById("register");


if (loggedInUser) {
 let loggedInUserInfo = document.getElementById("loggedInUserInfo");
  loggedInUserInfo.textContent = "Chào " + loggedInUser + "!";

  // Ẩn nút đăng nhập và hiển thị thông tin người dùng đã đăng nhập
  let loginedNavItem = document.getElementById("logined");
  logoutedNavItem.style.display="inline";
  loginedNavItem.style.display = "none";
  registerNavItem.style.display="none";
} else {
  // Nếu không có thông tin đăng nhập thì hiển thị nút đăng nhập và ẩn thông tin người dùng
  let loggedInUserInfo = document.getElementById("loggedInUserInfo");
  loggedInUserInfo.style.display = "none";
  logoutedNavItem.style.display="none";
}


  </script>
</body>

</html>