<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sections extends Model {
	protected $table = 'sections';
	protected $fillable = ['section_index', 'is_hidden'];
	public $timestamps = false;

	public function translations(){
		return $this->hasMany('App\SectionTranslations', 'id');
	}
}