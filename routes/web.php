<?php
use App\Http\Livewire\HomeComponent;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\subadmin\SubadminDashboardComponent;
use App\Http\Livewire\superadmin\SuperadminDashboardComponent;
use App\Http\Livewire\superadmin\AdminAddUserComponent;
use App\Http\Livewire\DashboardComponent;

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
    Route::get('/admin/dashboard',SuperadminDashboardComponent::class)->name('superadmin.dashboard');
    Route::get('/admin/adduser',AdminAddUserComponent::class)->name('superadmin.adduser');
    Route::get('/admin/dashboard',DashboardComponent::class )->name('dashboard');
    Route::get('admin/users',AdminUsersComponent::class)->name('superadmin.users');
});
