<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Thế giới đồng hồ</title>
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
    <link href="lib/arcontactus.css" rel="stylesheet" />
    <link rel="stylesheet" href="./lib/slick.css" />
    <link rel="stylesheet" href="./css/manh.css" />
    <link
      rel="stylesheet"
      href="./bootstrap-5.3.2-dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
      integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link rel="stylesheet" href="css/animate.css" />

    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <link rel="stylesheet" href="css/magnific-popup.css" />

    <link rel="stylesheet" href="css/aos.css" />

    <link rel="stylesheet" href="css/ionicons.min.css" />

    <link rel="stylesheet" href="css/bootstrap-datepicker.css" />
    <link rel="stylesheet" href="css/jquery.timepicker.css" />
    <link rel="stylesheet" href="./asset/khang.css" />
    <link rel="stylesheet" href="fontawesome-free-6.2.0-web/css/all.css" />
    <!-- boostrap cũ lỗi --> <!-- <link rel="stylesheet" href="css/style.css" /> -->
    <link rel="stylesheet" href="css/mystyle.css" />
    <link rel="stylesheet" href="css/flaticon.css" />
    <link rel="stylesheet" href="css/icomoon.css" />
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
    
    
    <div class="banner">
      <div>
        <img
          src="./asset/image-banner/pc-gshock-40th-banner-1920-816-01-banner1.gif"
          alt=""
          style="width: 100%; height: 500px; object-fit: cover"
        />
      </div>
      <div>
        <img
          src="./asset/image-banner/banner-flare-red-pc.png"
          alt=""
          style="width: 100%; height: 500px; object-fit: cover"
        />
      </div>
      <div>
        <img
          src="./asset/image-banner/Casio_Vintage_Banner_1.png"
          alt=""
          style="width: 100%; height: 500px; object-fit: cover"
        />
      </div>
      <div>
        <img
          src="./asset/image-banner/she-4539-1600-679.png"
          alt=""
          style="width: 100%; height: 500px; object-fit: cover"
        />
      </div>
    </div>

  



    <!--  section-2-->

    <div class="container pt-3 section-2 section-2-home mt-4">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="item-left">
            <div
              class="img"
              style="
                background-image: url(./asset/img-product/seiko-presage-cocktail-gia-bao-nhieu-co-gi-dac-biet-3.webp);
                width: 100%;
                height: 532px;
                background-size: cover;
                border-radius: 10px;
                background-position: 100% 100%;
              "
            ></div>
            <div>
              <div class="contain">
                <h3 style="color: white">BỘ SƯU TẬP MỚI</h3>
                <p class="text-center" style="color: grey">Xem ngay</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6 item-right">
          <div class="row row-1" style="margin-bottom: 32px">
            <div class="col-6">
              <div class="zoom">
                <div
                  style="
                    background-image: url(./asset/img-product/9000-dong-ho-nam-dep-chinh-hang-100-bh-5-nam-gop-0.webp);
                    width: 100%;
                    height: 210px;
                    background-size: cover;
                    border-radius: 10px;
                  "
                  class="img-1"
                ></div>
                
              </div>
            </div>
            <div class="col-6">
              <div class="zoom">
                <div
                  style="
                    background-image: url(./asset/img-product/9000-dong-ho-nu-dep-chinh-hang-100-bh-5-nam-gop-0.webp);
                    width: 100%;
                    height: 210px;
                    background-size: cover;
                    border-radius: 10px;
                  "
                  class="img-2"
                ></div>
              </div>
            </div>
          </div>
          <div class="row row-2">
            <div class="col-12">
              <div class="zoom">
                <div
                  style="
                    background-image: url(./asset/img-product/dong-ho-cap-chinh-hang-100-bh-5-nam.webp);
                    width: 100%;
                    height: 290px;
                    background-size: cover;
                    border-radius: 10px;
                  "
                  class="img-1"
                ></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--  -->

    <!-- section-3 -->
    <div class="container section-3 mt60 mb15">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-3">
          <div>
            <div class="image-cover">
              <img src="./asset/img-product/dong-ho-nam-ban-chay.webp" alt="" />
            </div>
          </div>
          <p class="text-center mt-1">BST ĐỒNG HỒ NAM HOT</p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <div>
            <div class="image-cover">
              <img src="./asset/img-product/dong-ho-nu-ban-chay.webp" alt="" />
            </div>
          </div>
          <p class="text-center mt-1">BST ĐỒNG HỒ NỮ HOT</p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <div>
            <div class="image-cover">
              <img src="./asset/img-product/bst-dong-ho-moi.webp" alt="" />
            </div>
          </div>
          <p class="text-center mt-1">CÁC MẪU ĐỒNG HỒ MỚI VỀ</p>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <div>
            <div class="image-cover">
              <img
                src="./asset/img-product/trang-suc-nu-ban-chay.webp"
                alt=""
              />
            </div>
          </div>
          <p class="text-center mt-1">CÁC MẪU TRANG SỨC MỚI VỀ</p>
        </div>
      </div>
    </div>
    <div
      class="container"
      style="width: 1103px; height: 1px; background-color: gray"
    ></div>
    <!--  -->

    <!-- section-4 -->
    <div class="container section-4">
      <!--hang1-->
      <div class="row">
        <h2
          class="text-center mt-3 mb-3"
          style="color: #ffad33eb; font-size: 1.5em; font-weight: 700"
        >
          ĐỒNG HỒ NAM BÁN CHẠY
        </h2>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <!--sp1-->
          <div class="box-img">
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/34_MTP-1381D-1AVDF-1.webp"
                alt=""
                class="img-1"
            /></a>
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/CASIO-MTP-1381D-1AVDF-2-1.webp"
                alt=""
                class="img-2"
            /></a>
          </div>
          <div class="content">
            <div class="title">
              <a
                href="product-single-new.php"
                style="text-decoration: none"
              >
                <p
                  class="text-center"
                  style="color: #606060; margin-bottom: 0.5rem"
                >
                  Casio MTP-1381D-1AVDF – Nam – Quartz (Pin) – Mặt Số 39.9 mm,
                  Lịch Ngày Thứ, Chống Nước 5 ATM
                </p>
              </a>
              <p
                class="price text-center"
                style="color: #606060; font-size: 17px; font-weight: 500"
              >
                1.710.000 ₫
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <!--sp2-->
          <div class="box-img">
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/9_MTP-1381L-9AVDF-1-.webp"
                alt=""
                class="img-1"
            /></a>
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/MTP-1381L-7AVDF-9AVDF-1-2.webp"
                alt=""
                class="img-2"
            /></a>
          </div>
          <div class="content">
            <div class="title">
              <a href="#" style="text-decoration: none">
                <p
                  class="text-center"
                  style="color: #606060; margin-bottom: 0.5rem"
                >
                  Casio MTP-1381L-9AVDF – Nam – Quartz (Pin) – Mặt Số 40mm, Kính
                  Cứng, Chống Nước 5ATM
                </p>
              </a>
              <p
                class="price text-center"
                style="color: #606060; font-size: 17px; font-weight: 500"
              >
                1.607.000 ₫
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <!--sp3-->
          <div class="box-img">
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/39_MTP-V001L-1BUDF-1-.webp"
                alt=""
                class="img-1"
            /></a>
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/CASIO-MTP-V001L-1BUDF-2.webp"
                alt=""
                class="img-2"
            /></a>
          </div>
          <div class="content">
            <div class="title">
              <a href="#" style="text-decoration: none">
                <p
                  class="text-center"
                  style="color: #606060; margin-bottom: 0.5rem"
                >
                  Casio MTP-V001L-1BUDF – Nam – Quartz (Pin) – Mặt Số 38mm, Kính
                  Cứng, Chống Nước 3ATM
                </p>
              </a>
              <p
                class="price text-center"
                style="color: #606060; font-size: 17px; font-weight: 500"
              >
                648.000 ₫
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <!--sp4-->
          <div class="box-img">
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/MTP-1302D-1A1VDF-1-.webp"
                alt=""
                class="img-1"
            /></a>
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/MTP-1302D-1A1VDF-2.webp"
                alt=""
                class="img-2"
            /></a>
          </div>
          <div class="content">
            <div class="title">
              <a href="#" style="text-decoration: none">
                <p
                  class="text-center"
                  style="color: #606060; margin-bottom: 0.5rem"
                >
                  Casio MTP-1302D-1A1VDF – Nam – Quartz (Pin) – Mặt Số 38.5 mm,
                  Kính Cứng, Chống Nước 5ATM
                </p>
              </a>
              <p
                class="price text-center"
                style="color: #606060; font-size: 17px; font-weight: 500"
              >
                1.347.000 ₫
              </p>
            </div>
          </div>
        </div>
      </div>
      <!--hang2-->
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-3">
          <!--sp1-->
          <div class="box-img">
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/59_MTP-1239D-7ADF-1-.webp"
                alt=""
                class="img-1"
            /></a>
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/MTP-1239D-7ADF-2.webp"
                alt=""
                class="img-2"
            /></a>
          </div>
          <div class="content">
            <div class="title">
              <a href="#" style="text-decoration: none">
                <p
                  class="text-center"
                  style="color: #606060; margin-bottom: 0.5rem"
                >
                  Casio MTP-1239D-7ADF – Nam – Quartz (Pin) – Mặt Số 38.5mm,
                  Kính Cứng, Chống Nước 3ATM
                </p>
              </a>
              <p
                class="price text-center"
                style="color: #606060; font-size: 17px; font-weight: 500"
              >
                1.245.000 ₫
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <!--sp2-->
          <div class="box-img">
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/MTP-1375D-1AVDF-1-.webp"
                alt=""
                class="img-1"
            /></a>
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/243_MTP-1375D-1AVDF-2-.webp"
                alt=""
                class="img-2"
            /></a>
          </div>
          <div class="content">
            <div class="title">
              <a href="#" style="text-decoration: none">
                <p
                  class="text-center"
                  style="color: #606060; margin-bottom: 0.5rem"
                >
                  Casio MTP-1375D-1AVDF – Nam – Quartz (Pin) –Mặt Số: 42mm- Dây
                  Kim Loại - Chống Nước: 5 ATM
                </p>
              </a>
              <p
                class="price text-center"
                style="color: #606060; font-size: 17px; font-weight: 500"
              >
                2.177.000 ₫
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <!--sp3-->
          <div class="box-img">
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/MTP-1183E-7ADF-1-.webp"
                alt=""
                class="img-1"
            /></a>
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/CASIO-MTP-1183E-7ADF-1-2.webp"
                alt=""
                class="img-2"
            /></a>
          </div>
          <div class="content">
            <div class="title">
              <a href="#" style="text-decoration: none">
                <p
                  class="text-center"
                  style="color: #606060; margin-bottom: 0.5rem"
                >
                  Casio MTP-1183E-7ADF – Nam – Quartz (Pin) – Mặt Số 38mm, Kính
                  Cứng, Chống Nước 3ATM
                </p>
              </a>
              <p
                class="price text-center"
                style="color: #606060; font-size: 17px; font-weight: 500"
              >
                960.000 ₫
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <!--sp4-->
          <div class="box-img">
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/MTP-1303D-7BVDF-1-.webp"
                alt=""
                class="img-1"
            /></a>
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/CASIO-MTP-1303D-7BVDF-2.webp"
                alt=""
                class="img-2"
            /></a>
          </div>
          <div class="content">
            <div class="title">
              <a href="#" style="text-decoration: none">
                <p
                  class="text-center"
                  style="color: #606060; margin-bottom: 0.5rem"
                >
                  Casio MTP-1303D-7BVDF – Nam – Quartz (Pin) – Mặt Số 47mm, Kính
                  Cứng, Chống Nước 5ATM
                </p>
              </a>
              <p
                class="price text-center"
                style="color: #606060; font-size: 17px; font-weight: 500"
              >
                1.243.000 ₫
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--  -->

    <!-- section-5-->
    <div class="container section-4">
      <div class="row">
        <!--hang1-->
        <h2
          class="text-center mt-3 mb-3"
          style="color: #ffad33eb; font-size: 1.5em; font-weight: 700"
        >
          ĐỒNG HỒ NỮ BÁN CHẠY
        </h2>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <!--sp1-->
          <div class="box-img">
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/LTP-V005L-7B2UDF-1-.webp"
                alt=""
                class="img-1"
            /></a>
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/CASIO-LTP-V005L-7B2UDF-2.webp"
                alt=""
                class="img-2"
            /></a>
          </div>
          <div class="content">
            <div class="title">
              <a href="#" style="text-decoration: none">
                <p
                  class="text-center"
                  style="color: #606060; margin-bottom: 0.5rem"
                >
                  Casio LTP-V005L-7B2UDF – Nữ – Quartz (Pin) – Dây Da -Mặt Số
                  28.2 mm - Chống Nước 3 ATM
                </p>
              </a>
              <p
                class="price text-center"
                style="color: #606060; font-size: 17px; font-weight: 500"
              >
                726.000 ₫
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <!--sp2-->
          <div class="box-img">
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/LTP-V005D-2B3UDF-1-.webp"
                alt=""
                class="img-1"
            /></a>
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/LTP-V005D-2B3-2-1642311106620.jpeg"
                alt=""
                class="img-2"
            /></a>
          </div>
          <div class="content">
            <div class="title">
              <a href="#" style="text-decoration: none">
                <p
                  class="text-center"
                  style="color: #606060; margin-bottom: 0.5rem"
                >
                  Casio LTP-V005D-2B3UDF – Nữ – Quartz (Pin) – Mặt Số 28.2mm,
                  Kính Cứng, Chống Nước 3ATM
                </p>
              </a>
              <p
                class="price text-center"
                style="color: #606060; font-size: 17px; font-weight: 500"
              >
                803.000 ₫
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <!--sp3-->
          <div class="box-img">
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/LTP-1129A-7ARDF-1-.webp"
                alt=""
                class="img-1"
            /></a>
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/LTP-1274D-7ADF-LTP-2.webp"
                alt=""
                class="img-2"
            /></a>
          </div>
          <div class="content">
            <div class="title">
              <a href="#" style="text-decoration: none">
                <p
                  class="text-center"
                  style="color: #606060; margin-bottom: 0.5rem"
                >
                  Casio LTP-1129A-7ARDF – Nữ – Quartz (Pin) – Mặt Số 26mm, Kính
                  Cứng, Chống Nước 3ATM
                </p>
              </a>
              <p
                class="price text-center"
                style="color: #606060; font-size: 17px; font-weight: 500"
              >
                960.000 ₫
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <!--sp4-->
          <div class="box-img">
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/34_LTP-1183G-7ADF-1.webp"
                alt=""
                class="img-1"
            /></a>
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/LTP-1183G-7ADF-2-.webp"
                alt=""
                class="img-2"
            /></a>
          </div>
          <div class="content">
            <div class="title">
              <a
                href="product-single-new.php"
                style="text-decoration: none"
              >
                <p
                  class="text-center"
                  style="color: #606060; margin-bottom: 0.5rem"
                >
                  Casio LTP-1183G-7ADF – Nữ – Quartz (Pin) – Mặt Số 28mm, Kính
                  Cứng, Chống Nước 3ATM
                </p>
              </a>
              <p
                class="price text-center"
                style="color: #606060; font-size: 17px; font-weight: 500"
              >
                1.529.000 ₫
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="row">
        <!--hang2-->
        <div class="col-sm-12 col-md-6 col-lg-3">
          <!--sp1-->
          <div class="box-img">
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/LTP-1215A-7ADF-1.webp"
                alt=""
                class="img-1"
            /></a>
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/CASIO-LTP-1215A-7ADF-2.webp"
                alt=""
                class="img-2"
            /></a>
          </div>
          <div class="content">
            <div class="title">
              <a
                href="product-single-new.php"
                style="text-decoration: none"
              >
                <p
                  class="text-center"
                  style="color: #606060; margin-bottom: 0.5rem"
                >
                  Casio LTP-1215A-7ADF – Nữ – Quartz (Pin) – Dây Kim Loại – Mặt
                  Số 27 mm, Chống Nước 3 ATM
                </p>
              </a>
              <p
                class="price text-center"
                style="color: #606060; font-size: 17px; font-weight: 500"
              >
                1.088.000 ₫
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <!--sp2-->
          <div class="box-img">
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/67_LTP-1183A-7ADF-1.webp"
                alt=""
                class="img-1"
            /></a>
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/108_LTP-1183A-7ADF-2.webp"
                alt=""
                class="img-2"
            /></a>
          </div>
          <div class="content">
            <div class="title">
              <a
                href="product-single-new.php"
                style="text-decoration: none"
              >
                <p
                  class="text-center"
                  style="color: #606060; margin-bottom: 0.5rem"
                >
                  Casio LTP-1183A-7ADF – Nữ – Quartz (Pin) – Mặt Số 28mm, Kính
                  Cứng, Chống Nước 3ATM
                </p>
              </a>
              <p
                class="price text-center"
                style="color: #606060; font-size: 17px; font-weight: 500"
              >
                1.140.000 ₫
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <!--sp3-->
          <div class="box-img">
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/6614-LTP-1314L-8AVDF-1.webp"
                alt=""
                class="img-1"
            /></a>
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/CASIO-LTP-1314L-8AVDF-2.webp"
                alt=""
                class="img-2"
            /></a>
          </div>
          <div class="content">
            <div class="title">
              <a
                href="product-single-new.php"
                style="text-decoration: none"
              >
                <p
                  class="text-center"
                  style="color: #606060; margin-bottom: 0.5rem"
                >
                  Casio World Time AE-1200WHD-1AVDF – Nam – Quartz (Pin) – Mặt
                  Số 45 mm, Bộ Bấm Giờ, Chống Nước 10 ATM
                </p>
              </a>
              <p
                class="price text-center"
                style="color: #606060; font-size: 17px; font-weight: 500"
              >
                1.373.000 ₫
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <!--sp4-->
          <div class="box-img">
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/24_LTP-1308D-4AVDF-1.webp"
                alt=""
                class="img-1"
            /></a>
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/LTP-1308D-4AVDF-2-.png"
                alt=""
                class="img-2"
            /></a>
          </div>
          <div class="content">
            <div class="title">
              <a
                href="product-single-new.php"
                style="text-decoration: none"
              >
                <p
                  class="text-center"
                  style="color: #606060; margin-bottom: 0.5rem"
                >
                  Casio LTP-1308D-4AVDF – Nữ – Quartz (Pin) – Dây Kim Loại – Mặt
                  Số 31.2mm -Chống Nước 5 ATM
                </p>
              </a>
              <p
                class="price text-center"
                style="color: #606060; font-size: 17px; font-weight: 500"
              >
                1.347.000 ₫
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--  -->

    <!-- section-6-->
    <div class="container section-4">
      <div class="row">
        <h2
          class="text-center mt-3 mb-3"
          style="color: #ffad33eb; font-size: 1.5em; font-weight: 700"
        >
          SẢN PHẨM KHUYẾN MÃI
        </h2>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <div class="box-img">
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/GA-B2100-1A1.-1-webp.webp"
                alt=""
                class="img-1"
            /></a>
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/GA-B2100-1A1_10.-2-webp.webp"
                alt=""
                class="img-2"
            /></a>
            <span class="prosale">-20%</span>
          </div>
          <div class="content">
            <div class="title">
              <a
                href="product-single-new.php"
                style="text-decoration: none"
              >
                <p
                  class="text-center"
                  style="color: #606060; margin-bottom: 0.5rem"
                >
                  G-Shock GA-B2100-1A1DR – Nam – Tough Solar – Mặt Số 45,4mm, Vỏ
                  Carbon, Chống Nước 20ATM, Kết Nối Bluetooth®
                </p>
              </a>
              <p
                class="price text-center"
                style="color: #606060; font-size: 17px; font-weight: 500"
              >
                4.224.000 đ <br /><span
                  style="
                    text-decoration-line: line-through;
                    color: #a49f9f;
                    font-size: 15px;
                  "
                  >5.280.000 ₫</span
                >
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <div class="box-img">
            <a href="product-single-new.php"
              ><img
                src="./image_manh/dw-5600nc-5_1.2.webp"
                alt=""
                class="img-1"
            /></a>
            <a href="product-single-new.php"
              ><img src="./image_manh/dw-5600nc-2.jpg" alt="" class="img-2"
            /></a>
            <span class="prosale">-20%</span>
          </div>
          <div class="content">
            <div class="title">
              <a
                href="product-single-new.php"
                style="text-decoration: none"
              >
                <p
                  class="text-center"
                  style="color: #606060; margin-bottom: 0.5rem"
                >
                  G-Shock DW-5600NC-5 – Nữ – Quartz (Pin) – Mặt Số 48.9mm x
                  42.8mm, Bộ Bấm Giờ, Chống Nước 20ATM
                </p>
              </a>
              <p
                class="price text-center"
                style="color: #606060; font-size: 17px; font-weight: 500"
              >
                2.704.000 đ <br /><span
                  style="
                    text-decoration-line: line-through;
                    color: #a49f9f;
                    font-size: 15px;
                  "
                  >3.381.000 ₫</span
                >
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <div class="box-img">
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/EFR-S567D-1AV-1.webp"
                alt=""
                class="img-1"
            /></a>
            <a
              href="product-single-new.php"
              ><img
                src="./image_manh/CASIO-EFR-S567D-1AVUDF-2.jpg"
                alt=""
                class="img-2"
            /></a>
            <span class="prosale">-28%</span>
          </div>
          <div class="content">
            <div class="title">
              <a
                href=product-single-new.php"
                style="text-decoration: none"
              >
                <p
                  class="text-center"
                  style="color: #606060; margin-bottom: 0.5rem"
                >
                  Casio Edifice EFR-S567D-1AVUDF – Nam – Kính Sapphire – Quartz
                  (Pin) – Mặt Số 45.6mm, Chống Nước 10ATM
                </p>
              </a>
              <p
                class="price text-center"
                style="color: #606060; font-size: 17px; font-weight: 500"
              >
                3.731.000 đ <br /><span
                  style="
                    text-decoration-line: line-through;
                    color: #a49f9f;
                    font-size: 15px;
                  "
                  >5.182.000 ₫</span
                >
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <div class="box-img">
            <a href="product-single-new.php"
              ><img src="./image_manh/gma-s2100rb-1webp.webp" alt="" class="img-1"
            /></a>
            <a href="product-single-new.php"
              ><img src="./image_manh/gma-s2100rb-2.jpg" alt="" class="img-2"
            /></a>
            <span class="prosale">-20%</span>
          </div>
          <div class="content">
            <div class="title">
              <a
                href="product-single-new.php"
                style="text-decoration: none"
              >
                <p
                  class="text-center"
                  style="color: #606060; margin-bottom: 0.5rem"
                >
                  GMA-S2100RB-1A – Nữ – Mặt Số 42.9mm, Vỏ Carbon, Mặt kính
                  khoáng , Chống Nước 20ATM
                </p>
              </a>
              <p
                class="price text-center"
                style="color: #606060; font-size: 17px; font-weight: 500"
              >
                3,816,000 đ <br /><span
                  style="
                    text-decoration-line: line-through;
                    color: #a49f9f;
                    font-size: 15px;
                  "
                  >4,771,000 ₫</span
                >
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- section-6-->
    <!-- <div class="container section-4">
      <div class="row">
        <h2 class="text-center mt-3 mb-3">Ví da thật siêu bền</h2>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <div class="box-img">
            <a href="#"
              ><img
                src="./asset/img-product/AE-1200WHD-1AVDF.webp"
                alt=""
                class="img-1"
            /></a>
            <a href="#"
              ><img
                src="./asset/img-product/AE-1200WHD-1AVDF-1.webp"
                alt=""
                class="img-2"
            /></a>
          </div>
          <div class="content">
            <div class="title">
              <a href="#" style="text-decoration: none">
                <p
                  class="text-center"
                  style="color: #606060; margin-bottom: 0.5rem"
                >
                  Casio World Time AE-1200WHD-1AVDF – Nam – Quartz (Pin) – Mặt
                  Số 45 mm, Bộ Bấm Giờ, Chống Nước 10 ATM
                </p>
              </a>
              <p
                class="price text-center"
                style="color: #606060; font-size: 17px; font-weight: 500"
              >
                1.373.000 ₫
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <div class="box-img">
            <a href="#"
              ><img
                src="./asset/img-product/AE-1200WHD-1AVDF.webp"
                alt=""
                class="img-1"
            /></a>
            <a href="#"
              ><img
                src="./asset/img-product/AE-1200WHD-1AVDF-1.webp"
                alt=""
                class="img-2"
            /></a>
          </div>
          <div class="content">
            <div class="title">
              <a href="#" style="text-decoration: none">
                <p
                  class="text-center"
                  style="color: #606060; margin-bottom: 0.5rem"
                >
                  Casio World Time AE-1200WHD-1AVDF – Nam – Quartz (Pin) – Mặt
                  Số 45 mm, Bộ Bấm Giờ, Chống Nước 10 ATM
                </p>
              </a>
              <p
                class="price text-center"
                style="color: #606060; font-size: 17px; font-weight: 500"
              >
                1.373.000 ₫
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <div class="box-img">
            <a href="#"
              ><img
                src="./asset/img-product/AE-1200WHD-1AVDF.webp"
                alt=""
                class="img-1"
            /></a>
            <a href="#"
              ><img
                src="./asset/img-product/AE-1200WHD-1AVDF-1.webp"
                alt=""
                class="img-2"
            /></a>
          </div>
          <div class="content">
            <div class="title">
              <a href="#" style="text-decoration: none">
                <p
                  class="text-center"
                  style="color: #606060; margin-bottom: 0.5rem"
                >
                  Casio World Time AE-1200WHD-1AVDF – Nam – Quartz (Pin) – Mặt
                  Số 45 mm, Bộ Bấm Giờ, Chống Nước 10 ATM
                </p>
              </a>
              <p
                class="price text-center"
                style="color: #606060; font-size: 17px; font-weight: 500"
              >
                1.373.000 ₫
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <div class="box-img">
            <a href="#"
              ><img
                src="./asset/img-product/AE-1200WHD-1AVDF.webp"
                alt=""
                class="img-1"
            /></a>
            <a href="#"
              ><img
                src="./asset/img-product/AE-1200WHD-1AVDF-1.webp"
                alt=""
                class="img-2"
            /></a>
          </div>
          <div class="content">
            <div class="title">
              <a href="#" style="text-decoration: none">
                <p
                  class="text-center"
                  style="color: #606060; margin-bottom: 0.5rem"
                >
                  Casio World Time AE-1200WHD-1AVDF – Nam – Quartz (Pin) – Mặt
                  Số 45 mm, Bộ Bấm Giờ, Chống Nước 10 ATM
                </p>
              </a>
              <p
                class="price text-center"
                style="color: #606060; font-size: 17px; font-weight: 500"
              >
                1.373.000 ₫
              </p>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!--  -->

    <!-- section-6-->
    <!-- <div class="container section-4">
      <div class="row">
        <h2 class="text-center mt-3 mb-3">Phụ kiện hải triều</h2>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <div class="box-img">
            <a href="#"
              ><img
                src="./asset/img-product/AE-1200WHD-1AVDF.webp"
                alt=""
                class="img-1"
            /></a>
            <a href="#"
              ><img
                src="./asset/img-product/AE-1200WHD-1AVDF-1.webp"
                alt=""
                class="img-2"
            /></a>
          </div>
          <div class="content">
            <div class="title">
              <a href="#" style="text-decoration: none">
                <p
                  class="text-center"
                  style="color: #606060; margin-bottom: 0.5rem"
                >
                  Casio World Time AE-1200WHD-1AVDF – Nam – Quartz (Pin) – Mặt
                  Số 45 mm, Bộ Bấm Giờ, Chống Nước 10 ATM
                </p>
              </a>
              <p
                class="price text-center"
                style="color: #606060; font-size: 17px; font-weight: 500"
              >
                1.373.000 ₫
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <div class="box-img">
            <a href="#"
              ><img
                src="./asset/img-product/AE-1200WHD-1AVDF.webp"
                alt=""
                class="img-1"
            /></a>
            <a href="#"
              ><img
                src="./asset/img-product/AE-1200WHD-1AVDF-1.webp"
                alt=""
                class="img-2"
            /></a>
          </div>
          <div class="content">
            <div class="title">
              <a href="#" style="text-decoration: none">
                <p
                  class="text-center"
                  style="color: #606060; margin-bottom: 0.5rem"
                >
                  Casio World Time AE-1200WHD-1AVDF – Nam – Quartz (Pin) – Mặt
                  Số 45 mm, Bộ Bấm Giờ, Chống Nước 10 ATM
                </p>
              </a>
              <p
                class="price text-center"
                style="color: #606060; font-size: 17px; font-weight: 500"
              >
                1.373.000 ₫
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <div class="box-img">
            <a href="#"
              ><img
                src="./asset/img-product/AE-1200WHD-1AVDF.webp"
                alt=""
                class="img-1"
            /></a>
            <a href="#"
              ><img
                src="./asset/img-product/AE-1200WHD-1AVDF-1.webp"
                alt=""
                class="img-2"
            /></a>
          </div>
          <div class="content">
            <div class="title">
              <a href="#" style="text-decoration: none">
                <p
                  class="text-center"
                  style="color: #606060; margin-bottom: 0.5rem"
                >
                  Casio World Time AE-1200WHD-1AVDF – Nam – Quartz (Pin) – Mặt
                  Số 45 mm, Bộ Bấm Giờ, Chống Nước 10 ATM
                </p>
              </a>
              <p
                class="price text-center"
                style="color: #606060; font-size: 17px; font-weight: 500"
              >
                1.373.000 ₫
              </p>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-3">
          <div class="box-img">
            <a href="#"
              ><img
                src="./asset/img-product/AE-1200WHD-1AVDF.webp"
                alt=""
                class="img-1"
            /></a>
            <a href="#"
              ><img
                src="./asset/img-product/AE-1200WHD-1AVDF-1.webp"
                alt=""
                class="img-2"
            /></a>
          </div>
          <div class="content">
            <div class="title">
              <a href="#" style="text-decoration: none">
                <p
                  class="text-center"
                  style="color: #606060; margin-bottom: 0.5rem"
                >
                  Casio World Time AE-1200WHD-1AVDF – Nam – Quartz (Pin) – Mặt
                  Số 45 mm, Bộ Bấm Giờ, Chống Nước 10 ATM
                </p>
              </a>
              <p
                class="price text-center"
                style="color: #606060; font-size: 17px; font-weight: 500"
              >
                1.373.000 ₫
              </p>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!--  -->

    <!-- đường line -->
    <div
      class="container"
      style="width: 1103px; height: 1px; background-color: gray"
    ></div>
    <!--  -->

    <!-- section-7 -->
    <!-- <div class="container">
      <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
          <div class="row section-7-thnt">
            <div>
              <h2 class="mb30 mt30 text-center" 
              style="color: grey; font-size: 1.5em; font-weight: 700">
              THƯƠNG HIỆU NỔI TIẾNG</h2>
            </div>
            <div class="section-7-thnt-slider">
              <div class="col-2">
                <img
                  src="./asset/image/Casio-1.webp"
                  style="width: 100%; height: 150px; object-fit: cover"
                  alt=""
                />
              </div>
              <div class="col-2">
                <img
                  src="./asset/img-product/koi.webp"
                  style="width: 100%; height: 150px; object-fit: cover"
                  alt=""
                />
              </div>
              <div class="col-2">
                <img
                  src="./asset/img-product/koi.webp"
                  style="width: 100%; height: 150px; object-fit: cover"
                  alt=""
                />
              </div>
              <div class="col-2">
                <img
                  src="./asset/img-product/koi.webp"
                  style="width: 100%; height: 150px; object-fit: cover"
                  alt=""
                />
              </div>
              <div class="col-2">
                <img
                  src="./asset/img-product/koi.webp"
                  style="width: 100%; height: 150px; object-fit: cover"
                  alt=""
                />
              </div>
              <div class="col-2">
                <img
                  src="./asset/img-product/koi.webp"
                  style="width: 100%; height: 150px; object-fit: cover"
                  alt=""
                />
              </div>
              <div class="col-2">
                <img
                  src="./asset/img-product/koi.webp"
                  style="width: 100%; height: 150px; object-fit: cover"
                  alt=""
                />
              </div>
              <div class="col-2">
                <img
                  src="./asset/img-product/koi.webp"
                  style="width: 100%; height: 150px; object-fit: cover"
                  alt=""
                />
              </div>
              <div class="col-2">
                <img
                  src="./asset/img-product/koi.webp"
                  style="width: 100%; height: 150px; object-fit: cover"
                  alt=""
                />
              </div>
              <div class="col-2">
                <img
                  src="./asset/img-product/koi.webp"
                  style="width: 100%; height: 150px; object-fit: cover"
                  alt=""
                />
              </div>
              <div class="col-2">
                <img
                  src="./asset/img-product/koi.webp"
                  style="width: 100%; height: 150px; object-fit: cover"
                  alt=""
                />
              </div>
              <div class="col-2">
                <img
                  src="./asset/img-product/koi.webp"
                  style="width: 100%; height: 150px; object-fit: cover"
                  alt=""
                />
              </div>
              <div class="col-2">
                <img
                  src="./asset/img-product/koi.webp"
                  style="width: 100%; height: 150px; object-fit: cover"
                  alt=""
                />
              </div>
              <div class="col-2">
                <img
                  src="./asset/img-product/koi.webp"
                  style="width: 100%; height: 150px; object-fit: cover"
                  alt=""
                />
              </div>
            </div>
          </div>
        </div>
        <div class="col-1"></div>
      </div>
    </div> -->
    <!--  -->

    <!-- section-8 -->
    <!-- <div class="container">
      <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
          <div class="row section-8-thnt">
            <div>
              <h2 class="mb30 mt30 text-center">Thương hiệu đồng hồ thụy sĩ</h2>
            </div>

            <div class="col-2">
              <img
                src="./asset/img-product/koi.webp"
                style="width: 100%; height: 150px; object-fit: cover"
                alt=""
              />
            </div>
            <div class="col-2">
              <img
                src="./asset/img-product/koi.webp"
                style="width: 100%; height: 150px; object-fit: cover"
                alt=""
              />
            </div>
            <div class="col-2">
              <img
                src="./asset/img-product/koi.webp"
                style="width: 100%; height: 150px; object-fit: cover"
                alt=""
              />
            </div>
            <div class="col-2">
              <img
                src="./asset/img-product/koi.webp"
                style="width: 100%; height: 150px; object-fit: cover"
                alt=""
              />
            </div>
            <div class="col-2">
              <img
                src="./asset/img-product/koi.webp"
                style="width: 100%; height: 150px; object-fit: cover"
                alt=""
              />
            </div>
            <div class="col-2">
              <img
                src="./asset/img-product/koi.webp"
                style="width: 100%; height: 150px; object-fit: cover"
                alt=""
              />
            </div>
            <div class="col-2">
              <img
                src="./asset/img-product/koi.webp"
                style="width: 100%; height: 150px; object-fit: cover"
                alt=""
              />
            </div>
            <div class="col-2">
              <img
                src="./asset/img-product/koi.webp"
                style="width: 100%; height: 150px; object-fit: cover"
                alt=""
              />
            </div>
            <div class="col-2">
              <img
                src="./asset/img-product/koi.webp"
                style="width: 100%; height: 150px; object-fit: cover"
                alt=""
              />
            </div>
            <div class="col-2">
              <img
                src="./asset/img-product/koi.webp"
                style="width: 100%; height: 150px; object-fit: cover"
                alt=""
              />
            </div>
          </div>
        </div>
        <div class="col-1"></div>
      </div>
    </div> -->
    <!--  -->

    <!-- section-9 -->
    <div class="container section-4 section-9">
      <div class="row">
        <h2 class="text-center mt-3 mb-3" 
        style="color: #ffad33eb; font-size: 1.5em; font-weight: 700">BỘ SƯU TẬP MỚI</h2>
        <div class="slider-bstm">
          <div class="col-sm-12 col-md-6 col-lg-3" style="padding: 0 30px">
            <div class="box-img">
              <a href="#"
                ><img
                  src="./image_manh/bosuutapmoi1.1.webp"
                  alt=""
                  class="img-1"
              /></a>
              <a href="#"
                ><img
                  src="./image_manh/bosuutapmoi1.2.webp"
                  alt=""
                  class="img-2"
              /></a>
            </div>
            <div class="content">
              <div class="title">
                <a href="#" style="text-decoration: none">
                  <p
                    class="text-center"
                    style="color: #606060; margin-bottom: 0.5rem"
                  >
                  Đồng Hồ Nam Chính Hãng CASIO EDIFICE ECB-2200HTR-1A
                  </p>
                </a>
                <p
                  class="price text-center"
                  style="color: rgba(255, 0, 0, 0.532); font-size: 17px; font-weight: 500"
                >
                14.805.000₫
                </p>
              </div>
            </div>
          </div>
          <div class="col-sm-12 col-md-6 col-lg-3" style="padding: 0 30px">
            <div class="box-img">
              <a href="#"
                ><img
                  src="./image_manh/MTG-B2000YR-1A.webp"
                  alt=""
                  class="img-1"
              /></a>
              <a href="#"
                ><img
                  src="./image_manh/z4885181403919_6eee55da7d77e915744bd91fa7a73c6c.webp"
                  alt=""
                  class="img-2"
              /></a>
            </div>
            <div class="content">
              <div class="title">
                <a href="#" style="text-decoration: none">
                  <p
                    class="text-center"
                    style="color: #606060; margin-bottom: 0.5rem"
                  >
                  Đồng Hồ Nam Chính Hãng CASIO G-SHOCK MTG-B2000YR-1A
                  </p>
                </a>
                <p
                  class="price text-center"
                  style="color: rgba(255, 0, 0, 0.532); font-size: 17px; font-weight: 500"
                >
                45.661.000 ₫
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--  -->

    <!-- đường line -->
    <div
      class="container"
      style="width: 1103px; height: 1px; background-color: gray"
    ></div>
    <!--  -->

    <!-- section-10 loi vl-->
    <!-- <div class="container">
      <div class="row section-10-slider">
        <div>
          <img
            src="./asset/img-product/poca.webp"
            alt=""
            style="width: 80px; height: 80px; object-fit: cover"
          />
        </div>
        <div>
          <img
            src="./asset/img-product/poca.webp"
            alt=""
            style="width: 80px; height: 80px; object-fit: cover"
          />
        </div>
        <div>
          <img
            src="./asset/img-product/poca.webp"
            alt=""
            style="width: 80px; height: 80px; object-fit: cover"
          />
        </div>
        <div>
          <img
            src="./asset/img-product/poca.webp"
            alt=""
            style="width: 80px; height: 80px; object-fit: cover"
          />
        </div>
        <div>
          <img
            src="./asset/img-product/poca.webp"
            alt=""
            style="width: 80px; height: 80px; object-fit: cover"
          />
        </div>
        <div>
          <img
            src="./asset/img-product/poca.webp"
            alt=""
            style="width: 80px; height: 80px; object-fit: cover"
          />
        </div>
        <div>
          <img
            src="./asset/img-product/poca.webp"
            alt=""
            style="width: 80px; height: 80px; object-fit: cover"
          />
        </div>
        <div>
          <img
            src="./asset/img-product/poca.webp"
            alt=""
            style="width: 80px; height: 80px; object-fit: cover"
          />
        </div>
        <div>
          <img
            src="./asset/img-product/poca.webp"
            alt=""
            style="width: 80px; height: 80px; object-fit: cover"
          />
        </div>
        <div>
          <img
            src="./asset/img-product/poca.webp"
            alt=""
            style="width: 80px; height: 80px; object-fit: cover"
          />
        </div>
      </div>
    </div> -->
    <!--  -->

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
    <!--  -->
    <div id="arcontactus"></div>
    
    <script src="lib/jquery-2.0.0.min.js"></script>
    <script src="lib/arcontactus.js"></script>
    <script src="lib/script.js"></script>
    <script src="./bootstrap-5.3.2-dist/js/bootstrap.bundle.min.js"></script>
    <script src="./lib/slick.js"></script>
    <script src="./lib/slider-home.js"></script>
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
