<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonHocKy extends Model
{
    use HasFactory;

    protected $table = 'monhoc_ky';

    protected $fillable = [
        'id',
        'MaMonHoc',
        'KyHoc_id',
        'GhiChu'
    ];

    public function danhsachmonhoc()
    {
        return $this->belongsTo(DanhSachMonHoc::class, 'MaMonHoc', 'MaMonHoc');
    }

    public function kyhoc()
    {
        return $this->belongsTo(KyHoc::class, 'KyHoc_ID');
    }
}