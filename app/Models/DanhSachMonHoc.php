<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DanhSachMonHoc extends Model
{
    use HasFactory;

    protected $table = 'danhsach_monhoc';

    protected $fillable = [
        'MaMonHoc',
        'TenMon',
        'SoTin',
        'Nganh_ID',
        'SoTiet',
        'GhiChu'
    ];

    public function monhocKy()
    {
        return $this->hasMany(MonHocKy::class, 'MaMonHoc', 'MaMonHoc');
    }

    // public function nganh()
    // {
    //     return $this->belongsTo(Nganh::class, 'Nganh_ID');
    // }

    // public function danhsachdiemthi()
    // {
    //     return $this->hasMany(DanhSachDiemThi::class, 'MaMonHoc');
    // }

    // public function danhsachdiemthanhphan()
    // {
    //     return $this->hasMany(DanhSachDiemThanhPhan::class, 'MaMonHoc');
    // }
}