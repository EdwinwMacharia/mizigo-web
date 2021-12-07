<?php
use App\Http\Livewire\HomeComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\subadmin\SubadminDashboardComponent;
use App\Http\Livewire\superadmin\SuperadminDashboardComponent;

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
//     return view('welcome');
// });
Route::get('/',HomeComponent::class);

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
   Route::get('/subadmin/dashboard',SubadminDashboardComponent::class)->name('subadmin.dashboard');
});

Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function(){
    Route::get('/superadmin/dashboard',SuperadminDashboardComponent::class)->name('superadmin.dashboard');
});
