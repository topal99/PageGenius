<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Illuminate\View\View;
use Livewire\WithPagination; // <-- Import untuk pagination

class Index extends Component
{
    use WithPagination; // <-- Aktifkan fitur pagination

        public function delete(User $user)
    {
        // Tambahkan pengaman agar admin tidak bisa menghapus akunnya sendiri
        if ($user->id === auth()->id()) {
            session()->flash('error', 'Anda tidak dapat menghapus akun Anda sendiri.');
            return;
        }

        $user->delete();

        session()->flash('status', 'Pengguna berhasil dihapus.');

        // Reset pagination untuk kembali ke halaman pertama
        $this->resetPage();
    }

    public function render(): View
    {
        // Ambil semua user dengan pagination (10 per halaman)
        $users = User::latest()->paginate(10);

        return view('livewire.admin.users.index', [
            'users' => $users,
        ]);
    }
}