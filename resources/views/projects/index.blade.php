@extends ('layouts.app')

@section ('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header d-flex">
                        <span class="mr-auto">
                            Projects
                        </span>
                        <a href="{{ route('projects.create') }}" class="btn btn-sm btn-primary">Create</a>
                    </div>
                    <ul class="list-group list-group-flush">
                        @forelse ($projects as $project)
                            <li class="list-group-item">
                                <a href="{{ route('projects.show', $project) }}">{{ $project->title }}</a>
                            </li>
                        @empty
                            <li class="list-group-item">No projects yet...</li>
                        @endforelse
                    </ul>
                    <div class="card-footer pb-0">
                        {{ $projects->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
