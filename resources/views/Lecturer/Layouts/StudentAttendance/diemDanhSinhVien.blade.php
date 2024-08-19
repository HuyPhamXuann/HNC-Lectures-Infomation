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
                            @foreach ($getDataInfo['kyHocs'] as $kyHoc)
                                <option value="{{ $kyHoc->id }}">{{ $kyHoc->TenKy }}</option>
                            @endforeach
                        </select>
                    </div>
                    {{-- <div class="search-option">
                        <label class="option-name search__option-name" for="search__select-optionc">Năm học:</label>
                        <select name="search__select-option" id="search__select-option"
                            class="select-option search__select-option">
                            <option class="optional" value="1">-- Chọn năm học --</option>
                            @foreach ($getDataInfo['kyHocs'] as $kyHoc)
                                <option class="optional" value="{{ $kyHoc->NamBD }}-{{ $kyHoc->NamKT }}">2020-2021</option>
                            @endforeach
                        </select>
                    </div> --}}
                    <div class="search-option">
                        <label class="option-name search__option-name" for="search__select-option">Môn học:</label>
                        <select name="search__select-option" id="search__select-option"
                            class="select-option search__select-option">
                            <option value="1">-- Chọn môn học --</option>
                            @foreach ($getDataInfo['monHocs'] as $monHoc)
                                <option value="{{ $monHoc->MaMonHoc }}">{{ $monHoc->TenMon }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="search-option">
                        <label class="option-name search__option-name" for="search__select-option">Lớp học phần:</label>
                        <select name="search__select-option" id="search__select-option"
                            class="select-option search__select-option">
                            <option value="1">-- Chọn lớp học phần --</option>
                            @foreach ($getDataInfo['giangVien'] as $lop)
                                <option value="{{ $lop->MaLop }}">{{ $lop->TenLop }}</option>
                            @endforeach
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
                            {{-- @foreach ($getDataInfo['monHocLop'] as $index => $item)
                                <tr class="tr__title">
                                    <td>{{ $index }}</td>
                                    <td>{{ $item->TenMon }}</td>
                                    <td>{{ $item->TenLop }}</td>
                                    <td>{{ $item->HoDem }} {{ $item->Ten }}</td>
                                    <td>{{ $item->SoTiet }}</td>
                                    <td>50</td>
                                    <td>{{ $item->SoTin }}</td>
                                    <td><a href="/danh-sach-diem-danh" class="btn btn--secondary table__btn ">ĐDSV</a></td>
                                    <td><button class="btn btn--info table__btn">Import ĐD</button></td>
                                    <td><button class="btn btn--success table__btn">Export ĐD</button></td>
                                </tr>
                            @endforeach --}}
                            <tr class="tr__title">
                                <td>1</td>
                                <td>Han Quoc</td>
                                <td>NNHQ</td>
                                <td>Manh Hung</td>
                                <td>60</td>
                                <td>50</td>
                                <td>3</td>
                                <td><a href="/danh-sach-diem-danh" class="btn btn--secondary table__btn ">ĐDSV</a></td>
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
