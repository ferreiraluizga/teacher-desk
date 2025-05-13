@extends ('layouts.app')

@section ('content')

@extends ('layouts.header')
<div class="main-content p-5">
    <form action="{{ route('courses.store') }}" method="POST">
        @csrf
        <div class="mt-2">
            <label for="name">Nome:</label>
            <input type="text" name="name" placeholder="Escreva o nome da turma..." class="form-control">
            @error("name")
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-2">
            <label for="description">Descrição</label>
            <input type="text" name="description" placeholder="Descreva a turma..." class="form-control">
            @error("description")
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div>
        <div class="mt-2">
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </div>
    </form>
</div>

@endsection