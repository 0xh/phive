@extends ('layouts.app')

@section ('content')
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $project->title }}</div>
                    <div class="card-body">
                        <blockquote class="blockquote-footer mb-0">{{ $project->description }}</blockquote>
                    </div>
                    @if ($project->tasks->count())
                        @include ('projects._taskList')
                    @endif
                    <div class="card-footer d-flex justify-content-center">
                        <a href="{{ route('projects.edit', $project) }}" class="btn btn-primary">{{ __('Edit') }}</a>
                        @include('projects._delete')
                    </div>
                </div>
            </div>
        </div>
        @include ('projects._addTask')
    </div>
@endsection
