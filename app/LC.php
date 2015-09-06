<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LC extends Model
{
    protected $table = 'lcs';

    protected $fillable = ['city', 'country'];

    /**
    * Get the events for this lc.
    */
    public function events()
    {
        return $this->hasMany('App\Event');
    }
}
