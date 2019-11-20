<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table = 'places';
    protected $fillable = ['cover_photo', 'name'];

    public $timestamps = false;

    public function translations() {
        return $this->hasMany('App\PlaceTranslations', 'id');
    }
}
