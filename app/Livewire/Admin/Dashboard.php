<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use App\Models\Page;
use App\Models\Template;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class Dashboard extends Component
{
    public function render(): View
    {
        // Statistik Total
        $totalUsers = User::count();
        $totalPages = Page::count();

        // Statistik Popularitas Template
        $templatePopularity = Template::query()
            ->withCount('pages') // Menghitung jumlah halaman untuk setiap template
            ->orderBy('pages_count', 'desc')
            ->take(5)
            ->get();

        // Daftar Pengguna Terbaru
        $recentUsers = User::latest()->take(5)->get();

        // Daftar Halaman Terbaru
        $recentPages = Page::with('user')->latest()->take(5)->get();

        return view('livewire.admin.dashboard', [
            'totalUsers' => $totalUsers,
            'totalPages' => $totalPages,
            'templatePopularity' => $templatePopularity,
            'recentUsers' => $recentUsers,
            'recentPages' => $recentPages,
        ]);
    }
}