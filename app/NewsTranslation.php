<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NewsTranslation extends Model
{
    protected $table = 'news_translations';
    protected $fillable = ['id', 'title', 'lang', 'description'];
    public $timestamps = false;

    public function news() {
        return $this->belongsTo('App\News', 'id');
    }
}
