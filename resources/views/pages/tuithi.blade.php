<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Nhập điểm túi thi</title>
    <link rel="shortcut icon" href="./images/logoHNC.png" type="image/x-icon" />

    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/root.css" />
    <link rel="stylesheet" href="./css/responsive.css" />
    <link rel="stylesheet" href="./css/tuithi.css" />
    <link rel="stylesheet" href="./css/index.css" />

    <!-- icon -->
    <script defer type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script defer nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- js -->
    <script defer src="./js/tuithi.js"></script>
    <script defer type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script defer nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- animation -->
    <script defer src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
</head>

<body>
    <div id="main">
        <!-- header -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navbar__padd" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <!-- giới thiệu -->
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Giới thiệu</a>
                        </li>
                        <!-- giảng dạy -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Giảng dạy
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="#">Xem thời khoá biểu</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="lichcoithi.html">Lịch coi thi</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Sổ nhật ký giảng dạy</a>
                                </li>
                            </ul>
                        </li>

                        <!-- chấm thi, nhập điểm -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Chấm thi, nhập điểm
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="tinchi.html">Danh sách lớp tín chỉ</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">Nhập điểm
                                        <span style="float: right; margin-top: 4px"><ion-icon
                                                name="chevron-forward-outline"></ion-icon></span></a>
                                    <ul class="dropdown-menu submenu">
                                        <li>
                                            <a href="" class="dropdown-item">
                                                Nhập điểm thành phần (Điểm quá trình)
                                            </a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">Nhập điểm thi</a>
                                        </li>
                                        <li>
                                            <a href="" class="dropdown-item">Nhập điểm túi thi</a>
                                        </li>
                                    </ul>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="kyluat.html">Nhập hình thức kỷ luật</a>
                                </li>
                            </ul>
                        </li>

                        <!-- danh mục -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Danh mục
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="danhmuc.html">Biểu mẫu</a>
                                </li>
                            </ul>
                        </li>
                        <!-- liên hệ -->
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="lienhe.html">
                                <span> <ion-icon name="call"></ion-icon> </span>Liên hệ</a>
                        </li>

                        <!-- thông tin -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <span>
                                    <ion-icon name="person-sharp"></ion-icon>
                                </span>
                                Trần Văn A
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a class="dropdown-item" href="info.html">Thông tin</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <span>
                                            <ion-icon name="lock-closed"></ion-icon>
                                        </span>
                                        Đổi mật khẩu
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="#">
                                        <span style="display: flex; align-items: center; gap: 0.3rem">
                                            <ion-icon name="power"></ion-icon>Đăng xuất
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <!--  túi thi -->
        <div class="content__tuithi">
            <h3 class="content__tuithi-title">Nhập điểm theo túi thi</h3>
            <form class="form__tuithi">
                <div class="container">
                    <div class="row mt-4">
                        <!-- học kỳ -->
                        <div class="col-lg-3 ps-0 mb-2">
                            <label for="hoc__ky" class="content__name">Học kỳ:</label>
                            <select class="form-select mt-1 hocky" id="hoc__ky">
                                <option>--Chọn học kỳ--</option>
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                            </select>
                        </div>
                        <!-- năm học -->
                        <div class="col-lg-3 ps-0 mb-2">
                            <label for="nam__hoc" class="content__name">Năm học:</label>
                            <select class="form-select mt-1 namhoc" id="nam__hoc">
                                <option>--Chọn năm học--</option>
                            </select>
                        </div>
                        <!-- Môn học -->
                        <div class="col-lg-3 ps-0 mb-2">
                            <label for="monhoc" class="form-label11 content__name" style="margin-bottom: 4px">Môn
                                học:</label>
                            <input type="text" class="form-control monhoc" id="monhoc"
                                placeholder="Nhập môn học" />
                        </div>
                        <!-- Đợt -->
                        <div class="col-lg-3 ps-0 mb-2">
                            <label for="dot" class="content__name">Đợt:</label>
                            <select class="form-select mt-1 dot" id="dot">
                                <option value="1" selected>1</option>
                                <option value="2">2</option>
                                <option value="2">3</option>
                            </select>
                        </div>
                        <!-- tìm kiếm -->
                        <div class="text-end">
                            <button type="submit" class="button_kyluat mt3 kyluat__padding">
                                Tìm kiếm
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- table túi thi -->
        <div style="padding-left: 10px; padding-right: 10px">
            <div class="container mt-3 ps-0" id="table__tuithi" style="display: none">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover" style="border: 1px solid #ccc">
                        <thead class="text-center" style="border-bottom: 2px solid #999">
                            <tr>
                                <th class="bgc__th">STT</th>
                                <th class="bgc__th">Tên môn học</th>
                                <th class="bgc__th">Túi số</th>
                                <th class="bgc__th">Ngày thi</th>
                                <th class="bgc__th">Sĩ số</th>
                                <th class="bgc__th">Giảng viên nhập điểm</th>
                                <th class="bgc__th">#</th>
                                <th class="bgc__th">#</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr class="tr__title">
                                <td>1</td>
                                <td>An toàn bảo mật thông tin</td>
                                <td>12</td>
                                <td>20/3/2013</td>
                                <td>30</td>
                                <td>Đinh Thị Thu Trang</td>
                                <td>Doe</td>
                                <td>john@example.com</td>
                            </tr>
                            <tr class="tr__title">
                                <td>2</td>
                                <td>An toàn bảo mật thông tin</td>
                                <td>12</td>
                                <td>20/3/2013</td>
                                <td>30</td>
                                <td>Đinh Thị Thu Trang</td>
                                <td>Doe</td>
                                <td>john@example.com</td>
                            </tr>
                            <tr class="tr__title">
                                <td>3</td>
                                <td>An toàn bảo mật thông tin</td>
                                <td>12</td>
                                <td>20/3/2013</td>
                                <td>30</td>
                                <td>Đinh Thị Thu Trang</td>
                                <td>Doe</td>
                                <td>john@example.com</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- loading -->
        <div class="spinner-wrapper" id="loading">
            <div class="spinner-border" style="width: 3rem; height: 3rem; color: #128080" role="status">
                <span class="visually-hidden">Loading...</span>
            </div>
        </div>

        <div class="hr"></div>

        <!-- footer -->
        <div class="footer">
            <a href="https://caodanghanoi.edu.vn/" class="footer__nameScholl">Trường Cao đẳng Hà Nội</a>
            <div class="footer__copyright">©2024 Developed by HPC - v1.0</div>
        </div>
    </div>
</body>

</html>
