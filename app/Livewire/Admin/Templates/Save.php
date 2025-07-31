<?php

namespace App\Livewire\Admin\Templates;

use App\Models\Template;
use Livewire\Component;
use Illuminate\View\View;

class Save extends Component
{
    // Properti untuk menampung data dari form
    public ?Template $template = null;
    public string $name = '';
    public string $description = '';
    public string $view_path = '';
    public string $thumbnail_path = '';
    public string $category = '';

    // Aturan validasi
    protected function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'view_path' => 'required|string|max:255',
            'thumbnail_path' => 'nullable|string|max:255',
            'category' => 'required|string|max:255',
        ];
    }

    public function mount(Template $template)
    {
        // Jika ada $template dari URL (mode edit), isi properti form
        if ($template->exists) {
            $this->template = $template;
            $this->name = $template->name;
            $this->description = $template->description;
            $this->view_path = $template->view_path;
            $this->thumbnail_path = $template->thumbnail_path;
            $this->category = $template->category;
        }
    }

    public function save()
    {
        $this->validate();

        // Jika $this->template kosong, berarti ini mode Tambah
        if (!$this->template) {
            Template::create($this->only(['name', 'description', 'view_path', 'thumbnail_path', 'category']));
            session()->flash('status', 'Template berhasil dibuat.');
        } else {
            // Jika tidak, berarti ini mode Edit
            $this->template->update($this->only(['name', 'description', 'view_path', 'thumbnail_path', 'category']));
            session()->flash('status', 'Template berhasil diperbarui.');
        }

        // Alihkan kembali ke halaman daftar template
        return $this->redirectRoute('admin.templates.index', navigate: true);
    }

    public function render(): View
    {
        return view('livewire.admin.templates.save');
    }
}