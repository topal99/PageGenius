<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PublicPageController extends Controller
{
    /**
     * Menampilkan halaman landing page publik.
     */
    public function show(Page $page)
    {
        // TAMBAHKAN PENGECEKAN INI
        if ($page->status !== 'published') {
            // Jika pengguna yang login adalah pemiliknya, biarkan dia melihat pratinjau
            if (auth()->check() && auth()->id() === $page->user_id) {
                // Lanjutkan untuk menampilkan pratinjau
            } else {
                // Jika bukan, tampilkan 404
                abort(404);
            }
        }

        $viewPath = $page->template->view_path;
        $content = $page->content;

        return view($viewPath, ['content' => $content]);
    }
}