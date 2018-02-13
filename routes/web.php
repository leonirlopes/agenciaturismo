<?php

//Rotas do Painel
$this->get('panel', 'Panel\PanelController@index')->name('panel');

//Rotas do Site
Route::get('promocoes', 'Site\SiteController@promotions')->name('promotions');
Route::get('/', 'Site\SiteController@index')->name('index');

Auth::routes();
