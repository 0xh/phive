@extends ('layouts.app')

@section ('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <form method="POST" action="{{ route('songs.import') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="">Import file</span>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="file" id="file" class="custom-file-input" required>
                            <label class="custom-file-label" for="file">Choose file</label>
                        </div>
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-outline-secondary">Upload</button>
                        </div>
                    </div>
                </form>
                <div class="card">
                    <div class="card-header d-flex">
                        <span class="mr-auto">Songs</span>
                        <a href="{{ route('songs.create') }}" class="btn btn-sm btn-primary mr-2">Create</a>
                        <a href="{{ route('songs.export') }}" class="btn btn-sm btn-warning">Export</a>
                    </div>
                    <ul class="list-group list-group-flush">
                        @forelse ($songs as $song)
                            <li class="list-group-item d-flex">
                                <span class="mr-auto">
                                    <a href="{{ route('songs.index', ['artist' => $song->artist]) }}"><strong>{{ $song->artist }}</strong></a>
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
