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


/**
 * Admin routes
 */
Route::any('admin/logout', function(){
	Auth::logout();
	return Redirect::to('admin');
});


/**
 * Categories of Questions
*/
Route::any('admin/categories', 'CategoriesController@addCat');
Route::any('admin/categories/{id}', 'CategoriesController@editCat');
Route::any('admin/categories/del/{id}', 'CategoriesController@delCat');

/**
 * Question with number answers
 */
Route::any('admin/', 'QuestionNumberController@add');
Route::any('admin/q_numbers', 'QuestionNumberController@add');
Route::any('admin/q_numbers/{id}', 'QuestionNumberController@edit');
Route::any('admin/q_numbers/del/{id}', 'QuestionNumberController@delete');

/**
 * Question with word answers
 */
Route::any('admin/q_words', 'QuestionWordController@add');
Route::any('admin/q_words/{id}', 'QuestionWordController@edit');
Route::any('admin/q_words/del/{id}', 'QuestionWordController@delete');

/**
 * Question with test answers
*/
Route::any('admin/q_tests', 'QuestionTestController@add');
Route::any('admin/q_tests/{id}', 'QuestionTestController@edit');
Route::any('admin/q_tests/del/{id}', 'QuestionTestController@delete');

/**
 * Question with answers to order
*/
Route::any('admin/q_order', 'QuestionOrderController@add');
Route::any('admin/q_order/{id}', 'QuestionOrderController@edit');
Route::any('admin/q_order/del/{id}', 'QuestionOrderController@delete');

/**
 * Question with answers on map
*/
Route::any('admin/q_maps', 'QuestionMapController@add');
Route::any('admin/q_maps/{id}', 'QuestionMapController@edit');
Route::any('admin/q_maps/del/{id}', 'QuestionMapController@delete');

/**
 * Cities
*/
Route::any('admin/cities', 'CitiesController@add');
Route::any('admin/cities/{id}', 'CitiesController@edit');
Route::any('admin/cities/del/{id}', 'CitiesController@delete');

/**
 * Question List
*/
Route::any('admin/qlist', 'QuestionController@showList');

/**
 * City List
*/
Route::any('admin/clist', 'CitiesController@showList');

/**
 * Additional function
*/
Route::any('admin/additional', 'AdditionalController@showAdditional');











/**
 *---------- GAME ROUTES ------------
*/

Route::any('random/{model}', 'RandomQuestionController@showRandom');
Route::any('getgame/', 'RandomQuestionController@getGame');
Route::any('getgamejson/', 'RandomQuestionController@getGameJson');

Route::any('game/', 'GameController@showGame');
Route::any('/registration', 'IndexController@add');
Route::any('/', 'IndexController@login');
Route::any('/rating', 'IndexController@rate');
Route::any('/logout', function(){Auth::logout(); return Redirect::to('/'); });


/**
* END ROUTES
*/