<?php

namespace App\Livewire;

use App\Models\Page;
use App\Models\Template;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use Illuminate\View\View; // Pastikan ini ada di bagian atas

class PageEditor extends Component
{
    public Page $page;

    // Properti untuk menampung semua data konten dari form
    public array $content = [];
    public string $title = '';

    public function mount(Page $page)
    {
        // Pastikan user hanya bisa mengedit halamannya sendiri
        Gate::authorize('update', $page);

        $this->page = $page;
        // Ambil konten yang sudah ada dari database (jika ada) dan masukkan ke form
        $this->content = $page->content ?? [];
        $this->title = $page->title;

    }

    public function save()
    {
        // Pastikan user hanya bisa mengedit halamannya sendiri
        Gate::authorize('update', $this->page);

        // Validasi bisa ditambahkan di sini
        $this->validate([
            'content.headline' => 'nullable|string|max:255',
            'content.subheadline' => 'nullable|string|max:1000',
            'content.cta_button' => 'nullable|string|max:100',
            'content.feature_1_title' => 'nullable|string|max:255',
            'content.feature_1_description' => 'nullable|string|max:1000',
            'content.feature_2_title' => 'nullable|string|max:255',
            'content.feature_2_description' => 'nullable|string|max:1000',
        ]);
        
        // Simpan semua data dari array $content ke kolom JSON di database
        $this->page->update([
            'title' => $this->title,
            'content' => $this->content,
        ]);
        
        // Kirim notifikasi ke pengguna
        session()->flash('status', 'Halaman berhasil disimpan!');
        
        // Refresh halaman untuk memastikan data tersimpan
        $this->redirect(route('editor.show', $this->page), navigate: false);
    }

    public function render(): View
    {
        return view('livewire.page-editor')
            ->layout('components.layouts.app'); // Eksplisit tentukan layout di sini
    }

}