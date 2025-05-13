@extends('layouts.app')

@section('content')
@extends ('layouts.header')
<div class="main-content p-5">
    <h1>Turmas</h1>
    <a class="btn btn-primary" href="{{ route('courses.create') }}">Cadastrar Turma</a>
</div>
@endsection