<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    protected $guarded = ["id", "created_at", "updated_at"];

    public function cancions () {
        return $this->hasMany("App\Cancion", "album_id");
    }
}
