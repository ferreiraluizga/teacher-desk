@extends('layouts.app')

@section('content')
@extends ('layouts.header')
<div class="main-content">
    <section class="banner d-flex justify-content-start align-items-end p-4 mb-5">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="fw-semibold text-white display-4">{{ $student->name }}</h1>
        </div>
    </section>
    <div class="container px-5">
        <div class="row mb-5">
            <h3 class="fw-semibold">Descrição do Aluno</h3>
            <p class="text-justify">{{ $student->description }}</p>
            <hr>

            @php
            $periods = [
            '1st' => '1º Bimestre',
            '2nd' => '2º Bimestre',
            '3rd' => '3º Bimestre',
            '4th' => '4º Bimestre'
            ];
            @endphp

            @foreach ($periods as $key => $label)
            <h3 class="fw-semibold">{{ $label }}</h3>

            @php
            $average = isset($student->averages[$key]) && $student->averages[$key]->isNotEmpty()
            ? $student->averages[$key]->first()
            : null;
            @endphp

            @if ($average)
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Participação</th>
                            <th scope="col">Apostila</th>
                            <th scope="col">Trabalho Extra / Pesquisa</th>
                            <th scope="col">Aula Prática</th>
                            <th scope="col">Prova</th>
                            <th scope="col">Recuperação</th>
                            <th scope="col">Média</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $average->participation }}</td>
                            <td>{{ $average->book }}</td>
                            <td>{{ $average->extra_job }}</td>
                            <td>{{ $average->pratical_class }}</td>
                            <td>{{ $average->final_exam }}</td>
                            <td>{{ $average->recovery_exam }}</td>
                            @php
                            $final_average = (
                            $average->participation +
                            $average->book +
                            $average->extra_job +
                            $average->pratical_class +
                            $average->final_exam +
                            $average->recovery_exam
                            ) / 6;
                            $final_average = number_format($final_average, 2, '.', '');
                            @endphp
                            <td class="{{ $final_average < 6 ? 'table-danger' : 'table-success' }}">{{ $final_average }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            @else
            <p class="text-muted"><em>Sem notas registradas para este bimestre.</em></p>
            @endif

            <hr>
            @endforeach
        </div>
    </div>
</div>
@endsection