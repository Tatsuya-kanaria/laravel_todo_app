<div class="modal fade" id="deleteTodoModal{{ $todo->id }}" tabindex="-1" aria-labelledby="deleteTodoModalLabel{{ $todo->id }}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteTodoModalLabel{{ $goal->id }}">To Doの削除</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="閉じる"></button>
            </div>
            <form action="{{ route('goals.todos.destroy', [$goal, $todo]) }}" method="post">
                @csrf
                @method('delete')
                <div class="modal-body">
                    <input type="text" class="form-control" name="content" value="{{ $todo->content }}">
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-danger">削除</button>
                </div>
            </form>
        </div>
    </div>
</div>
