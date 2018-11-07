@extends ('layouts.app')

@section ('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex">
                        <span class="mr-auto">Songs</span>
                        <a href="{{ route('songs.create') }}" class="btn btn-sm btn-primary">Create</a>
                    </div>
                    <ul class="list-group list-group-flush">
                        @forelse ($songs as $song)
                            <li class="list-group-item d-flex">
                                <span class="mr-auto">
                                    <a href="#"><strong>{{ $song->artist }}</strong></a>
                                    <em>-</em>
                                    <a href="{{ route('songs.show', $song) }}">{{ $song->title }}</a>
                                </span>
                                <a href="{{ route('songs.edit', $song) }}" class="btn btn-primary btn-sm mr-2">Edit</a>
                                @include ('songs._delete')
                            </li>
                        @empty
                            <li class="list-group-item">
                                No songs yet...
                            </li>
                        @endforelse
                    </ul>
                    <div class="card-footer pb-0">
                        {{ $songs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
