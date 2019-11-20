<?php 

namespace App;

use Illuminate\Database\Eloquent\Model;

class SectionTranslations extends Model {
	protected $table = 'section_translations';
	protected $fillable = ['id','lang','body'];
	public $timestamps = false;

	public function translations(){
		return $this->belongsTo('App\Sections','id');
	}
}