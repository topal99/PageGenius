<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">Editor Halaman: {{ $title }}</h2>
</x-slot>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <form wire:submit.prevent="save" class="space-y-8">

            @if (session('status'))
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert">{{ session('status') }}</div>
            @endif

            {{-- Pengaturan Umum --}}
            <div class="p-6 bg-white shadow-sm sm:rounded-lg space-y-4">
                <h3 class="text-lg font-medium border-b pb-2">Pengaturan Umum</h3>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Judul Halaman (untuk Anda)</label>
                    <input type="text" wire:model.lazy="title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Judul SEO (Tampil di Tab Browser)</label>
                    <input type="text" wire:model.lazy="content.meta_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Deskripsi SEO (Tampil di Google)</label>
                    <textarea wire:model.lazy="content.meta_description" rows="2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></textarea>
                </div>
            </div>

            @if ($page->template->name === 'SaaS Modern')
            {{-- Form untuk Template SaaS Modern --}}
            <div class="p-6 bg-white shadow-sm sm:rounded-lg space-y-6">
                
                {{-- Bagian Navigasi --}}
                <h3 class="text-lg font-medium border-b pb-2">Bagian Navigasi</h3>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nama Brand</label>
                        <input type="text" wire:model.lazy="content.nav_brand_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Teks Tombol Navigasi</label>
                        <input type="text" wire:model.lazy="content.nav_button_text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    </div>
                </div>

                {{-- Bagian Hero --}}
                <h3 class="text-lg font-medium border-b pb-2 pt-4">Bagian Hero</h3>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Judul Utama (Baris 1, Berwarna)</label>
                    <input type="text" wire:model.lazy="content.hero_headline_1" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Judul Utama (Baris 2)</label>
                    <input type="text" wire:model.lazy="content.hero_headline_2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Sub-Judul</label>
                    <textarea wire:model.lazy="content.hero_subheadline" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Teks Tombol Utama</label>
                    <input type="text" wire:model.lazy="content.hero_cta_primary" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Teks Tombol Sekunder</label>
                    <input type="text" wire:model.lazy="content.hero_cta_secondary" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>

                {{-- Bagian Fitur --}}
                <h3 class="text-lg font-medium border-b pb-2 pt-4">Bagian Fitur</h3>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Judul Fitur</label>
                        <input type="text" wire:model.lazy="content.features_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    </div>
                     <div>
                        <label class="block text-sm font-medium text-gray-700">Judul Fitur (Berwarna)</label>
                        <input type="text" wire:model.lazy="content.features_title_highlight" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    </div>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Sub-Judul Fitur</label>
                    <textarea wire:model.lazy="content.features_subtitle" rows="2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></textarea>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @for ($i = 1; $i <= 6; $i++)
                    <div class="border p-4 rounded-md">
                        <label class="block text-sm font-bold text-gray-700">Fitur {{ $i }}</label>
                        <input type="text" placeholder="Judul Fitur {{ $i }}" wire:model.lazy="content.feature_{{ $i }}_title" class="mt-2 block w-full rounded-md border-gray-300 shadow-sm">
                        <textarea placeholder="Deskripsi Fitur {{ $i }}" wire:model.lazy="content.feature_{{ $i }}_description" rows="3" class="mt-2 block w-full rounded-md border-gray-300 shadow-sm"></textarea>
                    </div>
                    @endfor
                </div>

                {{-- Bagian Statistik --}}
                <h3 class="text-lg font-medium border-b pb-2 pt-4">Bagian Statistik</h3>
                <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
                    @for ($i = 1; $i <= 4; $i++)
                    <div class="border p-4 rounded-md">
                        <label class="block text-sm font-bold text-gray-700">Statistik {{ $i }}</label>
                        <input type="text" placeholder="Angka (e.g., 10K+)" wire:model.lazy="content.stat_{{ $i }}_number" class="mt-2 block w-full rounded-md border-gray-300 shadow-sm">
                        <input type="text" placeholder="Label (e.g., Pengguna Aktif)" wire:model.lazy="content.stat_{{ $i }}_label" class="mt-2 block w-full rounded-md border-gray-300 shadow-sm">
                    </div>
                    @endfor
                </div>

                {{-- Bagian Testimoni --}}
                <h3 class="text-lg font-medium border-b pb-2 pt-4">Bagian Testimoni</h3>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Judul Testimoni</label>
                        <input type="text" wire:model.lazy="content.testimonials_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    </div>
                     <div>
                        <label class="block text-sm font-medium text-gray-700">Judul Testimoni (Berwarna)</label>
                        <input type="text" wire:model.lazy="content.testimonials_title_highlight" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    </div>
                </div>
                 <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    @for ($i = 1; $i <= 3; $i++)
                    <div class="border p-4 rounded-md space-y-2">
                        <label class="block text-sm font-bold text-gray-700">Testimoni {{ $i }}</label>
                        <textarea placeholder="Kutipan Testimoni {{ $i }}" wire:model.lazy="content.testimonial_{{ $i }}_quote" rows="3" class="block w-full rounded-md border-gray-300 shadow-sm"></textarea>
                        <input type="text" placeholder="URL Avatar {{ $i }}" wire:model.lazy="content.testimonial_{{ $i }}_avatar" class="block w-full rounded-md border-gray-300 shadow-sm">
                        <input type="text" placeholder="Nama Pemberi Testimoni {{ $i }}" wire:model.lazy="content.testimonial_{{ $i }}_name" class="block w-full rounded-md border-gray-300 shadow-sm">
                        <input type="text" placeholder="Jabatan Pemberi Testimoni {{ $i }}" wire:model.lazy="content.testimonial_{{ $i }}_title" class="block w-full rounded-md border-gray-300 shadow-sm">
                    </div>
                    @endfor
                </div>

                {{-- Bagian Harga --}}
                <h3 class="text-lg font-medium border-b pb-2 pt-4">Bagian Harga</h3>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                     @for ($i = 1; $i <= 3; $i++)
                    <div class="border p-4 rounded-md space-y-2">
                        <label class="block text-sm font-bold text-gray-700">Paket Harga {{ $i }}</label>
                        <input type="text" placeholder="Nama Paket" wire:model.lazy="content.plan_{{ $i }}_name" class="block w-full rounded-md border-gray-300 shadow-sm">
                        <input type="text" placeholder="Deskripsi Paket" wire:model.lazy="content.plan_{{ $i }}_description" class="block w-full rounded-md border-gray-300 shadow-sm">
                        <input type="text" placeholder="Harga (e.g., Rp 99K)" wire:model.lazy="content.plan_{{ $i }}_price" class="block w-full rounded-md border-gray-300 shadow-sm">
                        <input type="text" placeholder="Periode (e.g., bulan)" wire:model.lazy="content.plan_{{ $i }}_period" class="block w-full rounded-md border-gray-300 shadow-sm">
                        <textarea placeholder="Fitur (satu per baris)" wire:model.lazy="content.plan_{{ $i }}_features" rows="4" class="block w-full rounded-md border-gray-300 shadow-sm"></textarea>
                        <input type="text" placeholder="Teks Tombol" wire:model.lazy="content.plan_{{ $i }}_button" class="block w-full rounded-md border-gray-300 shadow-sm">
                    </div>
                    @endfor
                </div>

                {{-- Bagian FAQ --}}
                <h3 class="text-lg font-medium border-b pb-2 pt-4">Bagian FAQ</h3>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @for ($i = 1; $i <= 4; $i++)
                    <div class="border p-4 rounded-md">
                        <label class="block text-sm font-bold text-gray-700">FAQ {{ $i }}</label>
                        <input type="text" placeholder="Pertanyaan" wire:model.lazy="content.faq_{{ $i }}_question" class="mt-2 block w-full rounded-md border-gray-300 shadow-sm">
                        <textarea placeholder="Jawaban" wire:model.lazy="content.faq_{{ $i }}_answer" rows="3" class="mt-2 block w-full rounded-md border-gray-300 shadow-sm"></textarea>
                    </div>
                    @endfor
                </div>

                {{-- Bagian CTA --}}
                <h3 class="text-lg font-medium border-b pb-2 pt-4">Bagian Ajakan (CTA)</h3>
                 <div>
                    <label class="block text-sm font-medium text-gray-700">Judul CTA</label>
                    <input type="text" wire:model.lazy="content.cta_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Sub-Judul CTA</label>
                    <textarea wire:model.lazy="content.cta_subtitle" rows="2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></textarea>
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">Teks Tombol CTA</label>
                    <input type="text" wire:model.lazy="content.cta_button" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                </div>
                
                {{-- Bagian Footer --}}
                <h3 class="text-lg font-medium border-b pb-2 pt-4">Bagian Footer</h3>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Nama Brand Footer</label>
                        <input type="text" wire:model.lazy="content.footer_brand_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Deskripsi Footer</label>
                        <input type="text" wire:model.lazy="content.footer_description" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Judul Kolom Link 1</label>
                        <input type="text" wire:model.lazy="content.footer_links_1_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Judul Kolom Link 2</label>
                        <input type="text" wire:model.lazy="content.footer_links_2_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700">Teks Copyright</label>
                        <input type="text" wire:model.lazy="content.footer_copyright" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm">
                    </div>
                </div>
            </div>
            
            @elseif ($page->template->name === 'Agen Properti')
                <div class="p-6 bg-white shadow-sm sm:rounded-lg">
                     <h3 class="text-lg font-medium">Konten Agen Properti</h3>
                     <div class="mt-4 space-y-4">
                         <h4 class="font-bold border-b pb-2">Bagian Hero</h4>
                         <div><label>Judul Utama</label><input type="text" wire:model.lazy="content.headline" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                         <div><label>URL Gambar Latar</label><input type="text" wire:model.lazy="content.hero_image" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                         
                         <h4 class="font-bold border-b pb-2 pt-4">Bagian Listing</h4>
                         <div><label>Judul Listing</label><input type="text" wire:model.lazy="content.properties_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                         
                         <div class="grid grid-cols-3 gap-4">
                             <div><label>URL Gbr Properti 1</label><input type="text" wire:model.lazy="content.prop_1_image" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                             <div><label>Nama Properti 1</label><input type="text" wire:model.lazy="content.prop_1_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                             <div><label>Harga & Spek 1</label><input type="text" wire:model.lazy="content.prop_1_price" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"><input type="text" wire:model.lazy="content.prop_1_specs" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                         </div>
                         {{-- Ulangi untuk prop_2 dan prop_3 --}}

                         <h4 class="font-bold border-b pb-2 pt-4">Profil Agen</h4>
                         <div><label>URL Foto Agen</label><input type="text" wire:model.lazy="content.agent_photo" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                         <div><label>Nama Agen</label><input type="text" wire:model.lazy="content.agent_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                         <div><label>Jabatan Agen</label><input type="text" wire:model.lazy="content.agent_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                         <div><label>Telepon Agen</label><input type="text" wire:model.lazy="content.agent_phone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                     </div>
                </div>

            @elseif ($page->template->name === 'Event & Webinar')
                <div class="p-6 bg-white shadow-sm sm:rounded-lg">
                    <h3 class="text-lg font-medium">Konten Event & Webinar</h3>
                    <div class="mt-4 space-y-4">
                        <div><label>Judul Event</label><input type="text" wire:model.lazy="content.event_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        <div><label>Sub-Judul Event</label><textarea wire:model.lazy="content.event_subtitle" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></textarea></div>
                        <div><label>Tanggal</label><input type="text" wire:model.lazy="content.event_date" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        <div><label>Waktu</label><input type="text" wire:model.lazy="content.event_time" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        <div><label>Lokasi/Platform</label><input type="text" wire:model.lazy="content.event_location" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        <div><label>Teks Tombol Aksi</label><input type="text" wire:model.lazy="content.cta_button" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        
                        <h4 class="font-bold border-b pb-2 pt-4">Pembicara</h4>
                        <div><label>URL Foto Pembicara 1</label><input type="text" wire:model.lazy="content.speaker_1_photo" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        <div><label>Nama Pembicara 1</label><input type="text" wire:model.lazy="content.speaker_1_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        <div><label>Jabatan Pembicara 1</label><input type="text" wire:model.lazy="content.speaker_1_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                         {{-- Ulangi untuk speaker_2 dan speaker_3 --}}
                    </div>
                </div>

            @endif
            <div class="flex justify-end space-x-4">
                <a href="{{ route('public.page.show', $page) }}" target="_blank" class="inline-block px-4 py-2 bg-gray-200 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-300">Lihat Halaman</a>
                <button type="submit" class="px-4 py-2 bg-blue-600 rounded-md text-sm font-medium text-white hover:bg-blue-700">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>