<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminRoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\ContactMessageController;
use App\Http\Controllers\Admin\RecycleBinController;
use App\Http\Controllers\Admin\BasicController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\TechnologyController;
use App\Http\Controllers\Admin\AboutUsController;
use App\Http\Controllers\Admin\ChooseUsController;
use App\Http\Controllers\Admin\ChooseMainController;
use App\Http\Controllers\Admin\AiController;
use App\Http\Controllers\Admin\AiMainController;
use App\Http\Controllers\Admin\PortfolioController;
use App\Http\Controllers\Admin\filterTypeController;
use App\Http\Controllers\Admin\FilterMainController;
use App\Http\Controllers\Admin\ProcessController;
use App\Http\Controllers\Admin\ProcessMainController;
use App\Http\Controllers\Admin\GetTouchController;

//  Front End Controller
use App\Http\Controllers\Website\FrontEndController;
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
// front End Site
Route::get('/', [FrontEndController::class,'index'])->name('/');
Route::post('/contact_message/send', [FrontEndController::class,'message'])->name('contact_message.send');


// Back End Site
Route::get('/dashboard', function () {
    return view('admin.dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//   Admin User Role 
Route::middleware('auth')->group(function (){
    route::get('/dashboard/role',[AdminRoleController::class, 'all'])->name('dashboard.role');
    route::get('/dashboard/role/add',[AdminRoleController::class, 'add'])->name('dashboard.role.add');
    route::post('/dashboard/role/insert',[AdminRoleController::class, 'insert'])->name('dashboard.role.insert');
    route::get('/dashboard/role/view/{slug}',[AdminRoleController::class, 'view'])->name('dashboard.role.view');
    route::get('/dashboard/role/edit/{slug}',[AdminRoleController::class, 'edit'])->name('dashboard.role.edit');
    route::post('/dashboard/role/update',[AdminRoleController::class, 'update'])->name('dashboard.role.update');
});

// Admin pnael User
Route::middleware('auth')->group(function (){
    route::get('/dashboard/user',[UserController::class, 'all'])->name('dashboard.user');
    route::get('/dashboard/user/add',[UserController::class, 'add'])->name('dashboard.user.add');
    route::post('/dashboard/user/insert',[UserController::class, 'insert'])->name('dashboard.user.insert');
    route::get('/dashboard/user/view/{slug}',[UserController::class, 'view'])->name('dashboard.user.view');
    route::get('/dashboard/user/edit/{slug}',[UserController::class, 'edit'])->name('dashboard.user.edit');
    route::post('/dashboard/user/update',[UserController::class, 'update'])->name('dashboard.user.update');
});

// Basic Controller
Route::middleware('auth')->group(function (){
    route::get('/dashboard/basic/view',[BasicController::class, 'view'])->name('dashboard.basic');
    route::post('/dashboard/basic/update',[BasicController::class, 'update'])->name('dashboard.basic.update');

    // contact Us
    route::get('/dashboard/contact/view',[ContactUsController::class, 'view'])->name('dashboard.contact');
    route::post('/dashboard/contact/update',[ContactUsController::class, 'update'])->name('dashboard.contact.update');

    // Banner 
    route::get('/dashboard/banner/view',[BannerController::class, 'view'])->name('dashboard.banner');
    route::post('/dashboard/banner/update',[BannerController::class, 'update'])->name('dashboard.banner.update');
});

// service Part 
Route::middleware('auth')->group(function (){
    route::get('/dashboard/service',[ServiceController::class, 'all'])->name('dashboard.service');
    route::get('/dashboard/service/add',[ServiceController::class, 'add'])->name('dashboard.service.add');
    route::post('/dashboard/service/insert',[ServiceController::class, 'insert'])->name('dashboard.service.insert');
    route::get('/dashboard/service/view/{slug}',[ServiceController::class, 'view'])->name('dashboard.service.view');
    route::get('/dashboard/service/edit/{slug}',[ServiceController::class, 'edit'])->name('dashboard.service.edit');
    route::post('/dashboard/service/update',[ServiceController::class, 'update'])->name('dashboard.service.update');
    route::post('/dashboard/service/softdelete',[ServiceController::class, 'softdel'])->name('dashboard.service.softdelete');
    route::post('/dashboard/service/restore',[ServiceController::class, 'restore'])->name('dashboard.service.restore');
    route::delete('/dashboard/service/delete/{slug}',[ServiceController::class, 'delete'])->name('dashboard.service.delete');
});

// +++++++++++ Technology 
Route::middleware('auth')->group(function (){
    route::get('/dashboard/technology',[TechnologyController::class, 'all'])->name('dashboard.technology');
    route::get('/dashboard/technology/add',[TechnologyController::class, 'add'])->name('dashboard.technology.add');
    route::post('/dashboard/technology/insert',[TechnologyController::class, 'insert'])->name('dashboard.technology.insert');
    route::get('/dashboard/technology/view/{slug}',[TechnologyController::class, 'view'])->name('dashboard.technology.view');
    route::get('/dashboard/technology/edit/{slug}',[TechnologyController::class, 'edit'])->name('dashboard.technology.edit');
    route::post('/dashboard/technology/update',[TechnologyController::class, 'update'])->name('dashboard.technology.update');
    route::post('/dashboard/technology/softdelete',[TechnologyController::class, 'softdel'])->name('dashboard.technology.softdelete');
    route::post('/dashboard/technology/restore',[TechnologyController::class, 'restore'])->name('dashboard.technology.restore');
    route::delete('/dashboard/technology/delete/{slug}',[TechnologyController::class, 'delete'])->name('dashboard.technology.delete');
});

// +++++++++++ AboutUS 
Route::middleware('auth')->group(function (){
    route::get('/dashboard/about',[AboutUsController::class, 'view'])->name('dashboard.about');
    route::post('/dashboard/about/update',[AboutUsController::class, 'update'])->name('dashboard.about.update');
});
// +++++++++++ Portfolio 
Route::middleware('auth')->group(function (){
    route::get('/dashboard/portfolio',[PortfolioController::class, 'view'])->name('dashboard.portfolio');
    route::post('/dashboard/portfolio/update',[PortfolioController::class, 'update'])->name('dashboard.portfolio.update');
});

// +++++++++++ Get iN TOUCH 
Route::middleware('auth')->group(function (){
    route::get('/dashboard/get-touch',[GetTouchController::class, 'view'])->name('dashboard.get-touch');
    route::post('/dashboard/get-touch/update',[GetTouchController::class, 'update'])->name('dashboard.get-touch.update');
});


// +++++++++++ Choose 
Route::middleware('auth')->group(function (){
    route::get('/dashboard/choose',[ChooseUsController::class, 'all'])->name('dashboard.choose');
    route::get('/dashboard/choose/add',[ChooseUsController::class, 'add'])->name('dashboard.choose.add');
    route::post('/dashboard/choose/insert',[ChooseUsController::class, 'insert'])->name('dashboard.choose.insert');
    route::get('/dashboard/choose/view/{slug}',[ChooseUsController::class, 'view'])->name('dashboard.choose.view');
    route::get('/dashboard/choose/edit/{slug}',[ChooseUsController::class, 'edit'])->name('dashboard.choose.edit');
    route::post('/dashboard/choose/update',[ChooseUsController::class, 'update'])->name('dashboard.choose.update');
    route::post('/dashboard/choose/softdelete',[ChooseUsController::class, 'softdel'])->name('dashboard.choose.softdelete');
    route::post('/dashboard/choose/restore',[ChooseUsController::class, 'restore'])->name('dashboard.choose.restore');
    route::delete('/dashboard/choose/delete/{slug}',[ChooseUsController::class, 'delete'])->name('dashboard.choose.delete');

    route::get('/dashboard/choose-main/view',[ChooseMainController::class, 'view'])->name('dashboard.choose-main');
    route::post('/dashboard/choose-main/update',[ChooseMainController::class, 'update'])->name('dashboard.choose-main.update');
});

//  ============  AiController start
Route::middleware('auth')->group(function (){
    route::get('/dashboard/aiservice',[AiController::class, 'all'])->name('dashboard.aiservice');
    route::get('/dashboard/aiservice/add',[AiController::class, 'add'])->name('dashboard.aiservice.add');
    route::post('/dashboard/aiservice/insert',[AiController::class, 'insert'])->name('dashboard.aiservice.insert');
    route::get('/dashboard/aiservice/view/{slug}',[AiController::class, 'view'])->name('dashboard.aiservice.view');
    route::get('/dashboard/aiservice/edit/{slug}',[AiController::class, 'edit'])->name('dashboard.aiservice.edit');
    route::post('/dashboard/aiservice/update',[AiController::class, 'update'])->name('dashboard.aiservice.update');
    route::post('/dashboard/aiservice/softdelete',[AiController::class, 'softdel'])->name('dashboard.aiservice.softdelete');
    route::post('/dashboard/aiservice/restore',[AiController::class, 'restore'])->name('dashboard.aiservice.restore');
    route::delete('/dashboard/aiservice/delete/{slug}',[AiController::class, 'delete'])->name('dashboard.aiservice.delete');

    route::get('/dashboard/aiservice-main/view',[AiMainController::class, 'view'])->name('dashboard.aiservice-main');
    route::post('/dashboard/aiservice-main/update',[AiMainController::class, 'update'])->name('dashboard.aiservice-main.update');
});

//  ==========     filterTypeController 
Route::middleware('auth')->group(function (){
    route::get('/dashboard/filter-cat',[filterTypeController::class, 'all'])->name('dashboard.filter-cat');
    route::get('/dashboard/filter-cat/add',[filterTypeController::class, 'add'])->name('dashboard.filter-cat.add');
    route::post('/dashboard/filter-cat/insert',[filterTypeController::class, 'insert'])->name('dashboard.filter-cat.insert');
    route::get('/dashboard/filter-cat/view/{slug}',[filterTypeController::class, 'view'])->name('dashboard.filter-cat.view');
    route::get('/dashboard/filter-cat/edit/{slug}',[filterTypeController::class, 'edit'])->name('dashboard.filter-cat.edit');
    route::post('/dashboard/filter-cat/update',[filterTypeController::class, 'update'])->name('dashboard.filter-cat.update');
    route::post('/dashboard/filter-cat/softdelete',[filterTypeController::class, 'softdel'])->name('dashboard.filter-cat.softdelete');
    route::post('/dashboard/filter-cat/restore',[filterTypeController::class, 'restore'])->name('dashboard.filter-cat.restore');
    route::delete('/dashboard/filter-cat/delete/{slug}',[filterTypeController::class, 'delete'])->name('dashboard.filter-cat.delete');

    //  ==========     filterController 
    route::get('/dashboard/filter',[FilterMainController::class, 'all'])->name('dashboard.filter');
    route::get('/dashboard/filter/add',[FilterMainController::class, 'add'])->name('dashboard.filter.add');
    route::post('/dashboard/filter/insert',[FilterMainController::class, 'insert'])->name('dashboard.filter.insert');
    route::get('/dashboard/filter/view/{slug}',[FilterMainController::class, 'view'])->name('dashboard.filter.view');
    route::get('/dashboard/filter/edit/{slug}',[FilterMainController::class, 'edit'])->name('dashboard.filter.edit');
    route::post('/dashboard/filter/update',[FilterMainController::class, 'update'])->name('dashboard.filter.update');
    route::post('/dashboard/filter/softdelete',[FilterMainController::class, 'softdel'])->name('dashboard.filter.softdelete');
    route::post('/dashboard/filter/restore',[FilterMainController::class, 'restore'])->name('dashboard.filter.restore');
    route::delete('/dashboard/filter/delete/{slug}',[FilterMainController::class, 'delete'])->name('dashboard.filter.delete');
});

//  ============  ProcessController start
Route::middleware('auth')->group(function (){
    route::get('/dashboard/process',[ProcessController::class, 'all'])->name('dashboard.process');
    route::get('/dashboard/process/add',[ProcessController::class, 'add'])->name('dashboard.process.add');
    route::post('/dashboard/process/insert',[ProcessController::class, 'insert'])->name('dashboard.process.insert');
    route::get('/dashboard/process/view/{slug}',[ProcessController::class, 'view'])->name('dashboard.process.view');
    route::get('/dashboard/process/edit/{slug}',[ProcessController::class, 'edit'])->name('dashboard.process.edit');
    route::post('/dashboard/process/update',[ProcessController::class, 'update'])->name('dashboard.process.update');
    route::post('/dashboard/process/softdelete',[ProcessController::class, 'softdel'])->name('dashboard.process.softdelete');
    route::post('/dashboard/process/restore',[ProcessController::class, 'restore'])->name('dashboard.process.restore');
    route::delete('/dashboard/process/delete/{slug}',[ProcessController::class, 'delete'])->name('dashboard.process.delete');

    route::get('/dashboard/process-main/view',[ProcessMainController::class, 'view'])->name('dashboard.process-main');
    route::post('/dashboard/process-main/update',[ProcessMainController::class, 'update'])->name('dashboard.process-main.update');
});


// Contact Message 
Route::middleware('auth')->group(function (){
    route::get('/dashboard/contact-message',[ContactMessageController::class, 'all'])->name('dashboard.contact-message');
    route::get('/dashboard/contact-message/view/{slug}',[ContactMessageController::class, 'view'])->name('dashboard.contact-message.view');
    route::post('/dashboard/contact-message/softdelete',[ContactMessageController::class, 'softdel'])->name('dashboard.contact-message.softdelete');
    route::post('/dashboard/contact-message/restore',[ContactMessageController::class, 'restore'])->name('dashboard.contact-message.restore');
    route::delete('/dashboard/contact-message/delete/{slug}',[ContactMessageController::class, 'delete'])->name('dashboard.contact-message.delete');
});

// Recycle Bin
Route::middleware('auth')->group(function (){
    route::get('/dashboard/recycle',[RecycleBinController::class, 'index'])->name('dashboard.recycle');
    //  ===========   Cntact msg Part
    route::get('/dashboard/recycle/contact-message',[RecycleBinController::class, 'contact_msg'])->name('dashboard.recycle.contact-message');
    //  ===========   Service Part
    route::get('/dashboard/recycle/service',[RecycleBinController::class, 'service'])->name('dashboard.recycle.service');
    //  ===========   choose
    route::get('/dashboard/recycle/choose',[RecycleBinController::class, 'choose'])->name('dashboard.recycle.choose');
    // ===========    Ai Service 
    route::get('/dashboard/recycle/aiservice',[RecycleBinController::class, 'aiservice'])->name('dashboard.recycle.aiservice');

    // ===========    Fill Type
    route::get('/dashboard/recycle/fil_type',[RecycleBinController::class, 'fil_type'])->name('dashboard.recycle.fil_type');

    // ===========    Filter Main
    route::get('/dashboard/recycle/filter',[RecycleBinController::class, 'filter'])->name('dashboard.recycle.filter');
     // ===========    Prcess Category
    route::get('/dashboard/recycle/process',[RecycleBinController::class, 'process'])->name('dashboard.recycle.process');
});

require __DIR__.'/auth.php';
