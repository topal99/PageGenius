<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use App\Models\Page;
use Illuminate\View\View;

class Dashboard extends Component
{
    public $totalUsers;
    public $totalPages;

    public function mount()
    {
        // Ambil data statistik
        $this->totalUsers = User::count();
        $this->totalPages = Page::count();
    }

    public function render(): View
    {
        // Gunakan layout admin yang sudah kita buat
        return view('livewire.admin.dashboard');
    }
}