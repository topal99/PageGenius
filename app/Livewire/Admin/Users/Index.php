<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\WithPagination; // <-- Import untuk pagination

class Index extends Component
{
    use WithPagination; // <-- Aktifkan fitur pagination

    public function render(): View
    {
        // Ambil semua user dengan pagination (10 per halaman)
        $users = User::latest()->paginate(10);

        return view('livewire.admin.users.index', [
            'users' => $users,
        ]);
    }
}