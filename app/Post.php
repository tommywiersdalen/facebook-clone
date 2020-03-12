<?php

namespace App;

use App\scopes\Reverse;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    protected static function boot() {
        parent::boot();

        static::addGlobalScope(new Reverse());
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
