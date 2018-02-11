<?php

$this->get('panel', 'Panel\PanelController@index')->name('panel');

Route::get('promocoes', 'Site\SiteController@promotions')->name('promotions');

Route::get('/', 'Site\SiteController@index')->name('index');
