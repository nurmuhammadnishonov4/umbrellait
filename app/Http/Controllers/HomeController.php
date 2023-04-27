<?php

namespace App\Http\Controllers;

use App\Models\Advantage;
use App\Models\Course;
use App\Models\Endstudent;
use App\Models\Information;
use App\Models\Teacher;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();
        $endstudents = Endstudent::all();
        $courses = Course::all();
        $advantages = Advantage::all();
        $informations = Information::first();

        return view('welcome', compact('teachers', 'endstudents','courses','advantages','informations'));
    }
}
