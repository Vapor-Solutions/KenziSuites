<?php

use App\Http\Controllers\BookingRequestsController;
use App\Http\Controllers\CmsController;
use App\Http\Controllers\ContactsController;
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
//first commit
Route::middleware('web')->group(function () {
    Route::post('book', [BookingRequestsController::class, 'book'])->name('booking_request');
    Route::post('contact',[ContactsController::class, 'submit'])->name('contact_submit');

    Route::redirect('admin', 'admin/dashboard');
    Route::redirect('dashboard', 'admin/dashboard');

    if (env('MAINTENANCE_MODE')) {
        Route::get('/', function () {
            return view('errors.maintenance');
        });
        Route::redirect('/{path?}', '/');
    } else {
        // Landing Page Routes

        Route::get('/', function () {
            return view('home');
        });
        Route::get('/about', function () {
            return view('about');
        });
        Route::get('/rooms', function () {
            return view('rooms');
        });
        Route::get('/testimonials', function () {
            return view('testimonials');
        });
    }

    Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
        Route::prefix('admin')->middleware('admin')->group(function () {

            // Controller Functions
            Route::post('change_slider1', [CmsController::class, 'slider1'])->name('change.slider1');
            Route::post('change_slider2', [CmsController::class, 'slider2'])->name('change.slider2');
            Route::post('change_slider3', [CmsController::class, 'slider3'])->name('change.slider3');
            Route::post('change_sectionbg1', [CmsController::class, 'sectionbg1'])->name('change.sectionbg1');
            Route::post('change_sectionbg2', [CmsController::class, 'sectionbg2'])->name('change.sectionbg2');
            Route::post('change_contentImage1', [CmsController::class, 'contentImage1'])->name('change.contentImage1');
            Route::post('change_side1', [CmsController::class, 'side1'])->name('change.side1');
            Route::post('change_side2', [CmsController::class, 'side2'])->name('change.side2');
            Route::post('change_side3', [CmsController::class, 'side3'])->name('change.side3');
            Route::post('change_side4', [CmsController::class, 'side4'])->name('change.side4');
            Route::post('change_side5', [CmsController::class, 'side5'])->name('change.side5');
            Route::post('change_side6', [CmsController::class, 'side6'])->name('change.side6');



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
                Route::get('/calendar', Admin\Bookings\Calendar::class)->name('admin.bookings.calendar');
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
                Route::get('/{id}/view', Admin\Invoices\View::class)->name('admin.invoices.view');
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
            Route::prefix('testimonials')->group(function () {
                Route::get('/', Admin\Testimonials\Index::class)->name('admin.testimonials.index');
                Route::get('/create', Admin\Testimonials\Create::class)->name('admin.testimonials.create');
                Route::get('/{id}/edit', Admin\Testimonials\Edit::class)->name('admin.testimonials.edit');
            });
            Route::prefix('booking_requests')->group(function () {
                Route::get('/', Admin\BookingRequests\Index::class)->name('admin.booking_requests.index');
                Route::get('/{id}/edit', Admin\BookingRequests\Edit::class)->name('admin.booking_requests.edit');
            });
            Route::prefix('contacts')->group(function () {
                Route::get('/', Admin\Contacts\Index::class)->name('admin.contacts.index');
            });

            /**
             * The CMS section
             */
            Route::prefix('cms')->group(function () {
                Route::get('/photos', Admin\Cms\Photos::class)->name('admin.cms.photos');
                Route::get('/content', Admin\Cms\Content::class)->name('admin.cms.content');
                Route::get('/faq', Admin\Cms\Faq::class)->name('admin.cms.faq');
                Route::get('/faq/create', Admin\Cms\Faq\Create::class)->name('admin.cms.faq.create');
                Route::get('/faq/{id}/edit', Admin\Cms\Faq\Edit::class)->name('admin.cms.faq.edit');
            });


        });
    });
});

