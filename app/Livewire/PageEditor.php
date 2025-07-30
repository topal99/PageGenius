<?php

namespace App\Livewire;

use App\Models\Page;
use App\Models\Template;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;

class PageEditor extends Component
{
    public Page $page;

    // Properti untuk menampung semua data konten dari form
    public array $content = [];

    public function mount(Page $page)
    {
        // Pastikan user hanya bisa mengedit halamannya sendiri
        Gate::authorize('update', $page);

        $this->page = $page;
        // Ambil konten yang sudah ada dari database (jika ada) dan masukkan ke form
        $this->content = $page->content ?? [];
    }

    public function save()
    {
        // Pastikan user hanya bisa mengedit halamannya sendiri
        Gate::authorize('update', $this->page);

        // Validasi bisa ditambahkan di sini
        
        // Simpan semua data dari array $content ke kolom JSON di database
        $this->page->update([
            'content' => $this->content,
        ]);
        
        // Kirim notifikasi ke pengguna
        session()->flash('status', 'Halaman berhasil disimpan!');
    }

    public function render()
    {
        // Di sini kita akan mendefinisikan struktur form berdasarkan template
        // Untuk saat ini kita buat sederhana dulu
        return view('livewire.page-editor');
    }
}