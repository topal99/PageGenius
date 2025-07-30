<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Page;
use Illuminate\Support\Facades\Gate; 

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

    public function deletePage(Page $page)
    {
        // Pastikan pengguna hanya bisa menghapus halamannya sendiri
        Gate::authorize('delete', $page);

        // Hapus halaman
        $page->delete();

        // Muat ulang daftar halaman untuk memperbarui UI
        $this->pages = Page::where('user_id', auth()->id())->latest()->get();

        // Kirim notifikasi (opsional, tapi bagus untuk UX)
        session()->flash('status', 'Halaman berhasil dihapus!');
    }

}