@extends ('layouts.app')

@section ('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $project->title }}</div>
                    <div class="card-body">
                        {{ $project->description }}
                    </div>
                    <div class="card-footer d-flex justify-content-center">
                        <a href="{{ route('projects.edit', $project) }}" class="btn btn-primary">{{ __('Edit') }}</a>
                        @include('projects._delete')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
