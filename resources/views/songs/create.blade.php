@extends ('layouts.app')

@section ('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Song</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('songs.store') }}">
                            @csrf
                            @include('songs._form')
                        </form>
                    </div>
                    <div class="card-footer text-right">
                        <a href="{{ $indexUrl }}" class="btn btn-primary">Back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
