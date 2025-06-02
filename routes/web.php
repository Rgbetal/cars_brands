<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CarBrandController;
use App\Models\VehicleSupplier;
use App\Models\Car;
use App\Models\CarBrand;
use App\Http\Controllers\VehicleSupplierController;
use App\Http\Controllers\CarController;


/*
|--------------------------------------------------------------------------
| Routes publiques (authentification)
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');


Route::resource('cars', CarController::class);



/*
|--------------------------------------------------------------------------
| Routes protégées (auth)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {


    // Dashboard avec liste des marques
  Route::get('/bienvenue', function () {
    $brandsCount = CarBrand::count();
    $suppliersCount = VehicleSupplier::count();
    $carsCount = Car::count();
    $carsSold = Car::where('sold', true)->count(); // Supposant que tu as un champ 'sold' booléen

    return view('bienvenue', compact('brandsCount', 'suppliersCount', 'carsCount', 'carsSold'));
})->name('bienvenue');

    // CRUD des marques de voiture
    Route::resource('car-brands', CarBrandController::class);
    // CRUD des fournisseurs de véhicules
    Route::resource('vehicle_suppliers', VehicleSupplierController::class);
});
