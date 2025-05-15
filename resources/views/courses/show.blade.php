@extends('layouts.app')

@section('content')
@extends ('layouts.header')
<div class="main-content">
    <section class="banner d-flex justify-content-start align-items-end p-4 mb-5">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="fw-semibold text-white display-4">{{ $course->name }}</h1>
        </div>
    </section>
    <div class="container px-4">
        <div class="row mb-5">
            <h3 class="fw-semibold">Descrição da Turma</h3>
            <p class="text-justify">{{ $course->description }}</p>
            <hr>
            <div class="card border-0">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">1º Bimestre</th>
                            <th scope="col">2º Bimestre</th>
                            <th scope="col">3º Bimestre</th>
                            <th scope="col">4º Bimestre</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                        @php
                        $periods = ['1st', '2nd', '3rd', '4th'];
                        @endphp
                        <tr>
                            <td><a href="" class="link-dark">{{ $student->name }}</a></td>

                            @foreach ($periods as $period)
                            @php
                            $average = isset($student->averages[$period]) && $student->averages[$period]->isNotEmpty()
                            ? $student->averages[$period]->first()
                            : null;
                            @endphp

                            @if ($average)
                            @php
                            $participation = $average->participation;
                            $book = $average->book;
                            $extra_job = $average->extra_job;
                            $pratical_class = $average->pratical_class;
                            $final_exam = $average->final_exam;
                            $recovery_exam = $average->recovery_exam;
                            $final_average = ($participation + $book + $extra_job + $pratical_class + $final_exam + $recovery_exam) / 6;
                            $final_average = number_format($final_average, 2, '.', '');
                            @endphp

                            @if ($final_average < 6)
                                <td class="table-danger">{{ $final_average }}</td>
                                @else
                                <td class="table-success">{{ $final_average }}</td>
                                @endif
                                @else
                                <td class="table-warning"><em>Sem nota</em></td>
                                @endif
                                @endforeach
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    @extends ('courses.create')
</div>
@endsection