<div class="modal fade" id="modalDelete-{{ $student->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-danger text-white" data-bs-theme="dark">
                <h1 class="modal-title fs-5 fw-semibold" id="exampleModalLabel">Deletar Aluno</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ route('students.destroy', $student->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <p class="text-center">Você tem certeza que deseja deletar o aluno <strong>{{ $student->name }}</strong>?</p>
                    <div class="mb-2">
                        <button type="submit" class="btn btn-danger w-100">
                            Deletar <i class="bi bi-trash ms-1"></i>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>