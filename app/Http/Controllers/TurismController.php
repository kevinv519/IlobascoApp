<?php

namespace App\Http\Controllers;

use App\Place;

class TurismController extends Controller
{
    public function index() {
        $places = Place::with([
            'translations' => function($query) {
                $query->where('lang', LanguageController::getLanguage());
            }
        ])->get();
        return view('about.turism', ["places" => $places]);
    }
}
