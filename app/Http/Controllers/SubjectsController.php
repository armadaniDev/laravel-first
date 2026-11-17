<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use Illuminate\Http\Request;

class SubjectsController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();

        return view('admin.subject.index', [
            'title'      => 'Subjects',
            'subjects' => $subjects,
            'subject' => Subject::with('teacher')->get(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255|unique:subjects,name',
        ], [
            'name.required' => 'Nama mata pelajaran wajib diisi.',
            'name.unique'   => 'Mata pelajaran sudah ada.',
        ]);

        Subject::create($validated);

        return redirect()
            ->route('admin.subjects.index')
            ->with('success', 'Mata pelajaran berhasil ditambahkan.');
    }
}
