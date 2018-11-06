@extends ('layouts.app')

@section ('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $project->title }}</div>
                    <div class="card-body">
                        <blockquote class="blockquote-footer mb-0">{{ $project->description }}</blockquote>
                    </div>
                    @if ($project->tasks->count())
                        <ul class="list-group list-group-flush">
                            @foreach ($project->tasks as $task)
                                <li class="list-group-item">
                                    {{ $task->description }}
                                </li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="card-footer d-flex justify-content-center">
                        <a href="{{ route('projects.edit', $project) }}" class="btn btn-primary">{{ __('Edit') }}</a>
                        @include('projects._delete')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
