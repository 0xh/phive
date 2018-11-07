<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Song
 *
 * @property int $id
 * @property string $artist
 * @property string $title
 * @property string $url
 * @property \Illuminate\Support\Carbon $published_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Song whereArtist($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Song whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Song whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Song wherePublishedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Song whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Song whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Song whereUrl($value)
 * @mixin \Eloquent
 * @property int $user_id
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Song whereUserId($value)
 */
class Song extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'artist', 'title', 'url', 'published_at'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['published_at'];

    /**
     * Get the user that owns the song.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Set the user's first name.
     *
     * @param string $url
     * @return void
     */
    public function setUrlAttribute(string $url)
    {
        $this->attributes['url'] = str_contains($url, 'https://www.youtube.com/watch?v=')
            ? 'https://www.youtube.com/embed/' . explode('?v=', $url)[1]
            : $url;
    }
}
