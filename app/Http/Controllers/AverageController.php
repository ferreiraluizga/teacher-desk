<?php

namespace App\Http\Controllers;

use App\Models\Average;
use Illuminate\Http\Request;

class AverageController extends Controller
{

    public function index()
    {
        $averages = Average::all();
        return view('averages.index', compact('averages'));
    }

    public function create()
    {
        return view('averages.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'participation' => 'required',
            'book' => 'required',
            'extra_job' => 'required',
            'pratical_class' => 'required',
            'final_exam' => 'required',
            'recovery_exam' => 'required'
        ]);
        Average::create(request()->all());
        return redirect()->route('average.index')->with('success', 'Média adicionada ao sistema com sucesso!');
    }

    public function show(Average $average)
    {
        return view('averages.show', compact('average'));
    }

    public function edit(Average $average)
    {
        return view('averages.edit', compact('average'));
    }

    public function update(Request $request, Average $average)
    {
        $request->validate([
            'student_id' => 'required|exists:students,id',
            'participation' => 'required',
            'book' => 'required',
            'extra_job' => 'required',
            'pratical_class' => 'required',
            'final_exam' => 'required',
            'recovery_exam' => 'required'
        ]);
        $average->update($request->all());
        return redirect()->route('averages.index')->with('success', 'Média editada com sucesso!');
    }

    public function destroy(Average $average)
    {
        $average->delete();
        return redirect()->route('averages.index')->with('success', 'Média removida com sucesso!');
    }
}
