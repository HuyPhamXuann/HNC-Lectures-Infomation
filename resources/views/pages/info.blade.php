{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Thông tin lý lịch</title>
    <link rel="shortcut icon" href="./images/logoHNC.png" type="image/x-icon" />

    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/root.css" />
    <link rel="stylesheet" href="./css/index.css" />
    <link rel="stylesheet" href="./css/lienhe.css" />
    <link rel="stylesheet" href="./css/danhmuc.css" />
    <link rel="stylesheet" href="./css/info.css" />
    <link rel="stylesheet" href="./css/responsive.css" />

    <!-- icon -->
    <script defer type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script defer nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- js -->
    <script defer src="./js/info.js"></script>
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

        <!-- content -->
        <div class="content__info">
            <h3 class="text-center mt-4 content__info-title">
                Thông tin lý lịch giảng viên
            </h3>
            <div class="container">
                <div class="row mt-4">
                    <!-- left -->
                    <div class="col-sm-12 col-md-2">
                        <div class="content__avatar">
                            <img src="./images/logo teacher.png" alt="avatar" class="content__img" />

                            <p class="text-center mt-4" style="font-weight: 500">
                                MNV: 111111
                            </p>
                        </div>
                    </div>
                    <!-- right -->
                    <div class="col-sm-12 col-md-10">
                        <h6 class="title__info">1.Thông tin chung</h6>
                        <!-- info 1 -->
                        <div class="row">
                            <div class="col-sm-3 col-md-6 col-lg-3 pe-0 mb-3">
                                <label class="content__name">Họ và tên</label>
                                <input type="text" name="" id="" value="Trần Văn A"
                                    class="content__input" />
                            </div>

                            <div class="col-sm-3 col-md-6 col-lg-3 pe-0 mb-3">
                                <label class="content__name">Tên khác</label>
                                <input type="text" name="" id="" class="content__input"
                                    value="Việt Anh" />
                            </div>
                            <div class="col-sm-3 col-md-6 col-lg-3 pe-0 mb-3">
                                <label class="content__name">Ngày sinh</label>
                                <input type="date" name="" id="" class="content__input"
                                    value="2004-07-22" />
                            </div>
                            <div class="col-sm-3 col-md-6 col-lg-3 pe-0 mb-3">
                                <label class="content__name">Dân tộc</label>
                                <input type="text" name="" id="" class="content__input"
                                    value="Kinh" />
                            </div>
                        </div>

                        <!-- info 2 -->
                        <div class="row">
                            <div class="col-sm-6 col-lg-6 pe-0 mb-3">
                                <label class="content__name">Nơi sinh</label>
                                <input type="text" name="" id="" value="Trạm y tế xã Hoà Hậu"
                                    class="content__input" />
                            </div>
                            <div class="col-sm-6 col-lg-6 pe-0 mb-3">
                                <label class="content__name">Quê quán</label>
                                <input type="text" name="" id=""
                                    value="Thôn 2, xã Hoà Hậu, huyện Lý Nhân, tỉnh Hà Nam" class="content__input" />
                            </div>
                        </div>
                        <!-- info 3 -->
                        <div class="row">
                            <div class="col-sm-6 pe-0 mb-3">
                                <label class="content__name">Hộ khẩu thường trú</label>
                                <input type="text" name="" id=""
                                    value="Thôn 2, xã Hoà Hậu, huyện Lý Nhân, tỉnh Hà Nam" class="content__input" />
                            </div>
                            <div class="col-sm-6 pe-0 mb-3">
                                <label class="content__name">Nơi ở hiện tại</label>
                                <input type="text" name="" id=""
                                    value="Số 1, ngõ 2, phố Lê Lợi, phường Lê Lợi, quận Lê Lợi, thành phố Lê Lợi"
                                    class="content__input" />
                            </div>
                        </div>

                        <!-- info 4 -->
                        <div class="row">
                            <div class="col-sm-3 col-md-6 col-lg-3 pe-0 mb-3">
                                <label class="content__name">Nghề nghiệp khi tuyển dụng</label>
                                <input type="text" name="" id="" value="Giáo viên"
                                    class="content__input" />
                            </div>

                            <div class="col-sm-3 col-md-6 col-lg-3 pe-0 mb-3">
                                <label class="content__name">Số điện thoại</label>
                                <input type="text" name="" id="" class="content__input"
                                    value="0123456789" />
                            </div>
                            <div class="col-sm-3 col-md-6 col-lg-3 pe-0 mb-3">
                                <label class="content__name">Email</label>
                                <input type="text" name="" id="" class="content__input"
                                    value="abc@gmail.com" />
                            </div>
                            <div class="col-sm-3 col-md-6 col-lg-3 pe-0 mb-3">
                                <label class="content__name">CCCD</label>
                                <input type="text" name="" id="" class="content__input"
                                    value="01234567891011" />
                            </div>
                        </div>

                        <!-- info 5 -->
                        <div class="row">
                            <div class="col-sm-3 col-md-6 col-lg-3 pe-0 mb-3">
                                <label class="content__name">Ngày cấp</label>
                                <input type="date" name="" id="" value="2004-07-22"
                                    class="content__input" />
                            </div>

                            <div class="col-sm-3 col-md-6 col-lg-3 pe-0 mb-3">
                                <label class="content__name">Nơi cấp</label>
                                <input type="text" name="" id="" class="content__input"
                                    value="Công An tỉnh Hà Nam" />
                            </div>
                            <div class="col-sm-3 col-md-6 col-lg-3 pe-0 mb-3">
                                <label class="content__name">Số bảo hiểm xã hội</label>
                                <input type="text" name="" id="" class="content__input"
                                    value="0123456789010101" />
                            </div>
                            <div class="col-sm-3 col-md-6 col-lg-3 pe-0 mb-3">
                                <label class="content__name">Kinh nghiệm</label>
                                <input type="text" name="" id="" class="content__input"
                                    value="2" />
                            </div>
                        </div>

                        <!-- info 6 -->
                        <div class="row">
                            <div class="col-sm-3 col-md-6 col-lg-3 pe-0 mb-3">
                                <label class="content__name">Ngày tuyển dụng</label>
                                <input type="date" name="" id="" value="2004-07-22"
                                    class="content__input" />
                            </div>

                            <div class="col-sm-3 col-md-6 col-lg-3 pe-0 mb-3">
                                <label class="content__name">Tên ngân hàng</label>
                                <input type="text" name="" id="" class="content__input"
                                    value="MB Bank" />
                            </div>
                            <div class="col-sm-3 col-md-6 col-lg-3 pe-0 mb-3">
                                <label class="content__name">Số tài khoản ngân hàng</label>
                                <input type="text" name="" id="" class="content__input"
                                    value="0123456789010101" />
                            </div>
                            <div class="col-sm-3 col-md-6 col-lg-3 pe-0 mb-3">
                                <label class="content__name">Ngày vào Đảng</label>
                                <input type="date" name="" id="" class="content__input"
                                    value="2004-07-22" />
                            </div>
                        </div>
                        <!-- info 7 -->
                        <div class="row">
                            <div class="col-sm-3 col-md-6 col-lg-3 pe-0 mb-3">
                                <label class="content__name">Ngày tham gia tổ chức đoàn</label>
                                <input type="date" name="" id="" value="2004-07-22"
                                    class="content__input" />
                            </div>
                        </div>

                        <!-- trình độ chuyên môn -->
                        <h6 class="title__info">2. Trình độ chuyên môn</h6>
                        <!-- info 1 -->
                        <div class="row">
                            <div class="col-sm-3 col-md-6 col-lg-3 pe-0 mb-3 col-lg-3">
                                <label class="content__name">Trình độ giáo dục phổ thông</label>
                                <input type="text" name="" id="" value="12/12"
                                    class="content__input" />
                            </div>

                            <div class="col-sm-3 col-md-6 col-lg-3 pe-0 mb-3">
                                <label class="content__name">Trình độ chuyên môn cao nhất</label>
                                <input type="text" name="" id="" class="content__input"
                                    value="Thạc sĩ" />
                            </div>
                            <div class="col-sm-3 col-md-6 col-lg-3 pe-0 mb-3">
                                <label class="content__name">Trình độ ngoại ngữ</label>
                                <input type="text" name="" id="" class="content__input"
                                    value="Khá" />
                            </div>
                            <div class="col-sm-3 col-md-6 col-lg-3 pe-0 mb-3">
                                <label class="content__name">Chứng chỉ kỹ năng nghề</label>
                                <input type="text" name="" id="" class="content__input"
                                    value="Khá" />
                            </div>
                        </div>
                        <!-- info 2 -->
                        <div class="row">
                            <div class="col-sm-3 col-md-6 col-lg-3 pe-0 mb-3">
                                <label class="content__name">Chuyên ngành</label>
                                <input type="text" name="" id="" value="Công nghệ thông tin"
                                    class="content__input" />
                            </div>

                            <div class="col-sm-3 col-md-6 col-lg-3 pe-0 mb-3">
                                <label class="content__name">Cơ sở đào tạo</label>
                                <input type="text" name="" id="" class="content__input"
                                    value="Đại học Công nghệ" />
                            </div>
                            <div class="col-sm-3 col-md-6 col-lg-3 pe-0 mb-3">
                                <label class="content__name">Trình độ tin học</label>
                                <input type="text" name="" id="" class="content__input"
                                    value="Khá" />
                            </div>
                            <div class="col-sm-3 col-md-6 col-lg-3 pe-0 mb-3">
                                <label class="content__name">Chứng chỉ nghiệp vụ sư phạm</label>
                                <input type="text" name="" id="" class="content__input"
                                    value="Khá" />
                            </div>
                        </div>

                        <!-- Tình trạng sức khoẻ -->
                        <h6 class="title__info">3. Tình trạng sức khoẻ</h6>
                        <!-- info 1 -->
                        <div class="row">
                            <div class="col-sm-3 col-md-6 col-lg-3 pe-0 mb-3">
                                <label class="content__name">Tình trạng sức khoẻ</label>
                                <input type="text" name="" id="" value="Bình thường"
                                    class="content__input" />
                            </div>

                            <div class="col-sm-3 col-md-6 col-lg-3 pe-0 mb-3">
                                <label class="content__name">Chiều cao</label>
                                <input type="text" name="" id="" class="content__input"
                                    value="1m70" />
                            </div>
                            <div class="col-sm-3 col-md-6 col-lg-3 pe-0 mb-3">
                                <label class="content__name">Cân nặng</label>
                                <input type="text" name="" id="" class="content__input"
                                    value="60kg" />
                            </div>
                            <div class="col-sm-3 col-md-6 col-lg-3 pe-0 mb-3">
                                <label class="content__name">Nhóm máu</label>
                                <input type="text" name="" id="" class="content__input"
                                    value="O" />
                            </div>
                        </div>
                    </div>
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
        <div class="footer mb-3">
            <a href="https://caodanghanoi.edu.vn/" class="footer__nameScholl">Trường Cao đẳng Hà Nội</a>
            <div class="footer__copyright">©2024 Developed by HPC - v1.0</div>
        </div>
    </div>
</body>

</html> --}}


<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Thông tin chi tiết') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("profile\ edit.blade.php") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
