<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\User\UserDashboard;
use App\Livewire\User\PageCreate;
use App\Livewire\User\PageEditor;
use App\Http\Controllers\PublicPageController;
use App\Livewire\Admin\Dashboard as AdminDashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::view('/', 'welcome');
Route::post('/logout', function () {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    })->name('logout');

require __DIR__.'/auth.php';

Route::middleware(['auth', 'verified', 'user'])->group(function () {
    Route::get('/dashboard', UserDashboard::class)->name('dashboard');
    Route::get('/pages/create', PageCreate::class)->name('pages.create');
    Route::view('profile', 'profile')->name('profile');
    Route::get('/editor/{page}', PageEditor::class)->name('editor.show');    
});

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', AdminDashboard::class)->name('dashboard');

    // (Nantinya kita akan tambahkan route untuk manajemen user & template di sini)
    // Route::get('/users', ...)->name('users.index');
    // Route::get('/templates', ...)->name('templates.index');
});

Route::get('/{page:slug}', [PublicPageController::class, 'show'])->name('public.page.show');