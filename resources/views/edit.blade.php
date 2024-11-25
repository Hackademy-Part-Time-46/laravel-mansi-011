<x-layout>
    <div clss="container">
        <form action="{{ route('tasks.update', $task) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Corpo del task</label>
                {{-- <textarea class="form-control" name="body" rows="3">{{old('body')}}</textarea> --}}
                <textarea class="form-control" name="body" rows="3">{{ $task->body }}</textarea>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" value="1"
                    @if ($task->status) checked @endif>
                <label class="form-check-label">
                    Eseguito
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" value="0"
                    @checked(!$task->status)>
                <label class="form-check-label">
                    Da fare
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Aggiorna</button>

        </form>
    </div>
</x-layout>
