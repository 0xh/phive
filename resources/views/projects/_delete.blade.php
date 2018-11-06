<form method="POST" action="{{ route('projects.destroy', $project) }}">
    @csrf
    @method('DELETE')
    <div class="form-group row mb-0">
        <div class="col-md-8 offset-md-4">
            <button type="submit" class="btn btn-danger">
                {{ __('Delete') }}
            </button>
        </div>
    </div>
</form>
