<?php

//Rotas do Painel
$this->group (['prefix'=> 'panel', 'namespace'=> 'Panel'], function(){
    
    $this->resource('brands', 'BrandController');
    
    $this->get('/', 'PanelController@index')->name('panel');
});



//Rotas do Site
Route::get('promocoes', 'Site\SiteController@promotions')->name('promotions');
Route::get('/', 'Site\SiteController@index')->name('index');

Auth::routes();
