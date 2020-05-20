<?php
// ===============================================
 // STATIC PAGES ==================================
 // ===============================================

 // show a static view for your home page (app/resources/views/home.blade.php)
//resume goes to home page
Route::get('/', function () {
    return view('view');
});


Route::resource('home', 'HomeController');
Route::resource('/', 'ViewController');




 // skills
 // Route::get('questionnaires', function()
 // {
 //     return view('questionnaires');
 // });

Route::resource('questionnaires', 'QuestionnaireController');


Route::auth();

Route::get('/home', 'HomeController@index');
