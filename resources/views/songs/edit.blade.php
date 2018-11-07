@extends ('layouts.app')

@section ('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Song</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('songs.update', $song) }}">
                            @csrf
                            @method('PATCH')
                            @include('songs._form', ['submitButtonText' => 'Update Song'])
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
