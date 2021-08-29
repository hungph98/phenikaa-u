<?php
include("./header.php");
include("./admin/config/connect.php");
$getTinTuyenSinh ="SELECT idtintuc , tieude , noidung ,ngayviet, tenanh FROM tintuc , thuvien where tintuc.idhinhanh=thuvien.idhinhanh and tintuc.iddanhmuc=1 LIMIT 6";
$getThongBao="SELECT idtintuc , tieude , noidung ,ngayviet, tenanh FROM tintuc , thuvien where tintuc.idhinhanh=thuvien.idhinhanh and tintuc.iddanhmuc=3 LIMIT 4";
$result1 = mysqli_query($conn, $getTinTuyenSinh);
$result2 = mysqli_query($conn, $getThongBao);
//$row1 = mysqli_fetch_assoc($result1);,
//Tin tuyển sinh
$data1= array();
//Tin tức và thông báo
$data2= array();
while ($row1 = mysqli_fetch_assoc($result1)){
	array_push($data1,$row1);
}
while ($row2 = mysqli_fetch_assoc($result2)){
	array_push($data2,$row2);
}


?>
        <!-- Slide_Show -->
        <div class="slide_show">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="http://#">
                            <img src="./image/slide1.jpg" class="d-block w-100" alt="...">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="http://#" target="_blank" rel="noopener noreferrer">
                            <img src="./image/sldie2.jpg" class="d-block w-100" alt="...">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="http://#" target="_blank" rel="noopener noreferrer">
                            <img src="./image/slide3.jpg" class="d-block w-100" alt="...">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="http://#" target="_blank" rel="noopener noreferrer">
                            <img src="./image/slide4.jpg" class="d-block w-100" alt="...">
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- menu -->
        <div class="container">
            <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                <div class="col">
                    <div class="p-3 border bg-light">
                        <a href="http://#" target="_blank" rel="noopener noreferrer" class="text-decoration-none">Văn bản pháp quy</a>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 border bg-light">
                        <a href="http://#" target="_blank" rel="noopener noreferrer" class="text-decoration-none">Dịch vụ trực tuyến</a>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 border bg-light">
                        <a href="http://#" target="_blank" rel="noopener noreferrer" class="text-decoration-none">Hỗ trợ CNTT</a>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 border bg-light">
                        <a href="http://" target="_blank" rel="noopener noreferrer" class="text-decoration-none">Đảng - Đoàn thể</a>
                    </div>
                </div>
                <div class="col">
                    <div class="p-3 border bg-light">
                        <a href="http://#" target="_blank" rel="noopener noreferrer" class="text-decoration-none">Virtual Tour</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Content -->

    <!-- Secsion Tin tuyển sinh -->
    <section>
        <h2 class="mt-5 text-center">Tin tuyển sinh</h2>
        <p class="mt-3 text-center">Danh sách thông tin tuyển sinh mới nhất của Trường Đại học Phenikaa</p>
        <div class="container overflow-hidden">
            <div class="row gy-5 mt-1">
                <div class="col-6">
                    <div class="card img-khampha">
                        <a href="./baiviet.php?id=<?php echo $data1[0]['idtintuc']?>" class="text-decoration-none ">
                            <img src="./image/img1.jpg" class="card-img-top ">
                            <div class="card-body position-absolute top-50 start-0 text-white">
                                <p class="card-text">
                                    <?php echo $data1[0]['tieude']?>
                                    <br>
                                    <br>
                                    <?php echo $data1[0]['ngayviet']?>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card img-khampha">
                        <a href="./baiviet.php?id=<?php echo $data1[1]['idtintuc']?>" class="text-decoration-none">
                            <img src="./image/img7.jpg" class="card-img-top ">
                            <div class="card-body position-absolute top-50 start-0 p-3 bg-light text-dark" style="padding-bottom: 28px;bottom: 0px;">
                                <p class="card-text">
								
                                    <?php echo $data1[1]['tieude']?>
                                    <br>
                                    <?php echo $data1[1]['ngayviet']?>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card img-khampha" style="height: 267px">
                        <a href="./baiviet.php?id=<?php echo $data1[2]['idtintuc']?>" class="text-decoration-none">
                            <img src="./image/img3.jpg" class="card-img-top">
                            <div class="card-body position-absolute top-50 start-0 p-3 bg-light text-dark" style="padding-bottom: 28px;bottom: 0px;">
                                <p class="card-text ">
                                    <?php echo $data1[2]['tieude']?>
                                </p>
                                <p class="card-text ">
                                    <?php echo $data1[2]['ngayviet']?>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <div class="container overflow-hidden">
            <div class="row gy-5">
                <div class="col-3">
                    <div class="card img-khampha" style="height: 259px">
                        <a href="./baiviet.php?id=<?php echo $data1[3]['idtintuc']?>" class="text-decoration-none">
                            <img src="./image/img2.jpg" class="card-img-top">
                            <div class="card-body position-absolute top-50 start-0 p-3 bg-light text-dark" style="padding-bottom: 28px;bottom: 0px;">
                                <p class="card-text">
                                    <?php echo $data1[3]['tieude']?>
                                </p>
                                <p class="card-text">
                                    <?php echo $data1[3]['ngayviet']?>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card img-khampha" style="height: 259px">
                        <a href="./baiviet.php?id=<?php echo $data1[4]['idtintuc']?>" class="text-decoration-none">
                            <img src="./image/img3.jpg" class="card-img-top">
                            <div class="card-body position-absolute top-50 start-0 p-3 bg-light text-dark" style="padding-bottom: 28px;bottom: 0px;">
                                <p class="card-text">
                                    <?php echo $data1[4]['tieude']?>
                                    <br>
                                    <?php echo $data1[4]['ngayviet']?>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-6">
                    <div class="card img-khampha" style="height: 259px">
                        <a href="./baiviet.php?id=<?php echo $data1[5]['idtintuc']?>" class="text-decoration-none ">
                            <img src="./image/img4.jpg" class="card-img-top ">
                            <div class="card-body position-absolute top-50 start-0 text-white">
                                <p class="card-text fs-5">
                                    <?php echo $data1[5]['tieude']?>
                                </p>
                                <p class="card-text">
                                    <?php echo $data1[5]['ngayviet']?>
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container overflow-hidden mt-4">
            <div class="row gx-5">
                <div class="col mt-5">
                    <div class="d-grid gap-2 col-4 mx-auto">
                        <a href="#" class="btn btn-primary" type="button">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Section Sự kiện  -->
    <section class="bg-secondary">
        <h2 class="mt-5 text-center">Sự kiện</h2>
        <p class="mt-3 text-center">Các sự kiện đã, đang và sắp diễn ra tại Trường Đại học Phenikaa</p>
        <!-- SlideShow -->
        <div class="container">
            <div class="row g-2">
                <div class="col-3">
                    <div class="card img-khampha">
                        <img src="./image/kh-ky-nang-thich-ung-thumbnail.jpg" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text"><?php echo $data1[1]['tieude']?></p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card img-khampha">
                        <img src="./image/ts-online-5-18.jpg" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Cuộc Tiktok Challenge: Phenikaar Anti Covid đồng hành cùng chiến dịch "Tuổi trẻ Phenikaa: Học online - Trổ tài chống dịch"</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card img-khampha">
                        <img src="./image/ts-online-5-thumbnail-19.jpg" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Tuổi trẻ Phenikaa: Học online - trổ tài chống dịch</p>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="card img-khampha">
                        <img src="./image/khoa-dao-tao-online-thumbnail-04.jpg" class="card-img-top">
                        <div class="card-body">
                            <p class="card-text">Khóa đào tạo "Kĩ năng chinh phục nhà tuyển dụng"</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container overflow-hidden mt-4">
            <div class="row gx-5">
                <div class="col mt-5">
                    <div class="d-grid gap-2 col-4 mx-auto mb-5">
                        <a href="#" class="btn btn-primary" type="button">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Tin tức và thông báo -->
    <section>
        <h2 class="mt-5 text-center">Tin tức và thông báo</h2>
        <p class="mt-3 text-center">Tin tức mới nhất về các hoạt động của Trường Đại học Phenikaa</p>

        <div class="container overflow-hidden">
            <div class="row gy-5 mt-3">
                <div class="col-6">
                    <div class="container">
                        <div class="row g-2 boder bg-light ">
                            <div class="col-6 img-khampha">
                                <img src="./image/thumbnail-nguong-diem-nhan-ho-so-03.jpg" style="width:100%">
                            </div>
                            <div class="col-6">
                                <div class="p-1">
                                    <a href="./baiviet.php?id=<?php echo $data2[0]['idtintuc']?>" class="text-decoration-none text-black">
                                        <p class="fw-700"><?php echo $data2[0]['tieude']?></p>
                                    </a>
                                    <br>
                                    <hr>
                                    <a href="./baiviet.php?id=<?php echo $data2[0]['idtintuc']?>"><button type="button" class="btn btn-outline-secondary">Xem thêm</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="container">
                        <div class="row g-2 boder bg-light ">
                            <div class="col-6 img-khampha">
                                <img src="./image/tin-tuc.jpg" style="width:100%">
                            </div>
                            <div class="col-6">
                                <div class="p-1">
                                    <a href="./baiviet.php?id=<?php echo $data2[1]['idtintuc']?>" class="text-decoration-none text-black">
                                        <p class="fw-700"><?php echo $data2[1]['tieude']?></p>
                                        <br>
                                    </a>
                                    <br>
                                    <hr>
                                    <a href="./baiviet.php?id=<?php echo $data2[1]['idtintuc']?>"><button type="button" class="btn btn-outline-secondary">Xem thêm</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="container">
                        <div class="row g-2 boder bg-light ">
                            <div class="col-6 img-khampha">
                                <img src="./image/thumbnail-tin-tuc-01.jpg" style="width:100%">
                            </div>
                            <div class="col-6">
                                <div class="p-1">
                                    <a href="./baiviet.php?id=<?php echo $data2[2]['idtintuc']?>" class="text-decoration-none text-black">
                                        <p class="fw-700"><?php echo $data2[2]['tieude']?></p>
                                        <br><br>
                                        <br>
                                    </a>
                                    <br>
                                    <hr>
                                    <a href="./baiviet.php?id=<?php echo $data2[2]['idtintuc']?>"><button type="button" class="btn btn-outline-secondary">Xem thêm</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-6">
                    <div class="container">
                        <div class="row g-2 boder bg-light ">
                            <div class="col-6 img-khampha">
                                <img src="./image/anh-1.jpg" style="width:100%">
                                <hr>
                                <hr><hr>
                                <hr>
                            </div>
                            <div class="col-6">
                                <div class="p-1">
                                    <a href="./baiviet.php?id=<?php echo $data2[3]['idtintuc']?>" class="text-decoration-none text-black">
                                        <p class="fw-700"><?php echo $data2[3]['tieude']?></p>
                                        <br>
                                    </a>
                                    <br>
                                    <hr>
                                    <a href="./baiviet.php?id=<?php echo $data2[3]['idtintuc']?>"><button type="button" class="btn btn-outline-secondary">Xem thêm</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container overflow-hidden mt-4">
            <div class="row gx-5">
                <div class="col mt-5">
                    <div class="d-grid gap-2 col-4 mx-auto">
                        <a href="https://phenikaa-uni.edu.vn/vi/category/tin-tuc" class="btn btn-primary" type="button">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Phenikaa qua những con số -->
    <section>
        <h2 class="mt-5 text-center">Phenika qua những con số</h2>
        <div class="container px-4">
            <div class="row gx-5">
                <div class="col">
                    <div class="p-3 border bg-light">Custom column padding</div>
                </div>
                <div class="col">
                    <div class="p-3 border bg-light">Custom column padding</div>
                </div>
            </div>
        </div>
    </section>


    <!-- Tại sao chọn Phenikaa -->
    <section class="why-phenika mt-5 ">
        <div class="position-relative">
            <img src="./image/anh-nen-chon-phenikaa.png" style="width:100% ;height:600px">
            <h2 class="position-absolute top-0 end-50 text-white ms-5" style="margin-top: 3rem !important;margin-right: -10rem !important;"> Tại sao chọn Phenikaa</h2>

        </div>
    </section>

    <!-- Khám phá trường địa học Phenikaa -->
    <section>
        <h2 class="text-center mt-5 mb-5">Khám phá Trường Đại học Phenikaa</h2>
        <div class="mt-5">
            <div class="container">
                <div class="row g-2">
                    <div class="col-3 img-khampha">
                        <img src="./image//kham-pha-phenikaa-02.jpg" style="width:100% ">
                    </div>
                    <div class="col-3 img-khampha">
                        <img src="./image//kham-pha-phenikaa-03.jpg" style="width:100%">
                    </div>
                    <div class="col-6 img-khampha">
                        <img src="./image//kham-pha-phenikaa-04.jpg" style="width:100%">
                    </div>
                </div>
            </div>
            <div class="container mt-3">
                <div class="row g-2">
                    <div class="col-9">
                        <iframe width="830" height="554" src="https://www.youtube.com/embed/Qfc2lwNST54" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                    <div class="col-3 ">
                        <div class="col img-khampha">
                            <img src="./image//kham-pha-phenikaa-05.jpg" style="width:100%">
                        </div>
                        <div class="col mt-2 img-khampha">
                            <img src="./image//kham-pha-phenikaa-06.jpg" style="width:100%">
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <!-- Footer -->
<?php
include("./footer.php");
?>