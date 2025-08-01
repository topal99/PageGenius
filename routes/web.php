<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\User\UserDashboard;
use App\Livewire\User\PageCreate;
use App\Livewire\User\PageEditor;
use App\Http\Controllers\PublicPageController;
use App\Livewire\Admin\Dashboard as AdminDashboard;
use App\Livewire\Admin\Users\Index as AdminUsersIndex; 
use App\Livewire\Admin\Templates\Index as AdminTemplatesIndex; 
use App\Livewire\Admin\Templates\Save as AdminTemplatesSave;
use App\Livewire\Admin\Users\Show as AdminUsersShow; // <-- Tambahkan ini
use App\Livewire\Admin\Users\Edit as AdminUsersEdit; // <-- Tambahkan ini


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::view('/', 'welcome')->name('home');

Route::post('/logout', function () {
        auth()->logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    })->name('logout');
Route::view('/privacy-policy', 'pages.privacy')->name('privacy');
Route::view('/terms-of-service', 'pages.terms')->name('terms');
Route::view('/support', 'pages.support')->name('support');

require __DIR__.'/auth.php';

Route::middleware(['auth', 'verified', 'user'])->group(function () {
    Route::get('/dashboard', UserDashboard::class)->name('dashboard');
    Route::get('/pages/create', PageCreate::class)->name('pages.create');
    Route::view('profile', 'profile')->name('profile');
    Route::get('/editor/{page}', PageEditor::class)->name('editor.show');    
});

Route::middleware(['auth', 'admin'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', AdminDashboard::class)->name('dashboard');
    Route::get('/users', AdminUsersIndex::class)->name('users.index'); 
    Route::get('/templates', AdminTemplatesIndex::class)->name('templates.index'); 
    Route::get('/templates/create', AdminTemplatesSave::class)->name('templates.create');
    Route::get('/templates/{template}/edit', AdminTemplatesSave::class)->name('templates.edit'); 
    Route::get('/users/{user}', AdminUsersShow::class)->name('users.show'); // <-- Tambahkan route ini
    Route::get('/users/{user}/edit', AdminUsersEdit::class)->name('users.edit'); // <-- Tambahkan route ini

});

Route::get('/{page:slug}', [PublicPageController::class, 'show'])->name('public.page.show');