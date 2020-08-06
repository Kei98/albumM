<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cancion extends Model
{
    protected $guarded = ["id", "created_at", "updated_at"];

    public function albums () {
        return $this->belongsTo("App\Album", "album_id");
    }
}
