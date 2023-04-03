<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WidgetController;
use App\Http\Controllers\AdminblogController;
use App\Http\Controllers\AdminsliderController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\MailboxController;
use App\Http\Controllers\ComposemailController;
use App\Http\Controllers\AddproductController;
use App\Http\Controllers\ProductviewController;
use App\Http\Controllers\OrderController;


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
    return view('home');
});

Route::get('/admin/pages/widgets', [WidgetController::class, 'index'])->name('adminlayout.pages.widgets');



Route::get('/admin/pages/slider', [AdminsliderController::class, 'index'])->name('adminlayout.pages.slider');
Route::post('/admin/pages/slider', [AdminsliderController::class, 'store'])->name('admin.slider.store');
Route::delete('/admin/slider/{id}', [AdminsliderController::class, 'delete'])->name('admin.slider.delete');
// Route::put('/admin/slider/{id}', [AdminSliderController::class, 'update'])->name('admin.slider.update');


Route::get('/admin/pages/blogs', [AdminblogController::class, 'index'])->name('adminlayout.pages.blogs');
Route::get('/blog', [BlogController::class, 'index'])->name('frontend.blog');
Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');


Route::get('/admin/pages/mailbox', [MailboxController::class, 'index'])->name('adminlayout.pages.mailbox.mailbox');
Route::get('/admin/pages/composemail', [ComposemailController::class, 'index'])->name('adminlayout.pages.mailbox.compose');
Route::post('/send-mail', [ComposemailController::class, 'sendMail'])->name('sendMail');


Route::get('/admin/pages/viewproduct', [ ProductviewController::class, 'index'])->name('adminlayout.pages.shop.viewproduct');


Route::get('/admin/pages/addproduct', [AddproductController::class, 'index'])->name('adminlayout.pages.shop.addproduct');
Route::post('/submit_product', [AddproductController::class, 'store'])->name('products.store');


Route::get('/admin/pages/order', [OrderController::class, 'index'])->name('adminlayout.pages.shop.order');




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/indexadmin', function () {
        return view('adminlayout.indexadmin');
    })->name('indexadmin');
});