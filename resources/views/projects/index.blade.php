@extends ('layouts.app')

@section ('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Projects</div>
                    <ul class="list-group list-group-flush">
                        @foreach ($projects as $project)
                            <li class="list-group-item">
                                <a href="{{ route('projects.show', $project) }}">{{ $project->title }}</a>
                            </li>
                        @endforeach
                    </ul>
                    <div class="card-footer pb-0">
                        {{ $projects->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
