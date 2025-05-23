<?php

namespace App\Http\Controllers\Student;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        return view('student.course');
    }

    public function specific($id)
    {
        return view('student.course-specific');
    }
}
