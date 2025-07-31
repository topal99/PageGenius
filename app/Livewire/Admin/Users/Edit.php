<?php

namespace App\Livewire\Admin\Users;

use App\Models\User;
use Livewire\Component;
use Illuminate\View\View;
use Illuminate\Validation\Rule;

class Edit extends Component
{
    public User $user;
    public string $name = '';
    public string $email = '';
    public string $role = '';

    public function mount(User $user)
    {
        $this->user = $user;
        $this->name = $user->name;
        $this->email = $user->email;
        $this->role = $user->role;
    }

    public function update()
    {
        $validated = $this->validate([
            'name' => 'required|string|max:255',
            // Email tidak diubah, jadi tidak perlu divalidasi keunikannya lagi
            'role' => ['required', Rule::in(['user', 'admin'])],
        ]);

        $this->user->update($validated);

        session()->flash('status', 'Data pengguna berhasil diperbarui.');

        return $this->redirectRoute('admin.users.show', ['user' => $this->user], navigate: true);
    }

    public function render(): View
    {
        return view('livewire.admin.users.edit');
    }
}