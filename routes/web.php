<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
/****Frontend routes starts****/
Route::get('/', 'frontend\FrontEndController@main')->name('main');
Route::get('/web/course', 'frontend\FrontEndController@webCourse')->name('webCourse');
Route::get('/graphic/course', 'frontend\FrontEndController@graphicCourse')->name('graphicCourse');
Route::get('/digital/course', 'frontend\FrontEndController@digitalMarketCourse')->name('digitalMarketCourse');
Route::get('/success', 'frontend\FrontEndController@success')->name('success');
Route::get('/successP2', 'frontend\FrontEndController@successP2')->name('successP2');
Route::get('/successP3', 'frontend\FrontEndController@successP3')->name('successP3');
Route::get('/blogs', 'frontend\FrontEndController@blogs')->name('blogs');
Route::get('/contact', 'frontend\FrontEndController@contact')->name('contact');

// Route::get('/login', 'frontend\FrontEndController@login')->name('login');
Route::get('/register', 'frontend\FrontEndController@register')->name('register');

/****Frontend routes ends****/




//Default
//Route::get('/', function () {
    //return view('welcome');
//});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');


//Admin
Route::group(['prefix'=>'admin','middleware'=>['admin','auth'],'namespace'=>'admin'],function(){
    Route::get('dashboard','AdminController@index')->name('admin.dashboard');
    Route::get('users','AdminController@users');
    Route::get('blog','AdminController@blog');
    Route::get('mail','AdminController@mail');
    Route::get('slider','AdminController@slider');
    Route::get('charts','AdminController@charts');
    Route::get('table_basic','AdminController@table_basic');
    Route::get('table_datatable','AdminController@table_datatable');
    Route::get('forms_general','AdminController@formsGeneral');
    Route::get('forms_select','AdminController@formsSelect');
    Route::get('forms_validation','AdminController@formsValidation');
    Route::get('forms_text_editors','AdminController@formsTextEditors');
    Route::get('forms_multiple_file_upload','AdminController@formsMultipleFileUpload');
    Route::get('forms_date_time','AdminController@formsDateTime');
    Route::get('forms_color_picker','AdminController@formsColorPicker');
    Route::get('media_fancybox','AdminController@mediaFancybox');
    Route::get('media_masonry','AdminController@mediaMasonry');
    Route::get('page_timeline','AdminController@pageTimeline');
    Route::get('page_pricing_tables','AdminController@pagePricingTable');
    Route::get('form/data','AdminController@formData')->name('admin.data.list');
    Route::get('form/{id}','AdminController@formDataEdit')->name('admin.form.edit');
    Route::post('form/update/{id}','AdminController@formDataUpdate')->name('admin.form.update');

    Route::get('/enroll','AdminController@enroll')->name('admin.enroll');
    
});

Route::group(['prefix'=>'user','middleware'=>['user','auth'],'namespace'=>'user'],function(){
    Route::get('dashboard','UserController@index')->name('user.dashboard');
    //Route::post('form/submit','UserController@formSubmit')->name('user.form.submit');
    //Route::get('form/data','UserController@formData')->name('user.data.list');


    Route::get('/', 'UserController@home')->name('home');
    //Route::get('dashboard','UserController@index')->name('user.dashboard');
    Route::get('webdevelopment','UserController@webDevelopment')->name('user.webDevelopment');
    Route::get('digitalmerketing','UserController@digitalmerketing')->name('user.digitalmerketing');
    Route::get('profile','UserController@profile')->name('user.profile');
    
});


//Enroll
Route::post('/enroll','EnrollController@insert')->name('enroll');