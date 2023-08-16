<?php
$this->fileLayout = "LayoutTrangTrong.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./assets/frontend/css/gio-hang.css">
</head>

<body>
    
        <div>
            <div class="container" style="margin-top: 50px;">
                <div class="template-cart">
                    <form action="index.php?controller=cart&action=update" method="post">
                        
                            <div class="table-responsive">
                                <table class="table table-cart" style="background: white;">
                                    <thead>
                                        <tr>
                                            <th class="image">Ảnh sản phẩm</th>
                                            <th style="width: 35%;" class="name">Tên sản phẩm</th>
                                            <th class="price">Giá bán</th>
                                            <th style="width: 10%;" class="quantity">Số lượng</th>
                                            <th class="price">Thành tiền</th>
                                            <th>Xóa</th>
                                        </tr>
                                    </thead>
                                    
                                        <tbody>
                                            <tr>
                                                <td style="text-align: center;"><img style="width: 90px; height: auto; border: 1px solid #c8c8c8;" src="" class="img-responsive" /></td>
                                                <td style="vertical-align: middle !important; text-align: center !important;"><a class="tensp" href=""></a></td>
                                                <td style="vertical-align: middle !important; text-align: center !important;"> ₫ </td>
                                                <td style="vertical-align: middle !important; text-align: center !important;"><input style="text-align: center; width: 50%;" type="number" id="qty" min="1" class="input-control" value=""  required="Không thể để trống"></td>
                                                <td style="vertical-align: middle !important; text-align: center !important;">
                                                </td>
                                                <td style="vertical-align: middle !important; text-align: center !important;"><a onclick="return window.confirm('Are you sure?');" href="" data-id="2479395"><i style="color: #ae7b4e;" class="fa fa-trash"></i></a></td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="6"><a class="xoatoanbo" href="" class="button pull-left">XÓA TOÀN BỘ</a>
                                                    <a class="tieptucmuahang" href="index.php" class="button pull-right black">Tiếp tục mua hàng</a>
                                                    <input class="capnhat" type="submit" class="button pull-right" value="Cập nhật">
                                                </td>
                                            </tr>
                                        </tfoot>
                                </table>
                            </div>
                    </form>
                        <div class="total-cart" style="margin-bottom: 20px; text-align: end;">
                            <div style="display: flex; justify-content: flex-end;">
                                Tổng tiền thanh toán:
                                <p style="font-weight: 600; color: #ef4040;">₫</p> <br>
                            </div>
                            <a href="" class="button black thanhtoan" onclick="return window.confirm('Đặt hàng thành công!');">THANH TOÁN</a>
                        </div>

                    <div class="col-12 cart-empty">
                        <div class="py-3 pl-3">
                            <div class="cart-empty-content w-100 text-center justify-content-center">
                                <img src="./assets/frontend/images/shopping-cart-not-product.png" alt="shopping-cart-not-product">
                                <p>Chưa có sản phẩm nào trong giở hàng của bạn</p>
                                <a href="" class="btn nutmuathem mb-3">Mua thêm</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div>
                <div class="container" style="margin-top: 50px;">
                    <div class="template-cart">
                        <form action="index.php?controller=cart&action=update" method="post">
                                <div class="table-responsive">
                                    <table class="table table-cart" style="background: white;">
                                        <thead>
                                            <tr>
                                                <th class="image">Ảnh sản phẩm</th>
                                                <th style="width: 35%;" class="name">Tên sản phẩm</th>
                                                <th class="price">Giá bán</th>
                                                <th style="width: 10%;" class="quantity">Số lượng</th>
                                                <th class="price">Thành tiền</th>
                                                <th>Xóa</th>
                                            </tr>
                                        </thead>
                                            <tbody>
                                                <tr>
                                                    <td style="text-align: center;"><img style="width: 90px; height: auto; border: 1px solid #c8c8c8;" src=">" class="img-responsive" /></td>
                                                    <td style="vertical-align: middle !important; text-align: center !important;"><a class="tensp" href=""></a></td>
                                                    <td style="vertical-align: middle !important; text-align: center !important;"> " name="product_" required="Không thể để trống"></td>
                                                    <td style="vertical-align: middle !important; text-align: center !important;">
                                                        <p><b><?php echo number_format(($product["price"] - ($product["price"] * $product["discount"]) / 100) * $product["number"]); ?>₫</b></p>
                                                    </td>
                                                    <td style="vertical-align: middle !important; text-align: center !important;"><a onclick="return window.confirm('Are you sure?');" href="" data-id="2479395"><i style="color: #ae7b4e;" class="fa fa-trash"></i></a></td>
                                                </tr>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="6"><a class="xoatoanbo" href="" class="button pull-left">XÓA TOÀN BỘ</a>
                                                        <a class="tieptucmuahang" href="" class="button pull-right black">Tiếp tục mua hàng</a>
                                                        <input class="capnhat" type="submit" class="button pull-right" value="Cập nhật">
                                                    </td>
                                                </tr>
                                            </tfoot>
                                    </table>
                                </div>
                        </form>
                            <div class="total-cart" style="margin-bottom: 20px; text-align: end;">
                                <div style="display: flex; justify-content: flex-end;">
                                    Tổng tiền thanh toán:
                                    <p style="font-weight: 600; color: #ef4040;">₫</p> <br>
                                </div>
                                <a href="" class="button black thanhtoan" onclick="return window.confirm('Đặt hàng thành công!');">THANH TOÁN</a>
                            </div>

                        <div class="col-12 cart-empty">
                            <div class="py-3 pl-3">
                                <div class="cart-empty-content w-100 text-center justify-content-center">
                                    <img src="./assets/frontend/images/shopping-cart-not-product.png" alt="shopping-cart-not-product">
                                    <p>Chưa có sản phẩm nào trong giở hàng của bạn</p>
                                    <a href="" class="btn nutmuathem mb-3">Mua thêm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="container" style="margin-top: 20px; background: white;border: 2px solid #e1e0e0; margin-bottom: 20px;">
                        <div class="template-customer">
                            <h1 style="font-size: 27px;text-align: center;
                margin-top: 20px; color:#ae7b4e;">ĐĂNG KÝ TÀI KHOẢN</h1>
                            <p style="text-align: center;">Đăng ký tài khoản để nhận những ưu đãi hấp dẫn nhé!</p style="text-align: center;">
                                <p style="color:red;">Đăng ký chưa thành công, bạn hãy kiểm tra lại thông tin!</p>


                            <div class="modal-body" style="text-align: center; margin: 0 160px;">
                                <form id="form-signup" class="form-signin mt-2" novalidate="novalidate" method='post' action="index.php?controller=account&action=registerPost">
                                    <div class="form-label-group">
                                        <input type="text" class="form-control" placeholder="Nhập họ và tên" name="name" required="" autofocus="" aria-required="true">
                                    </div>
                                    <div class="form-label-group">
                                        <input type="email" class="form-control" placeholder="Nhập email" name="email" required="" aria-required="true">
                                    </div>
                                    <div class="form-label-group">
                                        <input type="text" class="form-control" placeholder="Nhập địa chỉ" name="address" required="" aria-required="true">
                                    </div>
                                    <div class="form-label-group">
                                        <input type="number" class="form-control" placeholder="Nhập số điện thoại" name="phone" required="" aria-required="true">
                                    </div>
                                    <div class="form-label-group mb-4">
                                        <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu" required="" aria-required="true">
                                    </div>
                                    <button class="btn btn-lg btn-block btn-signin text-uppercase text-white mt-3" type="submit" value="send" style="background: #ae7b4e; width: 160px; margin: auto;">Đăng ký</button>
                                    <hr class="mt-3 mb-2" style="border-top: none !important;">
                                    <div class="custom-control custom-checkbox" style="border-bottom: 1px solid rgba(0,0,0,.1);">
                                        <p class="text-center">Bằng việc đăng ký, bạn đã đồng ý với FURNI về</p>
                                        <p class="text-center">
                                            <a href="#" class="text-decoration-none" style="color: #ae7b4e">Điều khoản dịch
                                                vụ &amp; Chính sách bảo mật</a>
                                        </p>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div>
                            <div class="wrapper-form" style="margin-bottom: 30px;text-align: center; margin: 0 160px;">
                                <p>Nếu bạn đã có tài xin vui lòng đăng nhập<a href="index.php?controller=account&action=login" style="
                font-weight: bold;
                color: #ae7b4e;
                transition: all 0.2s;
                margin-left: 4px">đăng nhập</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
</body>

</html>