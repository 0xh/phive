<ul class="list-group list-group-flush">
    @foreach ($project->tasks as $index => $task)
        <li class="list-group-item">
            <form method="POST" action="{{ route('tasks.update', $task) }}">
                @csrf
                @method('PATCH')
                <div class="form-check">
                    <input type="checkbox"
                           class="form-check-input"
                           name="completed"
                           {{ $task->completed ? 'checked' : '' }}
                           id="completed_{{ $index + 1 }}"
                           onChange="this.form.submit()"
                    >
                    <label for="completed_{{ $index + 1 }}"
                           class="form-check-label{{ $task->completed ? ' is-complete': '' }}"
                    >
                        {{ $task->description }}
                    </label>
                </div>
            </form>
        </li>
    @endforeach
</ul>
