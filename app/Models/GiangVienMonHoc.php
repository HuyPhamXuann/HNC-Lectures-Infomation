<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GiangVienMonHoc extends Model
{
    use HasFactory;

    protected $table = 'giangvien_monhoc';

    protected $fillable = [
        'id',
        'MaGV',
        'MonHocKy_ID'
    ];

    public function monhoc_ky()
    {
        return $this->belongsTo(MonHocKy::class, 'monhoc_ky');
    }
}