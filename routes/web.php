<?php

Route::get('/', function () {
    return view('welcome');
});

// GET /projects (index)
// GET /projects/create (create)
// GET /projects/1 (show)
// POST /projects (store)
// GET /projects/1/edit (edit)
// PATCH /projects/1 (update)
// DELETE /projects/1 (destroy)

Route::resource('projects', 'ProjectsController');

Route::post('/projects/{project}/tasks', 'ProjectTasksController@store');
Route::post('/completed-tasks/{task}', 'CompletedTasksController@store');
Route::delete('/completed-tasks/{task}', 'CompletedTasksController@destroy');


Route::get('/signup', 'HomeController@index')->name('home')->middleware('guest');

// This is the routes for the login and register endpoints.
Auth::routes();

