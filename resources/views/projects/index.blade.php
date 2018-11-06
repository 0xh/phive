@extends ('layouts.app')

@section ('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h1 class="mb-3">Projects</h1>
                <ul class="list-group mb-2">
                    @foreach ($projects as $project)
                        <li class="list-group-item">
                            <a href="#">{{ $project->title }}</a>
                        </li>
                    @endforeach
                </ul>
                {{ $projects->links() }}
            </div>
        </div>
    </div>
@endsection
