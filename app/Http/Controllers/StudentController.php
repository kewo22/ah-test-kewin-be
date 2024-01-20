<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return Student::all();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request)
        //
        // $validated = $request->validate([
        //     // 'title' => 'required|string|max:255',
        //     'name' => 'required|string',
        //     'contact_no' => 'required|string',
        //     'email' => 'required|string',
        //     'dob' => 'required|date',
        //     'address' => 'required|string',
        //     'no_of_modules_completed' => 'required|integer',
        //     'average_marks' => 'required|decimal',
        // ]);

        $student = new Student;
        $student->name = $request->name;
        $student->contact_no = $request->contact_no;
        $student->email = $request->email;
        $student->dob = $request->dob;
        $student->address = $request->address;
        $student->no_of_modules_completed = $request->no_of_modules_completed;
        $student->average_marks = $request->average_marks;

        $student->save();

        return response()->json($student, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        //
        $student = Student::find($id);
        return response()->json($student);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Student $student)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        // add validation

        $student = Student::find($id);
        $student->update($request->all());
        return response()->json($student);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        $student = Student::find($id);
        $student->delete();

        return response()->json($id, 200);
    }
}
