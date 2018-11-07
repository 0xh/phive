@auth
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
@endauth
