<?php

return [
    'statuses' => [
        'draft' => 'Draf',
        'pending' => 'Tertunda',
        'published' => 'Diterbitkan',
    ],
    'system_updater_steps' => [
        'download' => 'Unduh file pembaruan',
        'update_files' => 'Perbarui file sistem',
        'update_database' => 'Perbarui basis data',
        'publish_core_assets' => 'Publikasikan aset inti',
        'publish_packages_assets' => 'Publikasikan aset paket',
        'clean_up' => 'Bersihkan file pembaruan sistem',
        'done' => 'Sistem berhasil diperbarui',
        'messages' => [
            'download' => 'Mengunduh file pembaruan...',
            'update_files' => 'Memperbarui file sistem...',
            'update_database' => 'Memperbarui basis data...',
            'publish_core_assets' => 'Menerbitkan aset inti...',
            'publish_packages_assets' => 'Menerbitkan paket aset...',
            'clean_up' => 'Membersihkan file pembaruan sistem...',
            'done' => 'Selesai! Peramban Anda akan diperbarui dalam 30 detik.',
        ],
        'failed_messages' => [
            'download' => 'Tidak dapat mengunduh file pembaruan',
            'update_files' => 'Tidak dapat memperbarui file sistem',
            'update_database' => 'Tidak dapat memperbarui basis data',
            'publish_core_assets' => 'Tidak dapat menerbitkan aset inti',
            'publish_packages_assets' => 'Tidak dapat menerbitkan aset paket',
            'clean_up' => 'Tidak dapat membersihkan file pembaruan sistem',
        ],
        'success_messages' => [
            'download' => 'Berhasil mengunduh file pembaruan.',
            'update_files' => 'Berhasil memperbarui file sistem.',
            'update_database' => 'Berhasil memperbarui basis data.',
            'publish_core_assets' => 'Aset inti berhasil dipublikasikan.',
            'publish_packages_assets' => 'Aset paket berhasil diterbitkan.',
            'clean_up' => 'Berhasil membersihkan berkas pembaruan sistem.',
        ],
    ],
];
