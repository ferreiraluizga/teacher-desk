@extends('layouts.app')

@section('content')
@extends ('layouts.header')
<div class="main-content">
    <section class="banner d-flex justify-content-start align-items-end p-4 mb-5">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="fw-semibold text-white display-4">{{ $student->name }}</h1>
        </div>
    </section>
    <div class="container px-4">
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
            <ul>
                <li><strong>Participação:</strong> {{ $average->participation }}</li>
                <li><strong>Livro:</strong> {{ $average->book }}</li>
                <li><strong>Trabalho Extra:</strong> {{ $average->extra_job }}</li>
                <li><strong>Aula Prática:</strong> {{ $average->pratical_class }}</li>
                <li><strong>Prova Final:</strong> {{ $average->final_exam }}</li>
                <li><strong>Recuperação:</strong> {{ $average->recovery_exam }}</li>

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

                <li>
                    <strong>Média Final:</strong>
                    <span class="{{ $final_average < 6 ? 'text-danger' : 'text-success' }}">
                        {{ $final_average }}
                    </span>
                </li>
            </ul>
            @else
            <p class="text-muted"><em>Sem notas registradas para este bimestre.</em></p>
            @endif

            <hr>
            @endforeach
        </div>
    </div>
</div>
@endsection