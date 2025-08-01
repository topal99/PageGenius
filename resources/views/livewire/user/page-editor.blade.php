
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
                    <label for="slug" class="block text-sm font-medium text-gray-700">URL Slug</label>
                    <div class="flex items-center mt-1">
                        <span class="text-gray-500 bg-gray-100 p-2 rounded-l-md border border-r-0 border-gray-300">/</span>
                        <input type="text" wire:model.lazy="slug" id="slug" class="block w-full rounded-r-md border-gray-300 shadow-sm">
                    </div>
                    @error('slug') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                    <p class="mt-2 text-sm text-gray-500">Ini akan menjadi URL publik halaman Anda. Gunakan huruf kecil, angka, dan tanda hubung (-).</p>
                </div>

                {{-- TOGGLE STATUS PUBLIKASI BARU --}}
                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700">Status Halaman</label>
                    <div class="mt-2 flex items-center">
                        <span class="text-sm font-medium mr-3 {{ $status === 'draft' ? 'text-blue-600' : 'text-gray-500' }}">Draft</span>
                        <button type="button" wire:click="toggleStatus"
                                class="relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 {{ $status === 'published' ? 'bg-green-600' : 'bg-gray-200' }}"
                                aria-pressed="false">
                            <span aria-hidden="true"
                                class="pointer-events-none inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200 {{ $status === 'published' ? 'translate-x-5' : 'translate-x-0' }}"></span>
                        </button>
                        <span class="text-sm font-medium ml-3 {{ $status === 'published' ? 'text-green-600' : 'text-gray-500' }}">Published</span>
                    </div>
                    <p class="mt-2 text-sm text-gray-500">Hanya halaman dengan status "Published" yang bisa diakses publik.</p>
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
                <div class="p-6 bg-white shadow-sm sm:rounded-lg space-y-6">
                    <h3 class="text-lg font-medium border-b pb-2">Konten Agen Properti</h3>
                    
                    {{-- Navigasi --}}
                    <div class="space-y-2"><h4 class="font-semibold text-gray-800">Navigasi</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <div><label>Nama Brand</label><input type="text" wire:model.lazy="content.nav_brand_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                            <div><label>Tagline</label><input type="text" wire:model.lazy="content.nav_tagline" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <div><label>Link 1</label><input type="text" wire:model.lazy="content.nav_link_1" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                            <div><label>Link 2</label><input type="text" wire:model.lazy="content.nav_link_2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                            <div><label>Link 3</label><input type="text" wire:model.lazy="content.nav_link_3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                            <div><label>Tombol CTA</label><input type="text" wire:model.lazy="content.nav_link_cta" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        </div>
                    </div>

                    {{-- Hero --}}
                    <div class="pt-4 space-y-2"><h4 class="font-semibold text-gray-800">Bagian Hero</h4>
                        <div><label>URL Gambar Latar</label><input type="text" wire:model.lazy="content.hero_bg_image" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        <div class="grid grid-cols-2 gap-4">
                            <div><label>Judul</label><input type="text" wire:model.lazy="content.hero_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                            <div><label>Judul (Berwarna)</label><input type="text" wire:model.lazy="content.hero_title_highlight" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        </div>
                        <div><label>Sub-Judul</label><textarea wire:model.lazy="content.hero_subtitle" rows="2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></textarea></div>
                        <div class="grid grid-cols-3 gap-4">
                            @for ($i = 1; $i <= 3; $i++)
                            <div><label>Angka Stat {{ $i }}</label><input type="text" wire:model.lazy="content.stat_{{ $i }}_number" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                            @endfor
                            @for ($i = 1; $i <= 3; $i++)
                            <div><label>Label Stat {{ $i }}</label><input type="text" wire:model.lazy="content.stat_{{ $i }}_label" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                            @endfor
                        </div>
                        <div><label>Teks Tombol Aksi</label><input type="text" wire:model.lazy="content.hero_cta_button" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                    </div>

                    {{-- Layanan --}}
                    <div class="pt-4 space-y-2"><h4 class="font-semibold text-gray-800">Bagian Layanan</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <div><label>Judul</label><input type="text" wire:model.lazy="content.services_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                            <div><label>Judul (Berwarna)</label><input type="text" wire:model.lazy="content.services_title_highlight" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        </div>
                        <div><label>Sub-Judul</label><input type="text" wire:model.lazy="content.services_subtitle" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        <div class="grid grid-cols-3 gap-4">
                            @for ($i = 1; $i <= 3; $i++)
                            <div class="border p-4 rounded-md space-y-2"><label class="font-bold">Layanan {{ $i }}</label>
                                <input type="text" placeholder="Ikon Emoji" wire:model.lazy="content.service_{{ $i }}_icon" class="block w-full rounded-md border-gray-300 shadow-sm">
                                <input type="text" placeholder="Judul" wire:model.lazy="content.service_{{ $i }}_title" class="block w-full rounded-md border-gray-300 shadow-sm">
                                <textarea placeholder="Deskripsi" wire:model.lazy="content.service_{{ $i }}_description" rows="2" class="block w-full rounded-md border-gray-300 shadow-sm"></textarea>
                            </div>
                            @endfor
                        </div>
                    </div>

                    {{-- Properti --}}
                    <div class="pt-4 space-y-2"><h4 class="font-semibold text-gray-800">Bagian Properti</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <div><label>Judul</label><input type="text" wire:model.lazy="content.properties_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                            <div><label>Judul (Berwarna)</label><input type="text" wire:model.lazy="content.properties_title_highlight" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        </div>
                        <div><label>Sub-Judul</label><input type="text" wire:model.lazy="content.properties_subtitle" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        <div class="grid grid-cols-3 gap-4">
                             @for ($i = 1; $i <= 3; $i++)
                            <div class="border p-4 rounded-md space-y-2"><label class="font-bold">Properti {{ $i }}</label>
                                <input type="text" placeholder="URL Gambar" wire:model.lazy="content.property_{{ $i }}_image" class="block w-full rounded-md border-gray-300 shadow-sm">
                                <input type="text" placeholder="Badge" wire:model.lazy="content.property_{{ $i }}_badge" class="block w-full rounded-md border-gray-300 shadow-sm">
                                <input type="text" placeholder="Nama" wire:model.lazy="content.property_{{ $i }}_name" class="block w-full rounded-md border-gray-300 shadow-sm">
                                <input type="text" placeholder="Harga" wire:model.lazy="content.property_{{ $i }}_price" class="block w-full rounded-md border-gray-300 shadow-sm">
                                <input type="text" placeholder="Spek 1" wire:model.lazy="content.property_{{ $i }}_spec_1" class="block w-full rounded-md border-gray-300 shadow-sm">
                                <input type="text" placeholder="Spek 2" wire:model.lazy="content.property_{{ $i }}_spec_2" class="block w-full rounded-md border-gray-300 shadow-sm">
                                <input type="text" placeholder="Spek 3" wire:model.lazy="content.property_{{ $i }}_spec_3" class="block w-full rounded-md border-gray-300 shadow-sm">
                                <input type="text" placeholder="Lokasi" wire:model.lazy="content.property_{{ $i }}_location" class="block w-full rounded-md border-gray-300 shadow-sm">
                                <input type="text" placeholder="Teks Tombol" wire:model.lazy="content.property_{{ $i }}_button" class="block w-full rounded-md border-gray-300 shadow-sm">
                            </div>
                            @endfor
                        </div>
                         <div><label>Teks Tombol CTA Utama</label><input type="text" wire:model.lazy="content.properties_cta_button" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                    </div>
                    
                    {{-- Agen & Kontak --}}
                    <div class="pt-4 space-y-2"><h4 class="font-semibold text-gray-800">Bagian Agen & Kontak</h4>
                        <div><label>URL Avatar Agen</label><input type="text" wire:model.lazy="content.agent_avatar" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        <div><label>Nama Agen</label><input type="text" wire:model.lazy="content.agent_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        <div><label>Jabatan Agen</label><input type="text" wire:model.lazy="content.agent_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        <div><label>Deskripsi Agen</label><textarea wire:model.lazy="content.agent_description" rows="2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></textarea></div>
                        <div class="grid grid-cols-3 gap-4">
                            @for ($i = 1; $i <= 3; $i++)
                            <div><label>Judul Kontak {{ $i }}</label><input type="text" wire:model.lazy="content.contact_box_{{ $i }}_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                            @endfor
                            @for ($i = 1; $i <= 3; $i++)
                            <div><label>Konten Kontak {{ $i }}</label><input type="text" wire:model.lazy="content.contact_box_{{ $i }}_content" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                            @endfor
                        </div>
                        <div class="grid grid-cols-2 gap-4">
                             <div><label>Teks Tombol WhatsApp</label><input type="text" wire:model.lazy="content.agent_cta_whatsapp" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                            <div><label>Teks Tombol Telepon</label><input type="text" wire:model.lazy="content.agent_cta_phone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        </div>
                    </div>
                    
                    {{-- Footer --}}
                    <div class="pt-4 space-y-2"><h4 class="font-semibold text-gray-800">Bagian Footer</h4>
                        <div><label>Nama Brand Footer</label><input type="text" wire:model.lazy="content.footer_brand_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        <div><label>Deskripsi Footer</label><input type="text" wire:model.lazy="content.footer_description" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        <div class="grid grid-cols-3 gap-4">
                            <div><label>Judul Link 1</label><input type="text" wire:model.lazy="content.footer_links_1_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                            <div><label>Judul Link 2</label><input type="text" wire:model.lazy="content.footer_links_2_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                            <div><label>Judul Link 3</label><input type="text" wire:model.lazy="content.footer_links_3_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                            <div><label>Item 1.1</label><input type="text" wire:model.lazy="content.footer_links_1_item_1" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                            <div><label>Item 2.1</label><input type="text" wire:model.lazy="content.footer_links_2_item_1" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                            <div><label>Kontak Telepon</label><input type="text" wire:model.lazy="content.footer_contact_phone" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                             <div><label>Item 1.2</label><input type="text" wire:model.lazy="content.footer_links_1_item_2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                            <div><label>Item 2.2</label><input type="text" wire:model.lazy="content.footer_links_2_item_2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                            <div><label>Kontak Email</label><input type="text" wire:model.lazy="content.footer_contact_email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        </div>
                        <div><label>Teks Copyright</label><input type="text" wire:model.lazy="content.footer_copyright" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                    </div>
                </div>

            @elseif ($page->template->name === 'Event & Webinar')
                <div class="p-6 bg-white shadow-sm sm:rounded-lg space-y-6">
                    <h3 class="text-lg font-medium border-b pb-2">Konten Event & Webinar</h3>

                    {{-- Navigasi --}}
                    <div class="space-y-2">
                        <h4 class="font-semibold text-gray-800">Navigasi</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <div><label>Inisial Logo</label><input type="text" wire:model.lazy="content.nav_logo_initial" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                            <div><label>Nama Brand</label><input type="text" wire:model.lazy="content.nav_brand_name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        </div>
                        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                            <div><label>Link 1</label><input type="text" wire:model.lazy="content.nav_link_1" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                            <div><label>Link 2</label><input type="text" wire:model.lazy="content.nav_link_2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                            <div><label>Link 3</label><input type="text" wire:model.lazy="content.nav_link_3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                            <div><label>Tombol CTA</label><input type="text" wire:model.lazy="content.nav_link_cta" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        </div>
                    </div>

                    {{-- Hero --}}
                    <div class="pt-4 space-y-2">
                        <h4 class="font-semibold text-gray-800">Bagian Hero</h4>
                        <div><label>Judul Utama</label><input type="text" wire:model.lazy="content.hero_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        <div><label>Sub-Judul</label><textarea wire:model.lazy="content.hero_subtitle" rows="3" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></textarea></div>
                        <div><label>Teks Tombol Aksi</label><input type="text" wire:model.lazy="content.hero_cta_button" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                    </div>
                    
                    {{-- Info Bar --}}
                    <div class="pt-4">
                        <h4 class="font-semibold text-gray-800">Info Bar</h4>
                        <div class="grid grid-cols-3 gap-4 mt-2">
                            <div><label>Judul Info 1</label><input type="text" wire:model.lazy="content.info_box_1_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                            <div><label>Judul Info 2</label><input type="text" wire:model.lazy="content.info_box_2_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                            <div><label>Judul Info 3</label><input type="text" wire:model.lazy="content.info_box_3_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                            <div><label>Konten Info 1</label><input type="text" wire:model.lazy="content.info_box_1_content" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                            <div><label>Konten Info 2</label><input type="text" wire:model.lazy="content.info_box_2_content" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                            <div><label>Konten Info 3</label><input type="text" wire:model.lazy="content.info_box_3_content" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        </div>
                    </div>

                    {{-- Pembicara --}}
                    <div class="pt-4 space-y-2">
                        <h4 class="font-semibold text-gray-800">Bagian Pembicara</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <div><label>Judul</label><input type="text" wire:model.lazy="content.speakers_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                            <div><label>Judul (Berwarna)</label><input type="text" wire:model.lazy="content.speakers_title_highlight" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        </div>
                        <div><label>Sub-Judul</label><input type="text" wire:model.lazy="content.speakers_subtitle" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 pt-2">
                            @for ($i = 1; $i <= 3; $i++)
                            <div class="border p-4 rounded-md space-y-2">
                                <label class="block text-sm font-bold text-gray-700">Pembicara {{ $i }}</label>
                                <input type="text" placeholder="URL Avatar" wire:model.lazy="content.speaker_{{ $i }}_avatar" class="block w-full rounded-md border-gray-300 shadow-sm">
                                <input type="text" placeholder="Badge (e.g., CEO)" wire:model.lazy="content.speaker_{{ $i }}_badge" class="block w-full rounded-md border-gray-300 shadow-sm">
                                <input type="text" placeholder="Nama" wire:model.lazy="content.speaker_{{ $i }}_name" class="block w-full rounded-md border-gray-300 shadow-sm">
                                <input type="text" placeholder="Jabatan" wire:model.lazy="content.speaker_{{ $i }}_title" class="block w-full rounded-md border-gray-300 shadow-sm">
                                <textarea placeholder="Deskripsi" wire:model.lazy="content.speaker_{{ $i }}_description" rows="2" class="block w-full rounded-md border-gray-300 shadow-sm"></textarea>
                            </div>
                            @endfor
                        </div>
                    </div>

                    {{-- Manfaat --}}
                    <div class="pt-4 space-y-2">
                        <h4 class="font-semibold text-gray-800">Bagian Manfaat</h4>
                         <div class="grid grid-cols-2 gap-4">
                            <div><label>Judul</label><input type="text" wire:model.lazy="content.benefits_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                            <div><label>Judul (Berwarna)</label><input type="text" wire:model.lazy="content.benefits_title_highlight" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        </div>
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-4 pt-2">
                             @for ($i = 1; $i <= 4; $i++)
                            <div class="border p-4 rounded-md space-y-2">
                                <label class="block text-sm font-bold text-gray-700">Manfaat {{ $i }}</label>
                                <input type="text" placeholder="Ikon Emoji" wire:model.lazy="content.benefit_{{ $i }}_icon" class="block w-full rounded-md border-gray-300 shadow-sm">
                                <input type="text" placeholder="Judul" wire:model.lazy="content.benefit_{{ $i }}_title" class="block w-full rounded-md border-gray-300 shadow-sm">
                                <input type="text" placeholder="Deskripsi" wire:model.lazy="content.benefit_{{ $i }}_description" class="block w-full rounded-md border-gray-300 shadow-sm">
                            </div>
                            @endfor
                        </div>
                    </div>
                    
                    {{-- Pendaftaran --}}
                    <div class="pt-4 space-y-2">
                        <h4 class="font-semibold text-gray-800">Bagian Pendaftaran</h4>
                        <div class="grid grid-cols-2 gap-4">
                            <div><label>Judul</label><input type="text" wire:model.lazy="content.register_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                            <div><label>Judul (Berwarna)</label><input type="text" wire:model.lazy="content.register_title_highlight" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        </div>
                        <div><label>Sub-Judul</label><textarea wire:model.lazy="content.register_subtitle" rows="2" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></textarea></div>
                        <div><label>Teks Tombol</label><input type="text" wire:model.lazy="content.register_button_text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        <div><label>Catatan Kaki</label><input type="text" wire:model.lazy="content.register_note" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                    </div>

                    {{-- Footer --}}
                    <div class="pt-4 space-y-2">
                         <h4 class="font-semibold text-gray-800">Footer</h4>
                        <div><label>Judul</label><input type="text" wire:model.lazy="content.footer_title" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        <div><label>Teks Kontak</label><input type="text" wire:model.lazy="content.footer_contact_text" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        <div><label>Email</label><input type="text" wire:model.lazy="content.footer_email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                        <div><label>Teks Copyright</label><input type="text" wire:model.lazy="content.footer_copyright" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm"></div>
                    </div>
                </div>

                {{-- Tombol Simpan dan Lihat Halaman --}}
            @endif
            <div class="flex justify-end space-x-4">
                <a href="{{ route('public.page.show', $page) }}" target="_blank" class="inline-block px-4 py-2 bg-gray-200 rounded-md text-sm font-medium text-gray-700 hover:bg-gray-300">Lihat Halaman</a>
                <button type="submit" class="px-4 py-2 bg-blue-600 rounded-md text-sm font-medium text-white hover:bg-blue-700">Simpan Perubahan</button>
            </div>
        </form>
    </div>
</div>