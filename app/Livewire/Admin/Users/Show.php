<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use App\Models\Page;
use Livewire\Component;
use Illuminate\View\View;

class Show extends Component
{
    public User $user;
    public $pages;

    public function mount(User $user)
    {
        $this->user = $user;
        $this->loadPages();
    }

    public function loadPages()
    {
        // Ambil semua halaman yang dimiliki oleh pengguna ini
        $this->pages = $this->user->pages()->latest()->get();
    }

    public function deletePage(Page $page)
    {
        // Admin bisa menghapus halaman milik siapa saja
        $page->delete();

        // Muat ulang daftar halaman untuk memperbarui UI
        $this->loadPages();

        session()->flash('status', 'Halaman berhasil dihapus.');
    }

    public function render(): View
    {
        return view('livewire.admin.users.show');
    }
}