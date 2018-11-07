<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Song;
use Illuminate\Auth\Access\HandlesAuthorization;

class SongPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the song.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Song  $song
     * @return mixed
     */
    public function view(User $user, Song $song)
    {
        //
    }

    /**
     * Determine whether the user can create songs.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

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

    /**
     * Determine whether the user can delete the song.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Song  $song
     * @return mixed
     */
    public function delete(User $user, Song $song)
    {
        //
    }

    /**
     * Determine whether the user can restore the song.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Song  $song
     * @return mixed
     */
    public function restore(User $user, Song $song)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the song.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Song  $song
     * @return mixed
     */
    public function forceDelete(User $user, Song $song)
    {
        //
    }
}
