<!DOCTYPE html>
<html lang="vi">

<head>
    <title>FURNI</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="./assets/frontend/css/product-item.css">

    <script type="text/javascript" src="./assets/frontend/js/main.js"></script>
    <link rel="stylesheet" href="./assets/frontend/fontawesome_free_5.13.0/css/all.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="./assets/frontend/slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="./assets/frontend/slick/slick-theme.css" />
    <script type="text/javascript" src="./assets/frontend/slick/slick.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="./assets/frontend/favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./assets/frontend/favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./assets/frontend/favicon_io/favicon-16x16.png">
    <link rel="manifest" href="./assets/frontend/favicon_io/site.webmanifest">
</head>

<body>
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v11.0" nonce="6ZXTskPM"></script>
    <nav class="navbar navbar-expand-md bg-white navbar-light">
        <div class="container">
            <a class="navbar-brand" href="index.php" style="color: #ae7b4e;">
                <img src="assets/frontend/logo/logo.jpg" alt="" style="width: 150px;">
            </a>
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <form class="form-inline ml-auto my-2 my-lg-0 mr-3">
                    <div class="input-group" style="width: 520px;" style="position: relative;">
                        <input type="text" autocomplete="off" class="form-control" id="key" aria-label="Small" placeholder="Sản phẩm cần tìm kiếm...">
                        <div class="input-group-append">
                            <button type="button" class="btn" style="background-color: #ae7b4e; color: white;">
                                <i class="fa fa-search" id="btnSearch"></i>
                            </button>
                        </div>
                        <div class="smart-search">
                            <ul>
                                <li><img src="assets/upload/products/1629542725_troi-dem-huyen-dieu.jpg" alt=""><a href="#">Cuốn Sách Khám Phá: Trời Đêm Huyền Diệu</a></li>
                                <li><img src="assets/upload/products/1629542725_troi-dem-huyen-dieu.jpg" alt=""><a href="#">Cuốn Sách Khám Phá: Trời Đêm Huyền Diệu</a></li>
                                <li><img src="assets/upload/products/1629542725_troi-dem-huyen-dieu.jpg" alt=""><a href="#">Cuốn Sách Khám Phá: Trời Đêm Huyền Diệu</a></li>
                            </ul>
                        </div>
                    </div>
                </form>
                <style>
                    .smart-search {
                        position: absolute;
                        width: 100%;
                        background: white;
                        height: 350px;
                        overflow: scroll;
                        z-index: 1;
                        top: 38px;
                        display: none;
                        box-shadow: 2px 3px 5px #504e4e;
                    }

                    .smart-search ul {
                        padding: 0px;
                        margin: 0px;
                        list-style: none;
                    }

                    .smart-search ul li {
                        border-bottom: 1px solid #dddddd;
                        margin-top: 10px;
                        padding-bottom: 10px;
                        display: flex;
                    }

                    .smart-search img {
                        width: 70px;
                        margin-right: 5px;
                    }

                    .smart-search a {
                        color: #000;
                    }

                    .smart-search a:hover {
                        color: #ae7b4e;
                        text-decoration: none;
                    }
                </style>
                <script>
                    $(document).ready(function() {
                        //bắt sự kiện click của id=btnSearch
                        $("#btnSearch").click(function() {
                            var key = $("#key").val();
                            //di chuyển đến url tìm kiếm
                            location.href = "index.php?controller=search&action=name&key=" + key;
                        });
                        //--------------
                        $(".form-control").keyup(function() {
                            var strKey = $("#key").val();
                            if (strKey.trim() == "")
                                $(".smart-search").attr("style", "display:none");
                            else {
                                $(".smart-search").attr("style", "display:block");
                                //---
                                //sử dụng ajax để lấy duex liệu
                                $.get("index.php?controller=search&action=ajaxSearch&key=" + strKey, function(data) {
                                    //clear các thẻ li bên trong thẻ ul
                                    $(".smart-search ul").empty();
                                    //thêm dữ liệu vừa lấy dc bằng ajax vào thẻ ul
                                    $(".smart-search ul").append(data);
                                });
                                //---
                            }
                        });
                        //--------------
                    });
                </script>

                <ul class="navbar-nav mb-1 ml-auto">
                        <div class="dropdown" style="margin-top: 6px;">
                            <li class="nav-item account" type="button" class="btn dropdown" data-toggle="dropdown">
                                <a href="#" class="btn btn-secondary rounded-circle">
                                    <i class="fa fa-user"></i>
                                </a>
                                    <a style="color: #343a40!important; font-size: 15px;" href="#">
                                        <a class="nav-link text-dark text-uppercase" href="#" style="display:inline-block">Tài
                                            khoản</a>
                            </li>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a href="index.php?controller=account&action=logout" class="dropdown-item nutdangxuat text-center">Đăng xuất</a>
                                    <a class="dropdown-item nutdangnhap text-center" style="margin-bottom: 10px;" href="">Đăng nhập</a><a class="dropdown-item nutdangky text-center mb-2" href="index.php?controller=account&action=register">Đăng ký</a>
                            </div>
                        </div>
                        <li class="nav-item giohang">
                            <a href="index.php?controller=cart" class="btn btn-secondary rounded-circle" style="margin-right: 2px;">
                                <i class="fa fa-shopping-cart"></i>
                               
                                <div class="cart-amount"></div>
                            </a>
                            <a class="nav-link text-dark giohang text-uppercase" href="index.php?controller=cart" style="display:inline-block">Giỏ
                                Hàng</a>
                        </li>
                        <div class="dropdown">
                            <li class="nav-item account" type="button" class="btn dropdown" data-toggle="dropdown">
                                <a href="#" class="btn btn-secondary rounded-circle">
                                    <i class="fa fa-user"></i>
                                </a>
                                <a class="nav-link text-dark text-uppercase" href="#" style="display:inline-block">Tài
                                    khoản</a>
                            </li>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item nutdangnhap text-center" style="margin-bottom: 10px;" href="index.php?controller=account&action=login">Đăng nhập</a><a class="dropdown-item nutdangky text-center mb-2" href="index.php?controller=account&action=register">Đăng ký</a>
                            </div>
                        </div>
                        <li class="nav-item giohang">
                            <a href="index.php?controller=cart" class="btn btn-secondary rounded-circle" style="margin-right: 2px;">
                                <i class="fa fa-shopping-cart"></i>
                                
                                <div class="cart-amount"></div>
                            </a>
                            <a class="nav-link text-dark giohang text-uppercase" href="index.php?controller=cart" style="display:inline-block">Giỏ
                                Hàng</a>
                        </li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="duoinavbar">
        <div class="container text-white">
            <div class="row justify">
                <div class="col-lg-3 col-md-5">
                    <div class="categoryheader">
                        <div class="noidungheader text-white">
                            <i class="fa fa-bars"></i>
                            <span class="text-uppercase font-weight-bold ml-1">Danh mục sản phẩm</span>
                        </div>
                        <div class="categorycontent">
                            <ul>
                                
                              
                                    <li><a href="index.php?controller=products&action=category&id="></a>
                                        <i class="fa fa-chevron-right float-right"></i>
                                        <ul>
                                            
                                            <li class="liheader"><a href="index.php?controller=products&action=category&id=" class="header text-uppercase"></a></li>
                                           
                                           
                                                <div class="content trai" style="height: 35px;">
                                                    <li><a href="index.php?controller=products&action=category&id="><</a></li>
                                                </div>
                                        </ul>
                                    </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 ml-auto contact d-none d-md-block">
                    <div class="benphai float-right">
                        <div class="hotline">
                            <i class="fa fa-table"></i>
                            <a href="index.php?controller=orders"><span>Theo dõi <b>đơn hàng</b> </span></a>
                        </div>
                        <i class="fas fa-comments-dollar"></i>
                        <a href="index.php?controller=contact">Hỗ trợ trực tuyến </a>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="abovefooter text-white" style="background-color: #ae7b4e;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="./assets/frontend/images/icon-books.png" alt="icon-books">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">HƠN 14.000 SẢN PHẨM</h6>
                            <p class="detail">Tuyển chọn bởi FURNI</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="./assets/frontend/images/icon-ship.png" alt="icon-ship">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">MIỄN PHÍ GIAO HÀNG</h6>
                            <p class="detail">Từ 150.000đ ở TP.HCM</p>
                            <p class="detail">Từ 300.000đ ở tỉnh thành khác</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="./assets/frontend/images/icon-gift.png" alt="icon-gift">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">QUÀ TẶNG MIỄN PHÍ</h6>
                            <p class="detail">Tặng hướng dẫn</p>
                            <p class="detail">Bảo hành miễn phí</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="./assets/frontend/images/icon-return.png" alt="icon-return">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">ĐỔI TRẢ NHANH CHÓNG</h6>
                            <p class="detail">Hàng bị lỗi được đổi trả nhanh chóng</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container py-4">
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="gioithieu">
                        <h6 class="header text-uppercase font-weight-bold">Về FURNI</h6>
                        <a href="#">Giới thiệu về FURNI</a>
                        <a href="#">Tuyển dụng</a>
                        <div class="fb-like" data-href="" data-width="300px" data-layout="button" data-action="like" data-size="small" data-share="true"></div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="hotrokh">
                        <h6 class="header text-uppercase font-weight-bold">HỖ TRỢ KHÁCH HÀNG</h6>
                        <a href="#">Hướng dẫn đặt hàng</a>
                        <a href="#">Phương thức thanh toán</a>
                        <a href="#">Phương thức vận chuyển</a>
                        <a href="#">Chính sách đổi trả</a>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="lienket">
                        <h6 class="header text-uppercase font-weight-bold">HỢP TÁC VÀ LIÊN KẾT</h6>
                        <img src="./assets/frontend/images/dang-ky-bo-cong-thuong.png" alt="dang-ky-bo-cong-thuong">
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="ptthanhtoan">
                        <h6 class="header text-uppercase font-weight-bold">Phương thức thanh toán</h6>
                        <img src="./assets/frontend/images/visa-payment.jpg" alt="visa-payment">
                        <img src="./assets/frontend/images/master-card-payment.jpg" alt="master-card-payment">
                        <img src="./assets/frontend/images/jcb-payment.jpg" alt="jcb-payment">
                        <img src="./assets/frontend/images/atm-payment.jpg" alt="atm-payment">
                        <img src="./assets/frontend/images/cod-payment.jpg" alt="cod-payment">
                        <img src="./assets/frontend/images/payoo-payment.jpg" alt="payoo-payment">
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <div class="fixed-bottom">
        <div class="btn btn-warning float-right rounded-circle nutcuonlen" style="background: #ae7b4e;
    position: absolute;
    bottom: 100px;
    right: 34px;" id="backtotop" href="#" style="background:#ae7b4e;"><i class="fa fa-chevron-up text-white"></i></div>
    </div>

</body>

</html>