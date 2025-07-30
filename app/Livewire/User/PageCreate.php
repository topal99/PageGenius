<?php

namespace App\Livewire\User;

use Livewire\Component;
use App\Models\Template; 
use App\Models\Page;
use Illuminate\Support\Str;

class PageCreate extends Component
{
    public $templates;

    public function mount()
    {
        $this->templates = Template::all();
    }

    public function selectTemplate($templateId)
    {
        // Buat record halaman baru di database
        $page = Page::create([
            'user_id' => auth()->id(),
            'template_id' => $templateId,
            'title' => 'Halaman Baru Tanpa Judul', // Judul default
            'slug' => 'halaman-' . Str::lower(Str::random(6)), // Ubah ini
            'status' => 'draft',
        ]);

        // Redirect ke halaman editor untuk halaman yang baru dibuat
        return redirect()->route('editor.show', ['page' => $page->id]);
    }

    public function render()
    {
        return view('livewire.user.page-create');
    }
}