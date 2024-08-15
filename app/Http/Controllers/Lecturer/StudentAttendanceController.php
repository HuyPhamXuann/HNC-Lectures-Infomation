<?php

namespace App\Http\Controllers\Lecturer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentAttendanceController extends Controller
{
    public function index()
    {
        $title = 'Điểm danh sinh viên';

        return view('Lecturer.Layouts.StudentAttendance.diemDanhSinhVien', compact('title'));
    }
}