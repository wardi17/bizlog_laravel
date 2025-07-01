<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LocaleController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Bon_MuatController;
use App\Http\Controllers\Eir_InController;
use App\Http\Controllers\Master_Delivery_OrdersController;
use App\Http\Controllers\PelayaranController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\Master_Estimate_Of_RepairController;

use App\Http\Controllers\EOR_INController;
use App\Http\Controllers\Tarif_EORController;
use App\Http\Controllers\Tarif_loloController;

use App\Http\Controllers\LocationController;
use App\Http\Controllers\ConsigneeController;
use App\Http\Controllers\Repair_tarif_itemController;

use App\Http\Controllers\shippingController;


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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('login', [AuthController::class, 'showLoginForm'])->name('auth.login');
Route::post('login', [AuthController::class, 'login'])->name('login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware(['bli_middleware'])->group(function () {

    Route::get('set-locale/{locale}', [LocaleController::class, 'setLocale'])
        ->name('set.locale')
        ->middleware('SetLocale');
    Route::get('/Kontak', function () {
        return view('conten_main.Kontak');
    })->middleware('bli_middleware');
    Route::get('/Kantin', function () {
        return view('conten_main.Kantin');
    })->middleware('bli_middleware');

    Route::get('/Struktur_Organisasi', function () {
        return view('conten_main.Struktur_Organisasi');
    })->middleware('bli_middleware');

    Route::get('/Pergerakan_Kontainer', function () {
        return view('conten_main.Pergerakan_Kontainer');
    })->middleware('bli_middleware');
    Route::get('/Perbaikan', function () {
        return view('conten_main.Perbaikan');
    })->middleware('bli_middleware');

    Route::get('/Pencucian_Kontainer', function () {
        return view('conten_main.Pencucian_Kontainer');
    })->middleware('bli_middleware');

    Route::get('/Tentang_Kami', function () {
        return view('conten_main.Tentang_Kami');
    })->middleware('bli_middleware');

    Route::get('/Depot_Parkir', function () {
        return view('conten_main.Depot_Parkir'); // Pastikan Anda memiliki view di resources/views/index.blade.php tanpa login
    })->middleware('bli_middleware'); // Menggunakan middleware Anda

    Route::get('/index', function () {
        return view('index'); // Pastikan Anda memiliki view di resources/views/index.blade.php tanpa login
    })->middleware('bli_middleware'); // Menggunakan middleware Anda

    Route::get('/login', function () {
        return view('auth.login');
    })->middleware('bli_middleware');
    Route::put('/logout', function () {
        return view('auth.login');
    })->middleware('bli_middleware');


    //conten_app  memangil app
    Route::get('/appdashboard', function () {
        return view('conten_app.Dashboard.index'); // Gantilah ini sesuai kebutuhan harus login
    });

    Route::get('/delivery_order', function () {
        return view('conten_app.conten_main.Master_Delivery_Order.index'); // Gantilah ini sesuai kebutuhan harus login
    });

    Route::get('/EOR_IN', function () {
        return view('conten_app.conten_main.EOR_IN.index'); // Gantilah ini sesuai kebutuhan harus login
    });


    // Route::get('/bon_muat', function () {
    //    return view('conten_app.conten_main.bon_muat.index'); // Gantilah ini sesuai kebutuhan harus login
    // });
    //materdelivery
    Route::resource('msdeliveryorders', Master_Delivery_OrdersController::class);
    //bon muat
    Route::resource('location', LocationController::class);
    Route::resource('tarif_EOR', Tarif_EORController::class);
    Route::resource('tarif_lolo', Tarif_loloController::class);
    Route::resource('consignee', ConsigneeController::class);
    Route::resource('depo', ConsigneeController::class);
    //bon muat
    Route::resource('bon_muat', Bon_MuatController::class);
    //eir
    Route::resource('eirin', Eir_InController::class);

    Route::resource('pelayaran',PelayaranController::class);

    Route::resource('driver',DriverController::class);

	Route::resource('ms_estimate_of_repair',Master_Estimate_Of_RepairController::class);
    Route::resource('repair_tarif_item',Repair_tarif_itemController::class);
    Route::resource('shipping',shippingController::class);


    Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register.form');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
    Route::get('/verify-email/{token}', [AuthController::class, 'verifyEmail'])->name('verify.email');
});
