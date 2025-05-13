@extends('layouts.app')

@section('content')
@extends ('layouts.header')
<div class="main-content">
    <section class="banner d-flex justify-content-start align-items-end p-4 mb-5">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="fw-semibold text-white display-4">Turmas</h1>
            <button type="button" class="btn btn-success h-50 fw-semibold" data-bs-toggle="modal" data-bs-target="#modalInsert">
                Cadastrar Turma
            </button>
        </div>
    </section>
    <div class="container px-4">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach ($courses as $course)
            <div class="col">
                <div class="card card-hover rounded-4 p-2 shadow-lg border-0">
                    <div class="card-body">
                        <h5 class="card-title">{{ $course->name }}</h5>
                        <p class="card-text">{{ $course->description }}</p>
                        <a href="{{ route('courses.show', $course->id) }}" class="stretched-link text-decoration-none"></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @extends ('courses.create')
</div>
@endsection