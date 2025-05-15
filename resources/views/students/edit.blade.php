<div class="modal fade" id="modalEdit-{{ $student->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Editar dados do Aluno</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('students.update', $student->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name">Nome:</label>
                        <input type="text" name="name" placeholder="Escreva o nome do aluno..." class="form-control mt-2 border-warning" value="{{ $student->name }}">
                        @error("name")
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="description">Descrição</label>
                        <textarea name="description" placeholder="Descreva o aluno..." class="form-control mt-2 border-warning" rows="4">{{ $student->description }}</textarea>
                        @error("description")
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="birth">Data de Nascimento:</label>
                        <input type="date" name="birth" class="form-control mt-2 border-warning" value="{{ $student->birth }}">
                        @error("birth")
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="course">Turma:</label>
                        <select name="course_id" class="form-select mt-2 border-warning" aria-label="Default select example">
                            <option disabled>Selecione uma Turma</option>
                            @foreach ($courses as $course)
                            @if ($course->id == $student->course_id)
                            <option selected value="{{ $course->id }}">{{ $course->name }}</option>
                            @endif
                            <option value="{{ $course->id }}">{{ $course->name }}</option>
                            @endforeach
                        </select>
                        @error("course")
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <button type="submit" class="btn btn-warning w-100">
                            Atualizar <i class="bi bi-pencil-square ms-1"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>