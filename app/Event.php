<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model{
    protected $table = 'events';
    protected $fillable = [];

    public $timestamps = false;

    public function translations() {
        return $this->hasMany('App\EventTranslations', 'id');
    }
}


