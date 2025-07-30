<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Template; // Jangan lupa import model Template

class TemplateSeeder extends Seeder
{
    public function run(): void
    {
        // Hapus data lama agar tidak duplikat saat seeder dijalankan lagi
        Template::query()->delete();

        Template::create([
            'name' => 'SaaS Modern',
            'description' => 'Template yang cocok untuk produk software, aplikasi, atau layanan digital.',
            'view_path' => 'templates.saas-v1', // Path ke file view
            'thumbnail_path' => '/thumbnails/saas-v1.jpg', // Contoh path gambar thumbnail
            'category' => 'Teknologi'
        ]);

        Template::create([
            'name' => 'Agen Properti',
            'description' => 'Tampilkan listing properti terbaik Anda dengan template yang elegan ini.',
            'view_path' => 'templates.property-v1',
            'thumbnail_path' => '/thumbnails/property-v1.jpg',
            'category' => 'Properti'
        ]);

        Template::create([
            'name' => 'Event & Webinar',
            'description' => 'Promosikan acara, webinar, atau konferensi Anda dan kumpulkan pendaftar.',
            'view_path' => 'templates.event-v1',
            'thumbnail_path' => '/thumbnails/event-v1.jpg',
            'category' => 'Acara'
        ]);
    }
}