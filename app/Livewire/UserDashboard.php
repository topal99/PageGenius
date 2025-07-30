<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Page;

class UserDashboard extends Component
{
    public $pages;

    public function mount()
    {
        // Mengambil semua halaman milik user yang sedang login
        $this->pages = Page::where('user_id', auth()->id())->latest()->get();
    }

    public function render()
    {
        // Pastikan menggunakan layout yang benar dan konsisten
        return view('livewire.user-dashboard');
    }
}