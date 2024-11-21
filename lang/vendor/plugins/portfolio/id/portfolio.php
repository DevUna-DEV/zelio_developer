<?php

return [
    'name' => 'Portofolio',
    'settings' => [
        'success_message' => 'Pengaturan telah berhasil disimpan!',
        'email' => [
            'title' => 'Permintaan Penawaran',
            'description' => 'Template email untuk permintaan penawaran',
            'templates' => [
                'notice_title' => 'Kirim pemberitahuan ke administrator',
                'notice_description' => 'Kirim pemberitahuan ke administrator ketika permintaan penawaran dikirim',
            ],
        ],
    ],
    'service_category' => [
        'name' => 'Kategori Layanan',
        'create' => 'Buat Kategori Layanan',
    ],
    'service' => [
        'name' => 'Layanan',
        'create' => 'Buat Layanan',
    ],
    'package' => [
        'name' => 'Paket',
        'create' => 'Buat Paket',
    ],
    'project' => [
        'name' => 'Proyek',
        'create' => 'Buat Proyek',
        'author' => 'Pengarang',
        'client' => 'Klien',
        'place' => 'Tempat',
        'start_date' => 'Tanggal Mulai',
    ],
    'quotation_request' => [
        'name' => 'Permintaan Penawaran',
        'viewing' => 'Melihat permintaan penawaran #:name',
        'information' => 'Informasi',
    ],
    'custom_field' => [
        'name' => 'Bidang Kustom',
        'create' => 'Membuat',
        'type' => 'Jenis',
        'options' => 'Pilihan',
        'placeholder' => 'Tempat penampung',
        'placeholder_placeholder' => 'Masukkan placeholder',
        'required' => 'Diperlukan',
        'option' => [
            'label' => 'Label',
            'value' => 'Nilai',
            'add_row' => 'Tambahkan baris baru',
            'add_from_global' => 'Tambahkan bidang kustom global',
        ],
        'modal' => [
            'heading' => 'Tambahkan bidang kustom baru',
            'select_field' => 'Pilih bidang',
            'button' => 'Tambahkan baru',
        ],
        'enums' => [
            'fields' => [
                'text' => 'Teks',
                'number' => 'Nomor',
                'dropdown' => 'tarik-turun',
                'checkbox' => 'Kotak centang',
                'textarea' => 'Area teks',
            ],
        ],
        'ask_for_select' => 'Silakan pilih bidang khusus',
        'add_a_new_custom_field' => 'Tambahkan bidang kustom baru',
    ],
    'image' => 'Gambar',
    'category' => 'Kategori',
    'duration' => 'Lamanya',
    'price' => 'Harga',
    'annual_price' => 'Harga tahunan',
    'form' => [
        'none' => '',
        'images' => 'Gambar',
        'name_placeholder' => 'Masukkan nama',
        'is_featured' => 'Apakah ditampilkan?',
        'price_placeholder' => 'Masukkan harga',
        'features' => 'Fitur',
        'features_help_block' => 'Pisahkan dengan baris baru (+ disertakan, - tidak disertakan)',
        'features_placeholder' => 'Contoh:'."\n"
            .'+ Pengiriman 15 Hari ke Seluruh Dunia'."\n"
            .'+ Bubble Warp Gratis'."\n"
            .'- Dukungan 24/7',
        'description_placeholder' => 'Masukkan deskripsi',
        'packages_switch_pricing_plan' => 'Masukkan harga tahunan untuk mengganti fitur paket harga',
        'action_url' => 'URL Tindakan',
        'action_label' => 'Label Tindakan',
    ],
    'is_popular' => 'Apakah populer?',
    'enums' => [
        'package_durations' => [
            'hourly' => 'Per jam',
            'daily' => 'Sehari-hari',
            'weekly' => 'Mingguan',
            'monthly' => 'Bulanan',
            'annually' => 'Setiap tahun',
            'quarterly' => 'Triwulanan',
        ],
        'quote_statuses' => [
            'read' => 'Membaca',
            'unread' => 'Belum dibaca',
        ],
    ],
    'edit_this_service' => 'Edit layanan ini',
    'edit_this_service_category' => 'Edit kategori layanan ini',
    'edit_this_project' => 'Edit proyek ini',
    'edit_this_project_category' => 'Edit kategori proyek ini',
    'edit_this_package' => 'Edit paket ini',
    'message' => 'Pesan',
    'time' => 'Waktu',
    'service_categories' => 'Kategori Layanan',
    'services' => 'Layanan',
    'projects' => 'Proyek',
    'packages' => 'Paket',
];
