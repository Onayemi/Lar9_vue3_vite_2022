<?php

// use QrCode;
use LaravelQRCode\Facades\QRCode;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\API\AuthController;

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
    return view('welcome');
});
Route::get('/qrcode', function () {
    return view('qrcode');
});

// Route::get('clear-cache', function() {
//     Artisan::call('route:cache');
//     Artisan::call('config:cache');
//     Artisan::call('cache:clear');
//     Artisan::call('view:clear');
//     return 'All is clear';
// });
Route::get('/{cmd}', function($cmd) {
  $cmd = trim(str_replace("-",":", $cmd));
  $validCommands = ['cache:clear', 'optimize', 'route:cache', 'route:clear', 'view:clear', 'config:cache'];
  if (in_array($cmd, $validCommands)) {
      Artisan::call($cmd);
      return "<h1>Ran Artisan command: {$cmd}</h1>";
  } else {
      return "<h1>Not valid Artisan command</h1>";
  }
});

Route::get('/{pathMatch}', function(){ return view('welcome'); })->where('pathMatch',".*");

Route::get('/file', [AuthController::class, 'get_pdf']);
Route::get('/file-pdf', [AuthController::class, 'pdf']);

// Route::get('/qrcode', [QrCodeController::class, 'qrcode']);
// Route::get('qr-code', function () {
//     $id = "product_qrcode/". 'Solution'.".png";
//   return QRCode::text('QR Code Generator for Laravel!')
//   ->setSize(8)
//   ->setMerge(2)
//   ->setOutFile($id)
//   ->png();    
// });

// Route::get('/clear-cache', function() {
//     Artisan::call('route::cache');
//     Artisan::call('config::cache');
//     Artisan::call('cache::clear');
//     Artisan::call('view::clear');
//     return 'All is clear';
// });