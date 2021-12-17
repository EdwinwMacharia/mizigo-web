<?php
use App\Http\Livewire\HomeComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\subadmin\SubadminDashboardComponent;
use App\Http\Livewire\superadmin\SuperadminDashboardComponent;
use App\Http\Livewire\superadmin\AdminAddUserComponent;
use App\Http\Livewire\DashboardComponent;
use App\Http\Livewire\FuelingComponent;
use App\Http\Livewire\RatesComponent;
use App\Http\Livewire\AddFuelDataComponent;
use App\Http\Livewire\ReportIncidentComponent;
use App\Http\Livewire\superadmin\AdminUsersComponent;
use App\Http\Livewire\superadmin\DriversComponent;
use App\Http\Livewire\superadmin\AddDriverComponent;
use App\Http\Livewire\superadmin\AddRatesComponent;
use App\Http\Livewire\superadmin\EditRateComponent;


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
Route::get('/admin/reportissue',ReportIncidentComponent::class)->name('reportissue');
Route::get('/admin/fueling-data',FuelingComponent::class)->name('fueling-info');
Route::get('/rates',RatesComponent::class)->name('rates');
Route::get('/add-fuel-date',AddFuelDataComponent::class)->name('add-fuel-data');

Route::middleware(['auth:sanctum', 'verified'])->group(function(){
   Route::get('/subadmin/dashboard',SubadminDashboardComponent::class)->name('subadmin.dashboard');
});

Route::middleware(['auth:sanctum', 'verified','authadmin'])->group(function(){
    Route::get('/admin/dashboard',SuperadminDashboardComponent::class)->name('superadmin.dashboard');
    Route::get('/admin/adduser',AdminAddUserComponent::class)->name('superadmin.adduser');
    Route::get('/admin/dashboard',DashboardComponent::class )->name('dashboard');
    Route::get('admin/users',AdminUsersComponent::class)->name('superadmin.users');
    Route::get('/drivers',DriversComponent::class)->name('superadmin.drivers');
    Route::get('/admin/adddrivers',AddDriverComponent::class)->name('superadmin.adddriver');
    Route::get('superadmin/addrates',AddRatesComponent::class)->name('superadmin.addrates');
    Route::get('/superadmin/editrate',EditRateComponent::class)->name("superadmin.editrate");
});
