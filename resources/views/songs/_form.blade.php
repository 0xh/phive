<div class="form-group row">
    <label for="title" class="col-sm-4 col-form-label text-md-right">
        {{ __('Artist') }}
    </label>

    <div class="col-md-6">
        <input
            id="artist"
            type="text"
            class="form-control{{ $errors->has('artist') ? ' is-invalid' : '' }}"
            name="artist"
            placeholder="Song Artist"
            value="{{ old('artist') ?? $song->artist }}"
            autofocus>

        @if ($errors->has('artist'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('artist') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="title"
           class="col-sm-4 col-form-label text-md-right">{{ __('Title') }}</label>
    <div class="col-md-6">
        <input
            id="title"
            type="text"
            class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
            name="title"
            placeholder="Song Title"
            value="{{ old('title') ?? $song->title }}">

        @if ($errors->has('title'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('title') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="url"
           class="col-sm-4 col-form-label text-md-right">{{ __('Url') }}</label>
    <div class="col-md-6">
        <input
            id="url"
            type="text"
            class="form-control{{ $errors->has('url') ? ' is-invalid' : '' }}"
            name="url"
            placeholder="YouTube Link"
            value="{{ old('url') ?? $song->url }}">

        @if ($errors->has('title'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('url') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="published_at"
           class="col-sm-4 col-form-label text-md-right">{{ __('Published Date') }}</label>
    <div class="col-md-6">
        <input
            id="published_at"
            type="date"
            class="form-control{{ $errors->has('published_at') ? ' is-invalid' : '' }}"
            name="published_at"
            value="{{ old('published_at') ?? $song->published_at }}">

        @if ($errors->has('published_at'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('published_at') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row mb-0">
    <div class="col-md-8 offset-md-4">
        <button type="submit" class="btn btn-primary">
            {{ $submitButtonText ?? 'Create' }}
        </button>
    </div>
</div>
