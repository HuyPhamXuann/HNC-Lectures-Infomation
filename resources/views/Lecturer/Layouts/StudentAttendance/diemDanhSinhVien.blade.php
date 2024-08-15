@extends('Lecturer.DefaultLayout.main')

@section('content')
    <div class="grid container">
        <div class="row">
            <div class="col l-12 flex flex-col content-center">
                <div class="content__title">
                    <h3>Danh sách môn học</h3>
                </div>
                <div class="search-container">
                    <div class="search-option">
                        <label class="option-name search__option-name" for="hocky">Học kỳ:</label>
                        <select name="search__select-option" id="search__select-option"
                            class="select-option search__select-option">
                            <option value="1">-- Chọn học kỳ --</option>
                            <option value="2">Học kỳ 1</option>
                            <option value="3">Học kỳ 2</option>
                        </select>
                    </div>
                    <div class="search-option">
                        <label class="option-name search__option-name" for="search__select-optionc">Năm học:</label>
                        <select name="search__select-option" id="search__select-option"
                            class="select-option search__select-option">
                            <option class="optional" value="1">-- Chọn năm học --</option>
                            <option class="optional" value="1">2020-2021</option>
                            <option class="optional" value="2">2021-2022</option>
                            <option class="optional" value="3">2022-2023</option>
                            <option class="optional" value="4">2023-2024</option>
                            <option class="optional" value="5">2024-2025</option>
                            <option class="optional" value="6">2025-2026</option>
                            <option class="optional" value="7">2026-2027</option>
                            <option class="optional" value="8">2027-2028</option>
                        </select>
                    </div>
                    <div class="search-option">
                        <label class="option-name search__option-name" for="search__select-option">Môn học:</label>
                        <select name="search__select-option" id="search__select-option"
                            class="select-option search__select-option">
                            <option value="1">-- Chọn môn học --</option>
                            <option value="1">An toàn và bảo mật thông tin</option>
                            <option value="2">Hệ quản trị cơ sở dữ liệu</option>
                            <option value="3">Thiết kế website</option>
                            <option value="4">Phân tích và thiết kế hệ thống</option>
                        </select>
                    </div>
                    <div class="search-option">
                        <label class="option-name search__option-name" for="search__select-option">Lớp học phần:</label>
                        <select name="search__select-option" id="search__select-option"
                            class="select-option search__select-option">
                            <option value="1">-- Chọn lớp học phần --</option>
                            <option value="2">1621CNT01</option>
                            <option value="3">1621CNT02</option>
                            <option value="4">1621CNT03</option>
                            <option value="5">1621CNT04</option>
                        </select>
                    </div>
                    <div class="search__btn">
                        <button type="submit" class="btn btn--primary btn--search">Tìm kiếm</button>
                    </div>
                </div>
                <!-- table  -->
                <div class="table-container animate__animated animate__fadeInUp">
                    <table class="table table--primary">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên môn học</th>
                                <th>Tên lớp</th>
                                <th>Giảng viên</th>
                                <th>Tổng số tiết</th>
                                <th>Sĩ số</th>
                                <th>Số HT/TC</th>
                                <th colspan="3">#</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr class="tr__title">
                                <td>1</td>
                                <td>An toàn bảo mật thông tin</td>
                                <td>1621CNT01</td>
                                <td>Phạm Xuân Huy</td>
                                <td>60</td>
                                <td>40</td>
                                <td>3</td>
                                <td><a href="./danhsachdiemdanh.html" class="btn btn--secondary table__btn ">ĐDSV</a></td>
                                <td><button class="btn btn--info table__btn">Import ĐD</button></td>
                                <td><button class="btn btn--success table__btn">Export ĐD</button></td>
                            </tr>
                            <tr class="tr__title">
                                <td>2</td>
                                <td>Hệ quản trị cơ sở dữ liệu</td>
                                <td>1621CNT02</td>
                                <td>Phạm Xuân Huy</td>
                                <td>60</td>
                                <td>40</td>
                                <td>3</td>
                                <td><a href="./danhsachdiemdanh.html" class="btn btn--secondary table__btn">ĐDSV</a></td>
                                <td><button class="btn btn--info table__btn">Import ĐD</button></td>
                                <td><button class="btn btn--success table__btn">Export ĐD</button></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Phân tích và thiết kế hệ thống</td>
                                <td>1621CNT03</td>
                                <td>Phạm Xuân Huy</td>
                                <td>60</td>
                                <td>40</td>
                                <td>3</td>
                                <td><a href="./danhsachdiemdanh.html" class="btn btn--secondary table__btn">ĐDSV</a></td>
                                <td><button class="btn btn--info table__btn">Import ĐD</button></td>
                                <td><button class="btn btn--success table__btn">Export ĐD</button></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Thiết kế website</td>
                                <td>1621CNT04</td>
                                <td>Phạm Xuân Huy</td>
                                <td>60</td>
                                <td>40</td>
                                <td>3</td>
                                <td><a href="./danhsachdiemdanh.html" class="btn btn--secondary table__btn">ĐDSV</a></td>
                                <td><button class="btn btn--info table__btn">Import ĐD</button></td>
                                <td><button class="btn btn--success table__btn">Export ĐD</button></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
