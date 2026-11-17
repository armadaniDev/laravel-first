<?php

namespace App\Http\Controllers;

use App\Models\Classroom;
use Illuminate\Http\Request;

class ClassroomController extends Controller
{
    public function index()
    {
        $classrooms = Classroom::all();

        return view('admin.classroom.index', [
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

    /**
     * Simpan kelas baru (dari pop up create).
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'  => 'required|string|max:255|unique:classrooms,name',
            'major' => 'required|string|max:255',
        ], [
            'name.required'  => 'Nama kelas wajib diisi.',
            'name.unique'    => 'Nama kelas sudah digunakan.',
            'major.required' => 'Jurusan wajib diisi.',
        ]);

        Classroom::create($validated);

        return redirect()
            ->route('admin.classroom.index')
            ->with('success', 'Kelas berhasil ditambahkan.');
    }

}
