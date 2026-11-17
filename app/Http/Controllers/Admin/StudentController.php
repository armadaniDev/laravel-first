<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        return view('admin.student.index', [
            'title'      => 'Student',
            'students'   => Student::with('classroom')->get(),
            'classrooms' => Classroom::orderBy('name')->get(),
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nis'          => 'required|string|max:20|unique:students,nis',
            'name'         => 'required|string|max:255',
            'classroom_id' => 'required|exists:classrooms,id',
            'addres'       => 'required|string|max:255',
        ], [
            'nis.required'          => 'NIS wajib diisi.',
            'nis.unique'            => 'NIS sudah digunakan.',
            'name.required'         => 'Nama siswa wajib diisi.',
            'classroom_id.required' => 'Kelas wajib dipilih.',
            'classroom_id.exists'   => 'Kelas tidak ditemukan.',
            'addres.required'       => 'Alamat wajib diisi.',
        ]);

        Student::create($validated);

        return redirect()
            ->route('admin.student.index')
            ->with('success', 'Siswa berhasil ditambahkan.');
    }
}
