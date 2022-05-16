<?php

use App\Http\Controllers\UserController;
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


Route::get("/{uri?}", [UserController::class, "index"])->where("uri","(|accueil|home)")->name("welcome");
Route::get("/a-propos",[UserController::class, "about"])->name("regular.about");
Route::get("/nos-cours",[UserController::class, "courses"])->name("regular.courses");
Route::get("/temoignages",[UserController::class, "testimonial"])->name("regular.testimonial");
Route::get("/notre-equipe",[UserController::class, "our_team"])->name("regular.our-team");
Route::get("/contactez-nous",[UserController::class, "contact_us"])->name("regular.contact-us");
Route::group(["middleware" => ["auth","verified"]], function () {
    Route::get('/moncompte', [UserController::class, "account"])->name("regular.account");
});
// Route::get('/home', function () {
//     dd(\Illuminate\Support\Facades\Auth::user());
// })->middleware(["auth","verified"]);


// Route::group(['middleware' => 'auth'], function(){

//     Route::group(['middleware' => 'role:Admin,CEO'], function(){

//         Route::get('/ceo-panel', [AdminController::class, 'ceo_panel'])->middleware('role:CEO')->name('ceo_panel');

//         Route::get('/admin-panel', [AdminController::class, 'admin_panel'])->name('admin_panel');

//     });

//   });

require_once __DIR__."/fortify.php";
