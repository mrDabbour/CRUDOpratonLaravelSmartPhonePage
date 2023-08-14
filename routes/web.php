<?php

use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\SmartphoneController;
use App\Http\Controllers\DashboardController;
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

// Route::get('/', function () {
//     return view('smartphone.manage-smartphone');
// });
// Route::get('/',[SmartphoneController::class,'managment_smartphone']);



// المسار: routes/web.php



Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

// عرض واجهة إضافة هاتف جديد
Route::get('/add', [DashboardController::class, 'create'])->name('add_phone');
// حفظ بيانات الهاتف الجديد
Route::post('/store', [DashboardController::class, 'store'])->name('store_phone');

// عرض واجهة تحرير الهاتف
Route::get('/edit/{id}', [DashboardController::class, 'edit'])->name('edit_phone');
// تحديث بيانات الهاتف
Route::put('/update/{id}', [DashboardController::class, 'update'])->name('update_phone');

// حذف الهاتف
Route::delete('/delete/{id}', [DashboardController::class, 'destroy'])->name('delete_phone');




