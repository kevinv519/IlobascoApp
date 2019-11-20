<?php

namespace App\Http\Controllers;

use App\Event;

use App\EventTranslations;
use Illuminate\Http\Request;

class HistoryController extends Controller{

    public function index(){
        $events = EventTranslations::where('lang', LanguageController::getLanguage())->orderBy('id','desc')->get();
        return view('about.history.index', ['events'=> $events]);
    }

}
