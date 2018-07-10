<?php

Route::get('contact', ['as' => 'contact',
	'uses' => 'Robust\Contact\Controllers\ContactController@index'
]);

Route::post('contactsend',[
	'as' => 'contactsend',
	'uses' => 'Robust\Contact\Controllers\ContactController@contactsend'
]);