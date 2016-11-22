<?php

Route::group(array('before' => 'auth', 'prefix' => 'admin'), function()
{
//----------Permission
Route::get('/index', array('as' => 'teacher-index', 'uses' => 'TeacherController@index'));

Route::any('/create', array('as' => 'teacher-create', 'uses' => 'TeacherController@create'));
Route::any('/read/{id?}', array('as' => 'teacher-read', 'uses' => 'TeacherController@read'));
Route::any('/update/{id?}', array('as' => 'teacher-update', 'uses' => 'TeacherController@update'));
Route::any('/delete/{id?}', array('as' => 'teacher-delete', 'uses' => 'TeacherController@delete'));

Route::any('/bulk/action', array('as' => 'teacher-bulk-action', 'uses' => 'TeacherController@bulkAction'));

});
Route::any('/hello',function() {
    return "my name is Taranjeet Singh";
});
Route::get('/get-teacher/{id}','TeacherController@getIndex');
Route::get('/update-teacher/{id}/{name}','TeacherController@updateName');

Route::get('/secured-change/{email}/{password}/name/{id}/{name}','TeacherController@securedChange');

Route::post('/api','TeacherController@securedApi');