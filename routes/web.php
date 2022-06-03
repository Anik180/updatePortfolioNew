<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\SkillinfoController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\CertificateController;
use App\Http\Controllers\Admin\ConfigController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\SmsController;
use App\Http\Controllers\Admin\SeoController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\FrontblogController;
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

// Route::get('/', function () {
//     return view('front.index');
// });
Route::get('/', [App\Http\Controllers\FrontController::class, 'index']);
Route::get('view-blog/{id}/{slug}', [FrontblogController::class, 'singleBlog']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/logout', [App\Http\Controllers\HomeController::class, 'logout'])->name('admin.logout');

//slider
Route::get('/admin/slider', [SliderController::class, 'adminSlider'])->name('admin.slider');
Route::post('/update/slider{id}', [SliderController::class, 'updateSlider'])->name('update.slider');
Route::post('/update/slider/photo{id}', [SliderController::class, 'updatePhoto'])->name('update.slider.photo');
//about
Route::get('/admin/about', [AboutController::class, 'adminAbout'])->name('admin.about');
Route::post('/update/about{id}', [AboutController::class, 'updateAbout'])->name('update.about');
Route::post('/update/about/photo{id}', [AboutController::class, 'aboutPhoto'])->name('update.about.photo');
//skill route
Route::resource('skill', SkillController::class);
//skill INfo
Route::get('/admin/skill/info', [SkillinfoController::class, 'adminSkillInfo'])->name('admin.skillinfo');
Route::post('/update/skill/info{id}', [SkillinfoController::class, 'updateSkillInfo'])->name('update.skillinfo');
Route::post('/update/skill/info/photo{id}', [SkillinfoController::class, 'SkillInfoPhoto'])->name('update.skillinfo.photo');
//category route
Route::resource('category', CategoryController::class);
//project route
Route::get('/admin/project', [ProjectController::class, 'adminProject'])->name('admin.project');
Route::get('/admin/project/create', [ProjectController::class, 'adminProjectCreate'])->name('admin.project.create');
Route::post('/admin/project/store', [ProjectController::class, 'adminProjectStore'])->name('admin.project.store');
Route::get('/project/edit{id}', [ProjectController::class, 'projectEdit'])->name('project.edit');
Route::post('/update/project{id}', [ProjectController::class, 'updateProject'])->name('update.project');
Route::post('/update/project/photo{id}', [ProjectController::class, 'updateProjectPhoto'])->name('update.project.photo');
Route::delete('/project/destroy{id}', [ProjectController::class, 'projectDestroy'])->name('project.destroy');
//certificates route
Route::resource('certificate', CertificateController::class);
Route::post('/update/certificate/photo{id}', [CertificateController::class, 'updateCertificatePhoto'])->name('update.certificate.photo');
//config
Route::get('/admin/config', [ConfigController::class, 'adminConfig'])->name('admin.config');
Route::post('/update/config{id}', [ConfigController::class, 'updateConfig'])->name('update.config');

//logo and fav
Route::get('/admin/logo', [ConfigController::class, 'adminLogo'])->name('admin.logo');
Route::post('/update/title{id}', [ConfigController::class, 'updateTitle'])->name('update.title');
Route::post('/update/logo{id}', [ConfigController::class, 'updateLogo'])->name('update.logo');
// front route
Route::post('/message/store', [SmsController::class, 'MessageStore'])->name('message.store');
// cv
Route::get('/cv/upload', [AboutController::class, 'adminCv'])->name('cv.upload');
Route::post('/update/cv{id}', [AboutController::class, 'updateCv'])->name('update.cv');
// seo
Route::get('/admin/seo', [SeoController::class, 'adminSeo'])->name('seo.upload');
Route::post('/update/seo{id}', [SeoController::class, 'updateSeo'])->name('update.seo');
//blog
Route::resource('blog', BlogController::class);
Route::post('/update/blog/photo{id}', [BlogController::class, 'updateBlogPhoto'])->name('update.blog.photo');
