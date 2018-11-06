<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Add a New Task</div>
            <form method="POST" action="{{ route('projects.tasks.store', $project) }}">
                @csrf
                <div class="card-body pb-1">
                    <div class="form-group row">
                        <label for="title" class="col-sm-2 col-form-label text-md-right">
                            {{ __('Description') }}
                        </label>

                        <div class="col-md-10">
                            <input
                                id="description"
                                type="text"
                                class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
                                name="description"
                                placeholder="Task Description"
                                value="{{ old('description') }}"
                                required
                                autofocus>

                            @if ($errors->has('description'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('description') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-footer text-right">
                    <button type="submit" class="btn btn-primary">
                        {{ 'Add Task' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
