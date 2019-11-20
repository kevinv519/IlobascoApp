<?php

Route::name('home_path')->get('/', ['uses' => 'HomePageController@index', 'admin'=>false]);

Route::name('set_lang_path')->get('/lang/{lang}', 'LanguageController@changeLanguage');

Route::name('history_path')->get('/about/history', 'HistoryController@index');

Route::name('turism_path')->get('/about/turism', 'TurismController@index');

Route::name('develop_path')->get('/about/develop', function() {
    return view('about.desarrollo.index');
});

Route::name('structure_path')->get('/about/structure', function() {
    return view('about.structure.index');
});

Route::name('news_path')->get('/news', 'NewsController@index');

Route::name('new_path')->get('/news/{new}', 'NewsController@show');

Route::name('contact_path')->get('/contact', function() {
    return view('contact');
});

Route::name('sitemap_path')->get('/sitemap', function() {
    return view('sitemap');
});


Auth::routes();

Route::group([
        "prefix" => "admin",
        "middleware" => "auth"
    ],
    function(){

        Route::name('admin_path')->get('/', 'AdminController@index');

        Route::name('login_path')->get('login', 'AdminController@login');

        Route::name('section_path')->get('sections', 'HomePageController@admin');

        Route::name('create_section_path')->get('sections/create', 'HomePageController@create');

        Route::name('store_section_path')->post('sections','HomePageController@store');

        Route::name('edit_section_path')->get('sections/edit/{section}','HomePageController@edit');

        Route::name('update_section_path')->put('sections/{section}','HomePageController@update');

        Route::name('delete_section_path')->delete('sections/{section}','HomePageController@delete');

		Route::name('confirm_delete_section_path')->get('/admin/sections/{section}',function($section){
            return view('sections.confirm_delete')->with(['section'=>$section]);
        });

		Route::name('confirm_delete_news_path')->get('/admin/news/{news}',function($news){
            return view('news.confirm_delete')->with(['news'=>$news]);
        });

        Route::name('admin_news_path')->get('news', 'NewsController@admin');

        Route::name('create_news_path')->get('news/create', 'NewsController@create');

        Route::name('store_news_path')->post('news', 'NewsController@store');

        Route::name('edit_news_path')->get('news/edit/{news}', 'NewsController@edit');

        Route::name('update_news_path')->put('news/edit/{news}', 'NewsController@update');

        Route::name('delete_news_path')->delete('news/{news}', 'NewsController@delete');

    }
);
