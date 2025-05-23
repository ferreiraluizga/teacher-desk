<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index()
    {
        $students = Student::paginate(9);
        $courses = Course::all();
        return view('students.index', compact('students', 'courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'birth' => 'required|date',
            'course_id' => 'required|exists:courses,id'
        ]);
        Student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Aluno adicionado ao sistema com sucesso!');
    }

    public function show(Student $student)
    {
        $student->averages = $student->average()->get()->groupBy('period');
        return view('students.show', compact('student'));
    }

    public function edit(Student $student)
    {
        return view('students.edit', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'birth' => 'required|date',
            'course_id' => 'required|exists:courses,id'
        ]);
        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Aluno editado com sucesso!');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Aluno removido com sucesso!');
    }
}
