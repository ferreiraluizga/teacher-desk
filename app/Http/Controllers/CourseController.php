<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{

    public function index()
    {
        $courses = Course::all();
        return view('courses.index', compact('courses'));
    }

    public function create(Request $request)
    {
        return view('courses.create');
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
        return view('courses.show', compact('course'));
    }

    public function edit(Course $course)
    {
        return view('courses.edit', compact('product'));
    }

    public function update(Request $request, Course $course)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);
        Course::where('id', $course->id)->update($request->all());
        return redirect()->route('courses.index')->with('success', 'Turma editada com sucesso!');
    }

    public function destroy(Course $course)
    {
        $course->delete();
        return redirect()->route('courses.index')->with('success', 'Turma removida com sucesso!');
    }
}
