<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@home');

Route::get('/new', 'PagesController@new');

Route::get('/todos', [
    'uses' => 'TodosController@index', 
    'as' => 'todos'
]);  
Route::get('/todo/edit/{id}', [
    'uses' => 'TodosController@edit', 
    'as' => 'todo.edit'
    ]); //router name is defined as 'todo.edit'

Route::post('todo/save/{id}', [
    'uses' => 'TodosController@save', 
    'as' => 'todo.save'
]);    

Route::get('/todo/delete/{id}', [
    'uses' => 'TodosController@delete', 
    'as' => 'todo.delete'
    ]); //router name is defined as 'todo.delete'

    
Route::get('/todo/completed/{id}', [
    'uses' => 'TodosController@completed', 
    'as' => 'todo.completed'
    ]); //router name is defined as 'todo.delete'


Route::post('/create/todo', 'TodosController@store');
