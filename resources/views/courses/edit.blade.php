<div class="modal fade" id="modalEdit-{{ $course->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-warning">
                <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Editar dados da Turma</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('courses.update', $course->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="name">Nome:</label>
                        <input type="text" name="name" placeholder="Escreva o nome da turma..." class="form-control mt-2 border-warning" value="{{ $course->name }}">
                        @error("name")
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="description">Descrição</label>
                        <textarea name="description" placeholder="Descreva a turma..." class="form-control mt-2 border-warning" rows="4">{{ $course->description }}</textarea>
                        @error("description")
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