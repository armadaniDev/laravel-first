<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();

        return view('admin.teachers', [
            'title'      => 'Teachers',
            'teachers' => $teachers,
            'teachers' => Teacher::with('subject')->get(),
        ]);
    }
}
