<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use RealRashid\SweetAlert\Facades\Alert;
use App\Http\Controllers\Backend\SeoController;
use App\Http\Controllers\Backend\HeroController;
use App\Http\Controllers\Backend\TeamController;
use App\Http\Controllers\Backend\ClientController;
use App\Http\Controllers\Backend\AboutUsController;
use App\Http\Controllers\Backend\BackendController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Backend\SiteConfigController;
use App\Http\Controllers\Backend\ClientReviewController;
use App\Http\Controllers\Backend\PhotoGalleryController;
use App\Http\Controllers\Backend\VideoGalleryController;
use App\Http\Controllers\Backend\MessageController;
use App\Http\Controllers\Backend\ProgressController;
use App\Http\Controllers\SocialController;

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
/* Home Page Route */
Route::get('/', [FrontendController::class, 'index'])->name('index');

//Message Route
Route::post('/msgstore', [MessageController::class, 'store'])->name('message.store');
/* Backend Routes */
Route::group(['prefix' => '/admin', 'middleware' => ['auth']], function(){
    Route::get('/', [BackendController::class, 'index'])->name('dashboard');
     
    Route::resources([
        '/site-config' => SiteConfigController::class,
        '/hero' => HeroController::class,
        '/aboutus' => AboutUsController::class,
        '/product' => ProductController::class,
        '/service' => ServiceController::class,
        '/team' => TeamController::class,
        '/client' => ClientController::class,
        '/client-review' => ClientReviewController::class,
        '/photo-gallery' => PhotoGalleryController::class,
        '/video-gallery' => VideoGalleryController::class,
        '/seo' => SeoController::class,
        '/social' => SocialController::class,
        '/messages' => MessageController::class,
        '/progress' => ProgressController::class,
        ]);
        
    });
    Auth::routes();
