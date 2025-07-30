<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\UserDashboard;
use App\Livewire\PageCreate;
use App\Livewire\PageEditor;
use App\Http\Controllers\PublicPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::view('/', 'welcome');

// Memuat rute untuk login, register, dll. SEBELUM rute catch-all
require __DIR__.'/auth.php';

// Grup route yang memerlukan login
Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', UserDashboard::class)->name('dashboard');
    Route::get('/pages/create', PageCreate::class)->name('pages.create');
    Route::view('profile', 'profile')->name('profile');
    Route::get('/editor/{page}', PageEditor::class)->name('editor.show');
    
    // Tambahkan route logout
    Route::post('/logout', function () {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    })->name('logout');

});

// Letakkan rute "catch-all" ini di PALING BAWAH
Route::get('/{page:slug}', [PublicPageController::class, 'show'])->name('public.page.show');