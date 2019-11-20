<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateNewsRequest;
use App\News;
use App\NewsTranslation;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index() {
        $news = NewsTranslation::where('lang', LanguageController::getLanguage())->orderBy('id', 'desc')->paginate(10);
        return view('news.index', ["news" => $news]);
    }

    public function admin() {
        $news = NewsTranslation::where('lang', LanguageController::getLanguage())->orderBy('id', 'desc')->paginate(10);
        return view('news.admin', ["news" => $news]);
    }

    public function show(News $new){
        $translation = $new->translations()->where('lang', LanguageController::getLanguage())->first();
        if ($translation == null) {
            return redirect()->route('news_path');
        }
        return view('news.show', [
            "translation" => $translation
        ]);
    }

    public function store(CreateNewsRequest $request) {
        $new = new News;
        if (!is_null($request->get('filepath'))) {
            $new->cover_photo = $request->get('filepath');
        }
        $new->save();

        $new = News::latest('id')->first();
        $new->translations()->saveMany([
           new NewsTranslation([
               'id' => $new->id,
               'title' => $request->get('es_title'),
               'lang' => 'es',
               'description' => $request->get('es_body')
           ]),
            new NewsTranslation([
                'id' => $new->id,
                'title' => $request->get('en_title'),
                'lang' => 'en',
                'description' => $request->get('en_body')
            ])
        ]);

        session()->flash('messages', __('messages.news.created'));
        return redirect()->route('admin_news_path');
    }

    public function create() {
        $news = new News;
        return view('news.create', ['news' => $news]);
    }

    public function edit(News $news) {
        return view('news.edit', ["news" => $news]);
    }

    public function update(News $news, CreateNewsRequest $request){

        $news->translations()->where('lang','es')->update([
            'title' => $request->get('es_title'),
            'description'=> $request->get('es_body')
        ]);
        $news->translations()->where('lang','en')->update([
            'title' => $request->get('en_title'),
            'description'=> $request->get('en_body')
        ]);


        session()->flash('message', __('messages.news.updated'));

        return redirect()->route('admin_news_path');

    }

    public function delete(News $news) {
        $news->delete();
        session()->flash('message', __('messages.news.deleted'));
        return redirect()->route('admin_news_path');
    }
}
