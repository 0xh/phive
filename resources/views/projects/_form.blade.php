<div class="form-group row">
    <label for="title" class="col-sm-4 col-form-label text-md-right">
        {{ __('Title') }}
    </label>

    <div class="col-md-6">
        <input
            id="title"
            type="text"
            class="form-control{{ $errors->has('title') ? ' is-invalid' : '' }}"
            name="title"
            placeholder="Project Title"
            value="{{ old('title') ?? $project->title }}"
            required
            autofocus>

        @if ($errors->has('title'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('title') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group row">
    <label for="description"
           class="col-sm-4 col-form-label text-md-right">{{ __('Description') }}</label>
    <div class="col-md-6">
        <textarea
            name="description"
            id="description"
            cols="30"
            rows="5"
            class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}"
            placeholder="Project Description">{{ old('description') ?? $project->description }}</textarea>

        @if ($errors->has('description'))
            <span class="invalid-feedback" role="alert">
                <strong>{{ $errors->first('description') }}</strong>
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
