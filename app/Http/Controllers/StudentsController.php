<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $students = student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('students.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validasi Laravel
        $request->validate([
            'nama' => 'required',
            'nrp' => 'required|size:9',
            'email' => 'email:rfc,dns',
            'jurusan' => 'required'
        ]);

        /* 1. Cara input data menggunakan Request
            $student = new Student;
            $student->nama = $request->nama;
            $student->nrp = $request->nrp;
            $student->email = $request->email;
            $student->jurusan = $request->jurusan;
            $student->save();
        */

        /* 2. Cara input data menggunakan model (array associative)
                Pastikan model student telah ditambahkan fillable property
                agar laravel mengetahui field table yang mana saja yang boleh di input data
                contoh :
                $fillable = ['nama field', 'nama field', 'nama field',]

        Student::create([
            'nama' => $request->nama,
            'nrp' => $request->nrp,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ]);
        */

        // 3. Cara input data menggunakan model create dengan 1 baris
        Student::create($request->all());
        return redirect('/students')->with('status', 'Data addedd succesfully');
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'nama.required' => 'Masukan Nama Anda',
            'nrp.required'  => 'A message is required'
        ];
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        //
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        //
    }
}
