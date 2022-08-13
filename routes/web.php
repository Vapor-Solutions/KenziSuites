<?php

use App\Http\Livewire\Admin;

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

Route::middleware('web')->group(function () {
    if (env('MAINTENANCE_MODE')) {
        Route::get('/', function(){
            return view('errors.maintenance');
        });
        Route::redirect('/{path?}', '/');
    } else {
        Route::get('/', function () {
            return view('welcome');
        });

        Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
            Route::prefix('admin')->group(function () {
                Route::get('/dashboard', Admin\Dashboard::class)->name('admin.dashboard');

                Route::prefix('admins')->group(function () {
                    Route::get('/', Admin\Admins\Index::class)->name('admin.admins.index');
                    Route::get('/create', Admin\Admins\Create::class)->name('admin.admins.create');
                    Route::get('/{id}/edit', Admin\Admins\Edit::class)->name('admin.admins.edit');
                });
                Route::prefix('clients')->group(function () {
                    Route::get('/', Admin\Clients\Index::class)->name('admin.clients.index');
                    Route::get('/create', Admin\Clients\Create::class)->name('admin.clients.create');
                    Route::get('/{id}/edit', Admin\Clients\Edit::class)->name('admin.clients.edit');
                });
                Route::prefix('bookings')->group(function () {
                    Route::get('/', Admin\Bookings\Index::class)->name('admin.bookings.index');
                    Route::get('/create', Admin\Bookings\Create::class)->name('admin.bookings.create');
                    Route::get('/{id}/edit', Admin\Bookings\Edit::class)->name('admin.bookings.edit');
                });
                Route::prefix('rooms')->group(function () {
                    Route::get('/', Admin\Rooms\Index::class)->name('admin.rooms.index');
                    Route::get('/create', Admin\Rooms\Create::class)->name('admin.rooms.create');
                    Route::get('/{id}/edit', Admin\Rooms\Edit::class)->name('admin.rooms.edit');
                });
                Route::prefix('employees')->group(function () {
                    Route::get('/', Admin\Employees\Index::class)->name('admin.employees.index');
                    Route::get('/create', Admin\Employees\Create::class)->name('admin.employees.create');
                    Route::get('/{id}/edit', Admin\Employees\Edit::class)->name('admin.employees.edit');
                });
                Route::prefix('payments')->group(function () {
                    Route::get('/', Admin\Payments\Index::class)->name('admin.payments.index');
                    Route::get('/create', Admin\Payments\Create::class)->name('admin.payments.create');
                    Route::get('/{id}/edit', Admin\Payments\Edit::class)->name('admin.payments.edit');
                });
                Route::prefix('quotations')->group(function () {
                    Route::get('/', Admin\Quotations\Index::class)->name('admin.quotations.index');
                    Route::get('/create', Admin\Quotations\Create::class)->name('admin.quotations.create');
                    Route::get('/{id}/edit', Admin\Quotations\Edit::class)->name('admin.quotations.edit');
                });
                Route::prefix('invoices')->group(function () {
                    Route::get('/', Admin\Invoices\Index::class)->name('admin.invoices.index');
                    Route::get('/create', Admin\Invoices\Create::class)->name('admin.invoices.create');
                    Route::get('/{id}/edit', Admin\Invoices\Edit::class)->name('admin.invoices.edit');
                });
                Route::prefix('room_types')->group(function () {
                    Route::get('/', Admin\RoomTypes\Index::class)->name('admin.room_types.index');
                    Route::get('/create', Admin\RoomTypes\Create::class)->name('admin.room_types.create');
                    Route::get('/{id}/edit', Admin\RoomTypes\Edit::class)->name('admin.room_types.edit');
                });
                Route::prefix('payment_methods')->group(function () {
                    Route::get('/', Admin\PaymentMethods\Index::class)->name('admin.payment_methods.index');
                    Route::get('/create', Admin\PaymentMethods\Create::class)->name('admin.payment_methods.create');
                    Route::get('/{id}/edit', Admin\PaymentMethods\Edit::class)->name('admin.payment_methods.edit');
                });

                /**
                 * The CMS section
                 */
                Route::prefix('cms')->group(function () {
                    Route::get('/photos', Admin\Cms\Photos::class)->name('admin.cms.photos');
                });
            });
        });
    }
});