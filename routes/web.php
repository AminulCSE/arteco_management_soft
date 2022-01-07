<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();



// Home Controller
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

// Employee
Route::get('employee/add', 'EmployeeController@AddEmployee');
Route::post('employee/store', 'EmployeeController@StoreEmployee');
Route::get('employee/all', 'EmployeeController@AllEmployee');
Route::get('employee/edit/{id}', 'EmployeeController@EditEmployee');
Route::post('employee/update/{id}', 'EmployeeController@UpdateEmployee');
Route::get('employee/delete/{id}', 'EmployeeController@DeleteEmployee');


// Customer
Route::get('customer/add', 'CustomerController@AddCustomer');
Route::post('customer/store', 'CustomerController@StoreCustomer');
Route::get('customer/all', 'CustomerController@AllCustomer');
Route::get('customer/edit/{id}', 'CustomerController@EditCustomer');
Route::post('customer/update/{id}', 'CustomerController@UpdateCustomer');
Route::get('customer/delete/{id}', 'CustomerController@DeleteCustomer');


// Attendence
Route::get('attendence/add', 'AttendenceController@addAttendence');
Route::post('attendence/store', 'AttendenceController@StoreAttendance');
Route::get('attendence/all', 'AttendenceController@AllAttendence');
Route::get('attendence/edit/{edit_date}', 'AttendenceController@EditAttendence');
Route::post('attendence/update', 'AttendenceController@UpdateAttendance');
Route::get('attendence/view/{edit_date}', 'AttendenceController@ViewAttendence');

// Invoice
Route::get('invoice/add', 'InvoiceController@addInovice');
Route::post('invoice/store', 'InvoiceController@StoreInovice');
Route::get('invoice/all', 'InvoiceController@AllInovice');
Route::get('invoice/edit/{edit_date}', 'InvoiceController@EditInovice');
Route::post('invoice/update', 'InvoiceController@UpdateInovice');
Route::get('invoice/view', 'InvoiceController@ViewInvoice');
// Route::get('invoice/view/{edit_date}', 'InvoiceController@ViewInvoice');


// Invoice
Route::get('/billReciept','InvoiceController@index');
Route::get('/getPrice/{id}', 'InvoiceController@getPrice'); // for get city list