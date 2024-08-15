<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Biểu mẫu hệ thống</title>
    <link rel="shortcut icon" href="./images/logoHNC.png" type="image/x-icon" />

    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/root.css" />
    <link rel="stylesheet" href="./css/index.css" />
    <link rel="stylesheet" href="./css/lienhe.css" />
    <link rel="stylesheet" href="./css/danhmuc.css" />
    <link rel="stylesheet" href="./css/responsive.css" />

    <!-- icon -->
    <script defer src="./js/danhmuc.js"></script>
    <script defer type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script defer nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- js -->
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
                                    <a class="dropdown-item" href="SeeTimeAble.html">Xem thời khoá biểu</a>
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
                                            <a href="tuithi.html" class="dropdown-item">Nhập điểm túi thi</a>
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
                                <li><a class="dropdown-item" href="#">Biểu mẫu</a></li>
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

        <!-- table biểu mẫu -->
        <div class="content__danhmuc" id="table__danhmuc">
            <table class="table table-bordered mt-5 table-hover table-focus">
                <thead style="cursor: pointer">
                    <tr>
                        <th class="text-center" style="font-size: 1.1rem; font-weight: 500; color: #128080">
                            Tên biểu mẫu
                        </th>
                        <th class="text-center" style="font-size: 1.1rem; font-weight: 500; color: #128080">
                            Link đính kèm
                        </th>
                        <th class="text-center" style="font-size: 1.1rem; font-weight: 500; color: #128080">
                            #
                        </th>
                    </tr>
                </thead>
                <tbody style="cursor: pointer">
                    <tr style="font-size: 1rem; text-align: center">
                        <td class="tr__title">HDSD_vai trò của giảng viên</td>
                        <td class="tr__title">Không có link đính kèm</td>
                        <td>
                            <button class="content__danhmuc-btn">Download</button>
                        </td>
                    </tr>
                    <tr style="font-size: 1rem; text-align: center">
                        <td class="tr__title">Mẫu Giáo án môn lý thuyết</td>
                        <td class="tr__title">Không có link đính kèm</td>
                        <td>
                            <button class="content__danhmuc-btn">Download</button>
                        </td>
                    </tr>
                    <tr style="font-size: 1rem; text-align: center">
                        <td class="tr__title">Mẫu Giáo án môn Thực hành</td>
                        <td class="tr__title">Không có link đính kèm</td>
                        <td>
                            <button class="content__danhmuc-btn">Download</button>
                        </td>
                    </tr>
                    <tr style="font-size: 1rem; text-align: center">
                        <td class="tr__title">Mẫu Giáo án tích hợp LT+TH</td>
                        <td class="tr__title">Không có link đính kèm</td>
                        <td>
                            <button class="content__danhmuc-btn">Download</button>
                        </td>
                    </tr>

                    <tr style="font-size: 1rem; text-align: center">
                        <td class="tr__title">
                            Bìa sổ lên lớp + Hướng dẫn sử dụng Sổ lên lớp
                        </td>
                        <td class="tr__title">Không có link đính kèm</td>
                        <td>
                            <button class="content__danhmuc-btn">Download</button>
                        </td>
                    </tr>
                    <tr style="font-size: 1rem; text-align: center">
                        <td class="tr__title">Nội dung sổ lên lớp</td>
                        <td class="tr__title">Không có link đính kèm</td>
                        <td>
                            <button class="content__danhmuc-btn">Download</button>
                        </td>
                    </tr>
                    <tr style="font-size: 1rem; text-align: center">
                        <td class="tr__title">Mẫu lịch giảng dạy</td>
                        <td class="tr__title">Không có link đính kèm</td>
                        <td>
                            <button class="content__danhmuc-btn">Download</button>
                        </td>
                    </tr>
                    <tr style="font-size: 1rem; text-align: center">
                        <td class="tr__title">
                            Hướng dẫn nhập điểm + Phiếu yêu cầu mở khóa điểm
                        </td>
                        <td class="tr__title">Không có link đính kèm</td>
                        <td>
                            <button class="content__danhmuc-btn">Download</button>
                        </td>
                    </tr>
                </tbody>
            </table>
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
