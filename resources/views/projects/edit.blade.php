@extends ('layouts.app')

@section ('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Project</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('projects.update', $project) }}" class="mb-2">
                            @csrf
                            @method('PATCH')
                            @include('projects._form', ['submitButtonText' => 'Update'])
                        </form>
                        @include('projects._delete')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
