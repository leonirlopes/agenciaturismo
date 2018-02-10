<?php

$this->get('panel', 'Panel\PanelController@index')->name('panel');

Route::get('/', function () {
    return view('welcome');
});
