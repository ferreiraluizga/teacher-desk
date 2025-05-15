@extends ('layouts.app')

@section ('content')
@extends ('layouts.header')
<div class="main-content">
    <section class="banner d-flex justify-content-start align-items-end p-4 mb-5">
        <div class="container d-flex justify-content-between align-items-center">
            <h1 class="fw-semibold text-white display-4">Alunos</h1>
            <button type="button" class="btn btn-success h-50 fw-semibold" data-bs-toggle="modal" data-bs-target="#modalInsert">
                Cadastrar Aluno
            </button>
            @include ('students.create', ['courses' => $courses])
        </div>
    </section>
    <div class="container px-4 mb-5">
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4 mb-5">
            @foreach ($students as $student)
            <div class="col">
                <div class="card card-hover rounded-5 shadow-lg border-0">
                    <div class="card-header bg-success text-white align-items-center d-flex justify-content-center rounded-pill text-center">
                        <h5 class="fw-semibold">{{ $student->name }}</h5>
                    </div>
                    <div class="card-body p-4">
                        <p class="card-text">{{ $student->description }}</p>
                        <a href="{{ route('students.show', $student->id) }}"
                            class="stretched-link text-decoration-none"
                            style="z-index: 1;"></a>

                        <div class="d-flex gap-2 mt-2 position-relative" style="z-index: 2;">
                            <button type="button"
                                class="btn btn-warning fw-semibold"
                                data-bs-toggle="modal"
                                data-bs-target="#modalEdit-{{ $student->id }}">
                                Editar Aluno
                            </button>
                            <button type="button"
                                class="btn btn-danger fw-semibold"
                                data-bs-toggle="modal"
                                data-bs-target="#modalDelete-{{ $student->id }}">
                                Deletar Aluno
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            @include ('students.edit', ['student' => $student])
            @include ('students.delete', ['student' => $student])
            @endforeach
        </div>
        {{ $students->links('pagination::bootstrap-5') }}
    </div>
</div>
@endsection