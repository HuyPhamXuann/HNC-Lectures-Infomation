<?php

namespace App\Http\Controllers\Lecturer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Services\StudentAttendanceServices;

class StudentAttendanceController extends Controller
{
    protected $studentAttendanceServices;

    public function __construct(StudentAttendanceServices $studentAttendanceServices)
    {
        $this->studentAttendanceServices = $studentAttendanceServices;
    }

    public function index()
    {
        $title = 'Điểm danh sinh viên';

        $getDataInfo = $this->studentAttendanceServices->getDataInfo();

        return view('Lecturer.Layouts.StudentAttendance.diemDanhSinhVien', compact('title', 'getDataInfo'));
    }
}