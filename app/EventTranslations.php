<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class EventTranslations extends Model
{
    protected $table = 'events_translations';
    protected $fillable = ['lang', 'title', 'description'];

    public $timestamps = false;

    public function events() {
        return $this->belongsTo('App\Event', 'id');
    }
}
