<?php

namespace App\Filters;

use App\Models\User;
use EloquentFilter\ModelFilter;

class SongFilter extends ModelFilter
{
    /**
    * Related Models that have ModelFilters as well as the method on the ModelFilter
    * As [relationMethod => [input_key1, input_key2]].
    *
    * @var array
    */
    public $relations = [];

    public function artist()
    {
        if (request()->has('artist')) {
            return $this->where('artist', request('artist'));
        }
    }

    public function user()
    {
        if (request()->has('user')) {
            return $this->where('user_id', User::where('email', request('user'))->first()->id);
        }
    }
}
