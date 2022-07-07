<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\TicketController;

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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('home');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Panel/Dashboard');
    })->name('dashboard');
    Route::get('/tickets', [TicketController::class, 'index'])->name('myTickets');
    Route::get('/ticket/{id}', [TicketController::class, 'showTicket']);
    Route::get('/tickets/new', function () {
        return Inertia::render('Panel/Tickets/NewTicket');
    })->name('tickets.newTicket');
    Route::put('/tickets/new/send', [TicketController::class, 'store'])->name('tickets.newTicket.send');
});
