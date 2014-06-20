<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('demo/hello');
});
/*Route::get('/', function()
{
    echo Form::open(array('url' => 'log', 'method' => 'GET'));
    echo Form::label('nom', 'Nom :');
    echo Form::text('nom'),'<br>';
    echo Form::label('age', 'Age :');
    echo Form::text('age'),'<br>';
    echo Form::submit('Submit');
    echo Form::close();
});

Route::any('log', function()
{
  $texte = 'Le nom est '.Input::get('nom','test');
    if (Input::has('age')) $texte .='<br>'.'L\'âge est '.Input::get('age');
    return $texte;
   // return var_dump(Input::all());
});*/
//Route::get('users', 'UserController@getIndex');

Route::get('users', function()
{
    $users = User::all();

    return View::make('users')->with('users', $users);
});

/*
Route::post('log', function()
{
    return Input::get('nom');
});*/

Route::resource('mon_test', 'TestController');


Route::get('articles', array('before' => 'danger|big_article', function()
{
    return 'Traitement d\'un article avec un id inférieur ou égal à 100';
}));