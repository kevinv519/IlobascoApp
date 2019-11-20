<?php 
	
namespace App\Http\Controllers;

use App\Http\Requests\CreateSectionRequest;
use App\SectionTranslations;
use App\Sections;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class HomePageController extends Controller{

    public function index(){
        $sections = Sections::with([
            'translations'=>function($query){
                $query->select('id','body')->where('lang',LanguageController::getLanguage());
            }
        ])->where('is_hidden','0')->orderBy('section_index','asc')->get();

        return view('index', ['sections' => $sections]);
    }

    public function admin() {
        $sections = Sections::with([
            'translations'=>function($query){
                $query->select('id','body')->where('lang',LanguageController::getLanguage());
            }
        ])->where('is_hidden','0')->orderBy('section_index','asc')->get();
        return view('sections.index', ['sections' => $sections]);
    }

    public function create(){
        $s = new Sections;
        return view('sections.create')->with(['section'=>$s->translations()->get()]);
    }

    public function store(CreateSectionRequest $req){

        $section = new Sections;
        $section->create([
            "section_index" => DB::table('sections')->max('section_index')+1,
            "is_hidden" => '0'
        ]);

        $section = Sections::latest('id')->first();

        $section->translations()->saveMany([
            new SectionTranslations([
                "id" => $section->id,
                "lang" => 'es',
                "body" => $req->get('es_body')
            ]),
            new SectionTranslations([
                "id" => $section->id,
                "lang" => 'en',
                "body" => $req->get('en_body')
            ])
        ]);


        Session::flash('message','Created');

        return redirect()->route('section_path');
    }


    public function edit(Sections $section){
        $s = $section->translations()->get();
        if(!is_null($s[0]->id)){
            return view('sections.edit')->with(['section'=>$s]);
        }
    }

    public function update(Sections $section, CreateSectionRequest $req){

        $section->translations()->where('lang','es')->update(['body'=>$req->es_body]);
        $section->translations()->where('lang','en')->update(['body'=>$req->en_body]);


        session()->flash('message', 'Updated');

        return redirect()->route('section_path',['admin'=>true]);

    }

    public function delete(Sections $section){
        $section->delete();
        Session::flash('message', __('messages.sections.deleted_message'));
        return redirect()->route('section_path');
    }
}