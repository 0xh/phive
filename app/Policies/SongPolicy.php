<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Song;
use Illuminate\Auth\Access\HandlesAuthorization;

class SongPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can update the song.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Song  $song
     * @return mixed
     */
    public function update(User $user, Song $song)
    {
        return $user->id === $song->user_id;
    }
}
