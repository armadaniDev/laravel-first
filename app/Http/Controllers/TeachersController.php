<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function index()
    {
        $teachers = Teacher::all();

        return view('admin.teacher.index', [
            'title'      => 'Teachers',
            'teachers' => $teachers,
            'teachers' => Teacher::with('subject')->get(),
            // dropdown di pop up create: hanya mapel yang belum punya guru
            'subjects' => Subject::doesntHave('teacher')->orderBy('name')->get(),
        ]);
    }

    /**
     * Simpan guru baru (dari pop up create).
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name'       => 'required|string|max:255',
            'niy'        => 'required|numeric|unique:teachers,niy',
            'subject_id' => 'required|exists:subjects,id|unique:teachers,subject_id',
            'start_date' => 'required|date',
        ], [
            'name.required'       => 'Nama guru wajib diisi.',
            'niy.required'        => 'NIY wajib diisi.',
            'niy.numeric'         => 'NIY harus berupa angka.',
            'niy.unique'          => 'NIY sudah digunakan.',
            'subject_id.required' => 'Mata pelajaran wajib dipilih.',
            'subject_id.exists'   => 'Mata pelajaran tidak ditemukan.',
            'subject_id.unique'   => 'Mata pelajaran ini sudah memiliki guru.',
            'start_date.required' => 'Tanggal mulai wajib diisi.',
            'start_date.date'     => 'Format tanggal tidak valid.',
        ]);

        Teacher::create($validated);

        return redirect()
            ->route('admin.teachers.index')
            ->with('success', 'Guru berhasil ditambahkan.');
    }
}
