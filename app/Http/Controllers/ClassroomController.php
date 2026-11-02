<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        $classrooms = Classroom::all();

        return view('admin.classroom', [
            'title'      => 'Classroom',
            'classrooms' => $classrooms,
        ]);
    }

    public function show(Classroom $classroom)
    {
        return view('admin.classroom-show', [
            'title'     => 'Students in ' . $classroom->name,
            'classroom' => $classroom,
            'students'  => $classroom->students,
        ]);
    }
    
}
