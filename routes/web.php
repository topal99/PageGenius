<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\UserDashboard;
use App\Livewire\PageCreate;
use App\Livewire\PageEdit; // Disimpan untuk langkah selanjutnya
use App\Livewire\PageEditor;
use App\Http\Controllers\PublicPageController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::view('/', 'welcome');

// Grup route yang memerlukan login
Route::middleware(['auth', 'verified'])->group(function () {
    
    Route::get('/dashboard', UserDashboard::class)->name('dashboard');
    Route::get('/pages/create', PageCreate::class)->name('pages.create');
    Route::view('profile', 'profile')->name('profile');
    Route::get('/editor/{page}', PageEditor::class)->name('editor.show');

});

Route::get('/{page:slug}', [PublicPageController::class, 'show'])->name('public.page.show');

require __DIR__.'/auth.php';