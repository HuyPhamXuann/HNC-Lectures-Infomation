<?php

namespace App\Http\Controllers\Lecturer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ListRollCallController extends Controller
{
    public function index()
    {
        $title = 'Danh sách điểm danh';

        return view('Lecturer.Layouts.ListRollCall.danhSachDiemDanh', compact('title'));
    }
}