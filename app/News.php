<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    protected $fillable = [];

    public function translations() {
        return $this->hasMany('App\NewsTranslation', 'id');
    }
}
