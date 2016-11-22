<?php


/* protected urls */
Route::group(array('before' => 'auth', 'prefix' => 'teacher'), function()
{

	//----------Permission
	Route::get('/index', array('as' => 'teacher-index', 'uses' => 'CrudController@index'));

	Route::any('/create', array('as' => 'teacher-create', 'uses' => 'CrudController@create'));
	Route::any('/read/{id?}', array('as' => 'teacher-read', 'uses' => 'CrudController@read'));
	Route::any('/update/{id?}', array('as' => 'teacher-update', 'uses' => 'CrudController@update'));
	Route::any('/delete/{id?}', array('as' => 'teacher-delete', 'uses' => 'CrudController@delete'));

	Route::any('/bulk/action', array('as' => 'teacher-bulk-action', 'uses' => 'CrudController@bulkAction'));

});