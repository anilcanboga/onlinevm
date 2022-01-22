<?php

use App\Http\Controllers\AgendaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
Auth::routes(['verify' => true]);

Route::get('/', function () {
    return view('auth.login');
});

//Route::get('/countdown-page', 'HomeController@countdown_page')->name('countdown_page');

//Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//Route::resource('agendas', AgendaController::class);




Route::middleware([
    'verified'
])->group(function () {
    Route::get('/', 'HomeController@intro')->name('intro');
    Route::get('/agenda', 'HomeController@agenda')->name('agenda');
    Route::get('/meeting_room', 'HomeController@meeting_room')->name('meeting_room');
});


Route::middleware(['admin_role_checker_middleware'])->group(function () {
    Route::get('/agenda/crud', 'IndexController@view_create_agenda')->name('view_create_agenda');
    Route::post('/agenda/store', 'IndexController@postAgenda')->name('postAgenda');
    Route::get('/agenda/delete/{id}', 'IndexController@deleteAgenda')->name('deleteAgenda');
    Route::get('/agenda/edit/{id}', 'IndexController@getEditAgenda')->name('getEditAgenda');
    Route::post('/agenda/edit/', 'IndexController@postEditAgenda')->name('postEditAgenda');
    Route::get('/user_list', 'UserController@getUser')->name('getUser');
});


Route::get('/countdown-page', function () {
    return view('countdown_page');
});



/*
Route::middleware(['auth'])->group(function () {
    Route::get('/admin/feedback', 'FeedbackController@index')->name('feedback.index');
});
*/


Route::get('/intro', 'HomeController@intro')->name('intro');

//ics
Route::get('/googleCalendar', 'HomeController@googleCalendar')->name('googleCalendar');
Route::get('/outlookCalendar', 'HomeController@outlookCalendar')->name('outlookCalendar');
