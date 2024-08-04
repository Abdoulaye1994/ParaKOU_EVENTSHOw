<?php

use App\Http\Controllers\AccueilController;
use App\Http\Controllers\AdmineController;
use App\Http\Controllers\AdministrateurController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/registre', [AdministrateurController::class, 'regist'])->name('registers');

Route::post('/registre', [AdministrateurController::class, 'regis'])->name('registers');

Route::get('/log', [AdministrateurController::class, 'logins'])->name('logine');

Route::post('/log', [AdministrateurController::class, 'logs'])->name('logine');

Route::get('/contact', [AdministrateurController::class, 'cont'])->name('contacte');

Route::post('/contact', [AdministrateurController::class, 'conter'])->name('contacte');





///////////////////////  HOMEPAGE  //////////////////////////////
Route::get('/', [AccueilController::class, 'park'])->name('parakou');

Route::get('acueil', [AccueilController::class, 'indexe'])->name('accueil');

Route::get('/home', [AccueilController::class, 'home'])->name('homes');

Route::get('/gallery', [AccueilController::class, 'imaging'])->name('gallery');

Route::get('/about', [AccueilController::class, 'about'])->name('abouting');

Route::get('/spek{id}', [AccueilController::class, 'speker'])->name('speakers');

Route::get('/spokers{id}', [AccueilController::class, 'spouker'])->name('spoke');


Route::get('/speklive{id}', [AccueilController::class, 'spekliver'])->name('speaklive');


Route::get('/tikey', [AccueilController::class, 'hometik'])->name('hometikey');

Route::post('/tikey', [AccueilController::class, 'hometiker'])->name('hometikey');

Route::get('/momo', [AccueilController::class, 'pay'])->name('paymomo');


/////////////////////////////// PAGES ///////////////////////////////////



Route::get('/eventing', [PagesController::class, 'evente'])->name('eventes');

Route::get('/program', [PagesController::class, 'progu'])->name('programing');

Route::get('/hotel', [PagesController::class, 'hotels'])->name('hoteling');

Route::get('/buy', [PagesController::class, 'buyticket'])->name('buy');

Route::get('/tour', [PagesController::class, 'index'])->name('tourisme');

Route::get('/list', [PagesController::class, 'artiste'])->name('listart');

Route::get('/blogue', [PagesController::class, 'bloguer'])->name('blogue');

Route::get('/parakou_blogue', [PagesController::class, 'pkbloguer'])->name('pkblogue');

Route::get('/parakou_rest', [PagesController::class, 'pkrest'])->name('restaurent');


Route::get('/anim', [PagesController::class, 'anime'])->name('animation');


Route::get('/concer', [PagesController::class, 'cont'])->name('concertes');


Route::get('/cult', [PagesController::class, 'cultes'])->name('culture');


Route::get('/spect', [PagesController::class, 'specta'])->name('spectacle');



/////////////////////////// Dashbor /////////////////////////////////////

Route::get('/admin', [AdmineController::class, 'indexadmin'])->name('admin');

Route::get('/programme', [AdmineController::class, 'programming'])->name('programme');


Route::get('/evenement', [AdmineController::class, 'evenements'])->name('event');

Route::get('/hote', [AdmineController::class, 'indexhotel'])->name('hote');


Route::get('/lieux', [AdmineController::class, 'lieu'])->name('visite');


Route::get('/artistes', [AdmineController::class, 'progue'])->name('art');


Route::get('/cfg', [AdmineController::class, 'config'])->name('open');


Route::get('/photo', [AdmineController::class, 'gall'])->name('photosh');

Route::get('/liver', [AdmineController::class, 'living'])->name('liver');

Route::get('/foire', [AdmineController::class, 'sportfete'])->name('feter');





Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});



