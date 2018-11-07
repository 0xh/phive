@extends ('layouts.app')

@section ('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                @include ('songs._import')
                <div class="card">
                    <div class="card-header d-flex">
                        <span class="mr-auto">Songs</span>
                        @auth
                            <a href="{{ route('songs.create') }}" class="btn btn-sm btn-primary mr-2">Create</a>
                            <a href="{{ route('songs.export') }}" class="btn btn-sm btn-warning">Export</a>
                        @endauth
                    </div>
                    <ul class="list-group list-group-flush">
                        @forelse ($songs as $song)
                            <li class="list-group-item d-flex">
                                <span class="mr-auto">
                                    <a href="{{ route('songs.index', ['artist' => $song->artist]) }}"><strong>{{ $song->artist }}</strong></a>
                                    <em>-</em>
                                    <a href="{{ route('songs.show', $song) }}">{{ $song->title }}</a>
                                </span>
                                @can('update', $song)
                                    <a href="{{ route('songs.edit', $song) }}" class="btn btn-primary btn-sm mr-2">Edit</a>
                                    @include ('songs._delete')
                                @endcan
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
