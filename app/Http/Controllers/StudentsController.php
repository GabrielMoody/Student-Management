<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students = Student::all();
        return view('students.index', compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
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
        $request->validate([
            'name' => 'required',
            'nrp' => 'required|unique:students',
            'email' => 'required|email|unique:students',
            'jurusan' => 'required'
        ]);

        Student::create($request->all());

        return redirect('/students')->with('status', 'Data berhasil di tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Student $student)
    {
        return view('students.show', compact('student'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'nrp' => 'required|',
            'email' => 'required|email|unique:users',
            'jurusan' => 'required'
        ]);

        Student::where('id', $student->id)->update([
            'name' => $request->name,
            'nrp' => $request->nrp,
            'email' => $request->email,
            'jurusan' => $request->jurusan
        ]);

        return redirect('/students')->with('status', 'Data berhasil di ubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Student $student)
    {
        Student::destroy($student->id);
        return redirect('/students')->with('status', 'Data berhasil di hapus!');
    }

    // Search student 
    public function search(Request $request)
    {
        $search = $request->search;

        $students = Student::where('name', 'LIKE', '%' . $search . '%')->orwhere('nrp', 'LIKE', '%' . $search . '%')->orwhere('email', 'LIKE', '%' . $search . '%')->orwhere('jurusan', 'LIKE', '%' . $search . '%')->get();

        return view('students.index', compact('students'));
    }
}
