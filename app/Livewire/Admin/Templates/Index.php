<?php

namespace App\Livewire\Admin\Templates;

use App\Models\Template;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    // TAMBAHKAN METHOD BARU INI
    public function delete(Template $template)
    {
        // Hapus template dari database
        $template->delete();

        // Kirim notifikasi sukses
        session()->flash('status', 'Template berhasil dihapus.');

        // Reset pagination agar kembali ke halaman pertama setelah menghapus
        $this->resetPage(); 
    }

    public function render(): View
    {
        $templates = Template::latest()->paginate(10);

        return view('livewire.admin.templates.index', [
            'templates' => $templates,
        ]);
    }
}