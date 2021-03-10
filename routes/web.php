<?php

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

Route::get('/', function () {
    return view('index');
});
Route::get("",'sectionController@getIndex')->name('index');
Route::get("lien-he",'sectionController@getContact')->name('contact');
Route::get("ve-chung-toi",'sectionController@getAboutUs')->name('about-us');
Route::get("post-layout",'sectionController@getPostLayout')->name('post-layout');
Route::get("post-format",'sectionController@getPostFormat')->name('post-format');
Route::get("tac-gia", 'sectionController@getAuthor')->name('author');
Route::get("kinh-doanh",'sectionController@getBusiness')->name('business');
Route::get("phong-cach-song", 'sectionController@getLifeStyle')->name('life-style');
Route::get("cong-nghe",'sectionController@getTechnology')->name('technology');
Route::get("the-thao",'sectionController@getSports')->name('sports');
Route::get("team",'sectionController@getTeam')->name('team');
Route::get("error-404",'sectionController@getError')->name('error-404');
Route::get("under-construction",'sectionController@getConstruction')->name('under-construction');
Route::get("post-format-standard",'sectionController@getPostFormatStandard')->name('post-format-standard');
Route::get("post-format-video",'sectionController@getPostFormatVideo')->name('post-format-video');
// View::share('active', 'is-active');
// 
// ADMIN
// ADMIN
Route::get('login', 'adminColtroller@getLogin')->name('login');
Route::post('postLogin', 'adminColtroller@postLogin')->name('postLogin');
Route::get('admin','adminColtroller@getAdmin')->name('admin');
Route::prefix('admin')->group(function(){
	Route::prefix('category')->group(function(){
		Route::get('/', function(){
			return redirect()->route('category-list');
		});
		Route::get('category-add','adminColtroller@getCateAdd')->name('category-add');
		Route::post('category-add','adminColtroller@postCateAdd')->name('category-add');
		Route::get('category-edit/{id}','adminColtroller@getCateEdit')->name('category-edit');
		Route::post('category-edit/{id}','adminColtroller@postCateEdit')->name('category-edit');
		Route::get('category-list','adminColtroller@getCateList')->name('category-list');
	});
	Route::prefix('post')->group(function(){
		Route::get('post-add',"adminColtroller@getPostAdd")->name('post-add');
		Route::get('post-edit', "adminColtroller@getPostEdit")->name('post-edit');
		Route::get('post-list', "adminColtroller@getPostList")->name('post-list');
	});
	Route::prefix('product')->group(function(){
		Route::get('product-add', "adminColtroller@getProductAdd")->name('product-add');
		Route::get('product-edit', "adminColtroller@getProductEdit")->name('product-edit');
		Route::get('product-list', "adminColtroller@getProductList")->name('product-list');
	});
	Route::prefix('user')->group(function(){
		Route::get('user-add', "adminColtroller@getUserAdd")->name('user-add');
		Route::post('user-add', "adminColtroller@postUserAdd")->name('user-add');
		Route::get('user-edit', "adminColtroller@getUserEdit")->name('user-edit');
		Route::get('user-list', "adminColtroller@getUserList")->name('user-list');
	});
	Route::prefix('author')->group(function(){
		Route::get('author-add', "adminColtroller@getAuthorAdd")->name('author-add');
		Route::post('author-add', "adminColtroller@postAuthorAdd")->name('post-author-add');
		Route::get('author-edit', "adminColtroller@getAuthorEdit")->name('author-edit');
		Route::get('author-list', "adminColtroller@getAuthorList")->name('author-list');
	});
	
	
});
// end route Admin
// 
// Route::get('admin/author', function(){
// 	Schema::table('author', function($table){
// 		$table->dropForeign('user_id');
// 	});
// });
























