<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlaceTranslations extends Model
{
    protected $table = 'places_translations';
    protected $fillable = ['id', 'lang', 'description'];

    public $timestamps = false;

    public function translations() {
        return $this->belongsTo('App\Place', 'id');
    }
}
