<x-layout>
    <div class="card" style="width: 18rem;">
        <div class="card-body">

            <h6 class="mb-2 card-subtitle text-body-secondary">Dettaglio Task</h6>
            <p class="card-text">{{ $task->body }}</p>

            @if ($task->status)
                <span class="badge text-bg-success">Task Eseguito</span>
            @endif

            @if (!$task->status)
                <span class="badge text-bg-warning">Task non ancora Eseguito</span>
            @endif
        </div>
    </div>
</x-layout>
