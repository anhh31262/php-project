
 <section class="breadcrumbbar">
    <div class="container">
        <ol class="breadcrumb mb-0 p-0 bg-transparent">
            <li class="breadcrumb-item"><a href="">Trang chủ</a></li>
            <li class="breadcrumb-item active"><a href="#">
            <
            </a></li>
        </ol>
    </div>
</section>



<section class="page-content my-3">
        <div class="container">
            <div>
                <h1 class="header text-uppercase">
                    
                </h1>
            </div>

        </div>
    </section>
    
    <section class="content my-4">
        <div class="container">
            <div class="noidung bg-white" style=" width: 100%;">
                <div class="header-khoi-sp d-flex">
                    <div class="container">
                        <div class="panel-body">
                            <div style="display: flex;">
                                <div>
                                    <li class="list-group-item" style="border:0px;">Từ &nbsp;&nbsp;
                                    <input type="number" min="0" value="0" id="fromPrice" class="form-control">
                                    </li>
                                </div>
                                <div>
                                    <li class="list-group-item" style="border:0px;">Đến &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="number" min="0" value="0" id="toPrice" class="form-control">
                                    </li>
                                </div>
                                <div>
                                    <li class="list-group-item" style="border:0px; text-align:center;margin-top: 24px;">
                                    <input type="button" class="btn btn-warning" style="background: #ae7b4e; color: white;" value="Tìm mức giá" onclick="">
                                    </li>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sort d-flex ml-auto">
                        <div class="sap-xep">
                            <label for="sapxep-select" class="label-select">Sắp xếp</label>
                            <?php
                                $order = isset($_GET["order"]) ? $_GET["order"] : "";
                            ?>
                            <select class="sapxep-select" onchange="location.href = ''>
                                <option value="0">Sắp xếp</option>
                                <option selected  value="priceAsc">Giá: Thấp - Cao</option>
                                <option  selected  value="priceDesc">Giá: Cao - Thấp</option>
                                <option  selected > value="nameAsc">Tên: A - Z</option>
                                <option  selected  value="nameDesc">Tên: Z - A</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <div class="items">
                    <div class="row">
                            <div class="col-lg-3 col-md-4 col-xs-6 item DeanGraziosi">
                                <div class="card">
                                    <a href="" class="motsanpham"
                                        style="text-decoration: none; color: black;" data-toggle="tooltip"
                                        data-placement="bottom" title="">
                                        <img class="card-img-top anh" src=""
                                            alt="">
                                        <div class="card-body noidungsp mt-3">
                                            <h6 class="card-title ten"></h6>
                                            <small class="nxs text-muted"></small>
                                            <div class="gia d-flex align-items-baseline">
                                                <div class="giamoi"> ₫</div>
                                                <div class="giacu text-muted"></div>
                                                <div class="sale">%</div>
                                            </div>
                                            <div class="danhgia">
                                                <ul class="d-flex" style="list-style: none;">
                                                <li class="active"><a href="&star=1"><i class="fa fa-star"></a></i></li>
                                                <li class="active"><a href="&star=2"><i class="fa fa-star"></a></i></li>
                                                <li class="active"><a href="&star=3"><i class="fa fa-star"></a></i></li>
                                                <li class="active"><a href="&star=4"><i class="fa fa-star"></a></i></li>
                                                <li class="active"><a href="&star=5"><i class="fa fa-star"></a></i></li>
                                                    <span class="text-muted">0 nhận xét</span>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                    </div>
                </div>
                <div class="pagination-bar my-3">
                    <div class="row">
                        <div class="col-12">
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <li class="page-item"><a class="page-link" href="#">Trang</a></li>
                                    <li class="page-item"><a class="page-link" href=""></a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>