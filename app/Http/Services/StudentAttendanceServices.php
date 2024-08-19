<?php

namespace App\Http\Services;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Lop;
use App\Models\KyHoc;
use App\Models\DanhSachMonHoc;
use App\Models\GiangVienMonHoc;

class StudentAttendanceServices
{
    public function getDataInfo()
    {
        // Lấy giảng viên hiện tại
        $user = Auth::user();
        $maGV = $user->MaGV;

        if (!$maGV) {
            return [];
        }

        // Lấy thông tin giảng viên, bao gồm MaLop và TenLop
        $giangVien = DB::table('hoso_giangvien')
            ->join('lop', 'hoso_giangvien.MaGV', '=', 'lop.MaGV')
            ->where('hoso_giangvien.MaGV', $maGV)
            ->select('lop.MaLop', 'lop.TenLop', 'lop.Nganh_ID')
            ->get();

        if ($giangVien->isEmpty()) {
            return [];
        }

        // Lấy danh sách MaLop từ giảng viên
        $maLops = $giangVien->pluck('MaLop');
        $nganhID = $giangVien->pluck('Nganh_ID')->first();

        // Lấy danh sách kỳ học liên quan đến các lớp dựa trên MaLop
        $kyHocs = DB::table('kyhoc')
            ->whereIn('KhoaHoc_ID', function ($query) use ($maLops) {
                $query->select('lop.KhoaHoc_ID')
                    ->from('lop')
                    ->whereIn('MaLop', $maLops);
            })
            ->select('kyhoc.id', 'kyhoc.TenKy', DB::raw('YEAR(kyhoc.ThoiGianBD) as NamBD'), DB::raw('YEAR(kyhoc.ThoiGianKT) as NamKT'))
            ->get();

        // Lấy danh sách môn học dựa theo Nganh_ID
        $monHocs = DB::table('danhsach_monhoc')
            ->where('danhsach_monhoc.Nganh_ID', $nganhID)
            ->select('danhsach_monhoc.MaMonHoc', 'danhsach_monhoc.TenMon', 'danhsach_monhoc.SoTiet', 'danhsach_monhoc.SoTin')
            ->get();

        // dd($monHocs);

        // Lấy các môn học mà giảng viên dạy
        $monHocKy = DB::table('giangvien_monhoc')
            ->join('monhoc_ky', 'giangvien_monhoc.MonHocKy_ID', '=', 'monhoc_ky.id')
            ->join('danhsach_monhoc', 'monhoc_ky.MaMonHoc', '=', 'danhsach_monhoc.MaMonHoc')
            ->where('giangvien_monhoc.MaGV', $maGV)
            ->select('giangvien_monhoc.MonHocKy_ID', 'danhsach_monhoc.TenMon')
            ->get();

        // Lấy danh sách môn học với thông tin TenMon, SoTin, SoTiet, TenLop
        $dataInfo = GiangVienMonHoc::query()
            ->join('monhoc_ky', 'giangvien_monhoc.MonHocKy_ID', '=', 'monhoc_ky.id')
            ->join('lop', 'giangvien_monhoc.MaLop', '=', 'lop.MaLop')
            ->join('danhsach_monhoc', 'monhoc_ky.MaMonHoc', '=', 'danhsach_monhoc.MaMonHoc')
            ->join('hoso_giangvien', 'giangvien_monhoc.MaGV', '=', 'hoso_giangvien.MaGV')
            ->select(
                'danhsach_monhoc.TenMon',
                'danhsach_monhoc.SoTin',
                'danhsach_monhoc.SoTiet',
                'hoso_giangvien.HoDem',
                'hoso_giangvien.Ten',
                'lop.TenLop'
            )
            ->where('hoso_giangvien.MaGV', $maGV)
            ->distinct()
            ->get();

        dd($dataInfo);

        return compact('giangVien', 'kyHocs', 'monHocs', 'monHocKy', 'dataInfo');
    }


    // public function getDataInfo()
    // {
    //     // Lấy giảng viên hiện tại
    //     $user = Auth::user();
    //     $maGV = $user->MaGV;

    //     // Lấy thông tin giảng viên và lớp mà giảng viên dạy
    //     $giangVien = DB::table('hoso_giangvien')
    //         ->join('lop', 'hoso_giangvien.MaGV', '=', 'lop.MaGV')
    //         ->where('hoso_giangvien.MaGV', $maGV)
    //         ->select('hoso_giangvien.MaGV', 'hoso_giangvien.HoDem', 'hoso_giangvien.Ten', 'lop.MaLop', 'lop.TenLop', 'lop.Nganh_ID')  // Thêm Nganh_ID vào kết quả truy vấn
    //         ->get();

    //     dd($giangVien);

    //     if ($giangVien) {
    //         // Lấy danh sách môn học mà giảng viên dạy
    //         $monHocData = DB::table('giangvien_monhoc')
    //             ->join('monhoc_ky', 'giangvien_monhoc.MonHocKy_ID', '=', 'monhoc_ky.id')
    //             ->join('danhsach_monhoc', 'monhoc_ky.MaMonHoc', '=', 'danhsach_monhoc.MaMonHoc')
    //             ->where('giangvien_monhoc.MaGV', $maGV)
    //             ->select('giangvien_monhoc.MonHocKy_ID', 'danhsach_monhoc.TenMon', 'danhsach_monhoc.SoTin', 'danhsach_monhoc.SoTiet')
    //             ->get();

    //         // Kết hợp thông tin lớp với danh sách môn học
    //         $gvMH = $monHocData->map(function ($monHoc) use ($giangVien) {
    //             return array_merge((array) $giangVien, (array) $monHoc);
    //         });

    //         // Lấy danh sách MaLop từ giảng viên
    //         $maLops = $giangVien->pluck('MaLop')->toArray();
    //         ;
    //         // dd($maLops);
    //         $nganhID = $giangVien->pluck('Nganh_ID')->unique()->toArray();
    //         ;

    //         // Lấy danh sách kỳ học liên quan đến các lớp dựa trên MaLop
    //         $kyHocs = DB::table('kyhoc')
    //             ->whereIn('KhoaHoc_ID', function ($query) use ($maLops) {
    //                 $query->select('lop.KhoaHoc_ID')
    //                     ->from('lop')
    //                     ->where('MaLop', $maLops);
    //             })
    //             ->select('kyhoc.id', 'kyhoc.TenKy', DB::raw('YEAR(kyhoc.ThoiGianBD) as NamBD'), DB::raw('YEAR(kyhoc.ThoiGianKT) as NamKT'))
    //             ->get();

    //         // Lấy danh sách môn học
    //         $monHocs = DB::table('danhsach_monhoc')
    //             ->where('danhsach_monhoc.Nganh_ID', $nganhID)
    //             ->select('danhsach_monhoc.MaMonHoc', 'danhsach_monhoc.TenMon', 'danhsach_monhoc.SoTiet', 'danhsach_monhoc.SoTin')
    //             ->get();

    //         return compact('giangVien', 'kyHocs', 'monHocs', 'gvMH');
    //     } else {
    //         return []; // Không có dữ liệu
    //     }
    // }
}