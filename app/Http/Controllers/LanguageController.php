<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public static function setViewLanguage() {
        return app()->setlocale(session()->get('applocale') ?? app()->getLocale());
    }

    public function changeLanguage($lang) {
        session()->put('applocale', $lang);
        return redirect()->back();
    }

    public static function getLanguage() {
        return session()->get('applocale') ?? app()->getLocale();
    }
}
