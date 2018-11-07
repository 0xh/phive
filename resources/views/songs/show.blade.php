@extends ('layouts.app')

@section ('content')
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header d-flex">
                        <div class="mr-auto">
                            {{ $song->title }}
                            <em>by</em>
                            <strong>{{ $song->artist }}</strong>
                        </div>
                        <a href="{{ route('songs.edit', $song) }}" class="btn btn-sm btn-primary mr-2">Edit</a>
                        @include ('songs._delete')
                    </div>
                    <div class="card-body text-center">
                        <iframe width="560"
                                height="315"
                                src="{{ $song->url }}"
                                frameborder="0"
                                allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen
                        ></iframe>
                    </div>
                    <div class="card-footer text-right">
                        <em>Published @ {{ $song->published_at->diffForHumans() }}</em>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
