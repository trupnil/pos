<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountGroup;
use App\Http\Controllers\Account\AccountController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\CustomerGroup\CustomerGroupController;
use App\Http\Controllers\SupplierGroup\SupplierGroupController;
use App\Http\Controllers\Supplier\SupplierController;

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
    return view('layout.dashboard.index');
})->name('dashboard');

Route::GET('account-group',[AccountGroup::class, 'create'])->name('accountgroups.create_account_group');
Route::GET('list-account-group',[AccountGroup::class, 'index'])->name('accountgroups.list_account_group');

Route::GET('account',[AccountController::class, 'create'])->name('account.add_account');
Route::GET('list-account',[AccountController::class, 'index'])->name('account.list_account');

Route::GET('customer-group',[CustomerGroupController::class, 'create'])->name('customergroup.add_customer');
Route::GET('list-customer-group',[CustomerGroupController::class, 'index'])->name('customergroup.list_account');

Route::GET('customer',[CustomerController::class, 'create'])->name('customer.add_customer');
Route::GET('list-customer',[CustomerController::class, 'index'])->name('customer.list_account');

Route::GET('supplier-group',[SupplierGroupController::class, 'create'])->name('suppliergroup.add_supplier_group');
Route::GET('list-supplier-group',[SupplierGroupController::class, 'index'])->name('suppliergroup.list_supplier_group');

Route::GET('supplier',[SupplierController::class, 'create'])->name('supplier.add_supplier');
Route::GET('list-supplier',[SupplierController::class, 'index'])->name('supplier.list_supplier');






