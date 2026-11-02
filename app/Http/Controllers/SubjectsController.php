<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();

        return view('admin.subjects', [
            'title'      => 'Subjects',
            'subjects' => $subjects,
            'subject' => Subject::with('teacher')->get(),
        ]);
    }
}
