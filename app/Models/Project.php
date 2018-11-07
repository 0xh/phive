<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Project
 *
 * @property int $id
 * @property string $title
 * @property string $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Task[] $tasks
 * @property int $user_id
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Models\Project whereUserId($value)
 */
class Project extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'title', 'description',
    ];

    /**
     * Get the user that owns the project.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the tasks for the given project.
     */
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function addTask(array $attributes)
    {
        $this->tasks()->create($attributes);
    }
}
