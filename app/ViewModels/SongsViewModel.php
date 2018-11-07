<?php

namespace App\ViewModels;

use App\Http\Controllers\Song\SongsController;
use App\Models\Song;
use App\Models\User;
use Carbon\Carbon;
use Spatie\ViewModels\ViewModel;

class SongsViewModel extends ViewModel
{
    public $indexUrl = null;

    /** @var User $user */
    protected $user;

    /** @var Song $song */
    protected $song;

    /**
     * SongsViewModel constructor.
     * @param User $user
     * @param Song $song
     */
    public function __construct(User $user = null, Song $song = null)
    {
        $this->user = $user;
        $this->song = $song;

        $this->indexUrl = action([SongsController::class, 'index']);
    }

    public function song(): Song
    {
        return $this->song ?? new Song;
    }

    /**
     * @param Carbon $date
     * @return string
     */
    public function humanDate(Carbon $date): string
    {
        return $date->diffForHumans();
    }
}
