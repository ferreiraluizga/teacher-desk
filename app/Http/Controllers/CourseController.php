<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index()
    {
        $courses = Course::paginate(9);
        return view('courses.index', compact('courses'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        Course::create($request->all());
        return redirect()->route('courses.index')->with('success', 'Turma adicionada ao sistema com sucesso!');
    }

    public function show(Course $course)
    {
        $students = $course->students()->get();
        return view('courses.show', compact('course', 'students'));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        $course->update($request->all());
        return redirect()->route('courses.index')->with('success', 'Turma editada com sucesso!');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Turma removida com sucesso!');
    }
}
