<x-layout>
    <div clss="container">
        <form action="{{ route('tasks.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Corpo del task</label>
                <textarea class="form-control" name="body" rows="3"></textarea>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" value="1" checked>
                <label class="form-check-label">
                    Eseguito
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="status" value="0">
                <label class="form-check-label">
                    Da fare
                </label>
            </div>
            <button type="submit" class="btn btn-primary">Salva</button>

        </form>
    </div>
</x-layout>
