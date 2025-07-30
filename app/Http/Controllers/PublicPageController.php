<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PublicPageController extends Controller
{
    /**
     * Menampilkan halaman landing page publik.
     */
    public function show(Page $page)
    {
        // Nanti kita bisa tambahkan logika untuk mengecek apakah page->status == 'published'
        // if ($page->status !== 'published') {
        //     abort(404);
        // }

        // Ambil path view dari relasi template
        $viewPath = $page->template->view_path;

        // Ambil konten JSON
        $content = $page->content;

        // Tampilkan view dan kirim data kontennya
        return view($viewPath, ['content' => $content]);
    }
}