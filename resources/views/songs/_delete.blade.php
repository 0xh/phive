<form method="POST" action="{{ route('songs.destroy', $song) }}">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-sm btn-danger">Delete</button>
</form>
