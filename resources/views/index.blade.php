<x-layout>
    <div clss="container">
        <span>
            <a href="{{ route('tasks.create') }}" class="btn btn-info">Crea nuovo task</a>
        </span>
    </div>
    <hr>
    <table class="table mt-5 table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Corpo</th>
                <th scope="col">Stato</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tasks as $task)
                <tr>
                    <th scope="row">{{ $task->id }}</th>
                    <td>{{ $task->body }}</td>
                    {{-- @if ($task->status)
                        <td>Task eseguito</td>
                    @endif
                    @if (!$task->status)
                        <td>Task non eseguito</td>
                    @endif --}}

                    <td>{{ $task->status ? 'Task eseguito' : 'Task non eseguito' }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic outlined example">
                            <a href="{{ route('tasks.show', $task) }}" class="btn btn-outline-primary">Vedi</a>
                            <a href="{{ route('tasks.edit', $task) }}" class="btn btn-outline-primary">Modifica</a>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Elimina
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Sei sicuro?</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('tasks.destroy', $task) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-outline-primary">Si</button>
                                            </form>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
</x-layout>
