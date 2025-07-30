<?php

namespace App\Livewire\User;

use App\Models\Page;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use Illuminate\View\View;
use Illuminate\Validation\Rule;

class PageEditor extends Component
{
    public Page $page;

    // Properti untuk menampung semua data
    public array $content = [];
    public string $title = '';
    public string $slug = '';
    public string $status = 'draft';

    public function toggleStatus()
    {
        $this->status = $this->status === 'draft' ? 'published' : 'draft';
    }

    public function mount(Page $page)
    {
        Gate::authorize('update', $page);

        $this->page = $page;
        $this->content = $page->content ?? [];
        $this->title = $page->title;
        $this->slug = $page->slug;
        $this->status = $page->status;
    }

    public function save()
    {
        Gate::authorize('update', $this->page);

        // 1. SEMUA VALIDASI DIGABUNGKAN MENJADI SATU
        $this->validate([
            'title' => 'required|string|max:255',
            'slug' => [
                'required',
                'string',
                'max:255',
                'alpha_dash',
                Rule::unique('pages')->ignore($this->page->id),
            ],
            'status' => 'required|in:draft,published',
            // 2. VALIDASI KONTEN DIBUAT DINAMIS MENGGUNAKAN WILDCARD
            // Ini akan berlaku untuk semua field di dalam 'content'
            'content.*' => 'nullable|string|max:5000', 
        ]);
        
        $this->page->update([
            'title' => $this->title,
            'slug' => $this->slug,
            'status' => $this->status,
            'content' => $this->content,
        ]);
        
        session()->flash('status', 'Halaman berhasil disimpan!');
        
        // 3. REDIRECT DIHAPUS, KARENA TIDAK DIPERLUKAN
        // Livewire akan otomatis me-refresh komponen dan menampilkan pesan status.
        return redirect()->route('editor.show', ['page' => $this->page->id]);
    }

    public function render(): View
    {
        return view('livewire.user.page-editor');
    }
}