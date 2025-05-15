<div class="modal fade" id="modalInsert" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-success text-white" data-bs-theme="dark">
                <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Insira os dados da Turma</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('students.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name">Nome:</label>
                        <input type="text" name="name" placeholder="Escreva o nome do aluno..." class="form-control mt-2 border-success">
                        @error("name")
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="description">Descrição</label>
                        <textarea name="description" placeholder="Descreva o aluno..." class="form-control mt-2 border-success" rows="4"></textarea>
                        @error("description")
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="birth">Data de Nascimento:</label>
                        <input type="date" name="birth" class="form-control mt-2 border-success">
                        @error("birth")
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="course">Turma:</label>
                        <select name="course_id" class="form-select mt-2 border-success" aria-label="Default select example">
                            <option selected disabled>Selecione uma Turma</option>
                            @foreach ($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->name }}</option>
                            @endforeach
                        </select>
                        @error("course")
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-2">
                        <button type="submit" class="btn btn-success w-100">
                            Cadastrar <i class="bi bi-plus-circle ms-1"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>