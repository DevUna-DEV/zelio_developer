<?php

return [
    'title' => 'Instalasi',
    'next' => 'Langkah Berikutnya',
    'back' => 'Sebelumnya',
    'finish' => 'Memasang',
    'installation' => 'Instalasi',
    'forms' => [
        'errorTitle' => 'Terjadi kesalahan berikut:',
    ],
    'welcome' => [
        'title' => 'Selamat datang',
        'message' => 'Sebelum memulai, kami memerlukan beberapa informasi tentang basis data. Anda perlu mengetahui hal-hal berikut sebelum melanjutkan.',
        'language' => 'Bahasa',
        'next' => 'Ayo kita pergi',
    ],
    'requirements' => [
        'title' => 'Persyaratan Server',
        'next' => 'Periksa Izin',
    ],
    'permissions' => [
        'next' => 'Konfigurasi Lingkungan',
    ],
    'environment' => [
        'wizard' => [
            'title' => 'Pengaturan Lingkungan',
            'form' => [
                'name_required' => 'Nama lingkungan diperlukan.',
                'app_name_label' => 'Judul situs',
                'app_name_placeholder' => 'Judul situs',
                'app_url_label' => 'Alamat URL-nya',
                'app_url_placeholder' => 'Alamat URL-nya',
                'db_connection_label' => 'Koneksi Basis Data',
                'db_connection_label_mysql' => 'MySQL',
                'db_connection_label_sqlite' => 'Bahasa SQLite',
                'db_connection_label_pgsql' => 'Bahasa pemrograman PostgreSQL',
                'db_host_label' => 'Host basis data',
                'db_host_placeholder' => 'Host basis data',
                'db_port_label' => 'Port basis data',
                'db_port_placeholder' => 'Port basis data',
                'db_name_label' => 'Nama basis data',
                'db_name_placeholder' => 'Nama basis data',
                'db_username_label' => 'Nama pengguna basis data',
                'db_username_placeholder' => 'Nama pengguna basis data',
                'db_password_label' => 'Kata sandi basis data',
                'db_password_placeholder' => 'Kata sandi basis data',
                'buttons' => [
                    'install' => 'Memasang',
                ],
                'db_host_helper' => 'Jika Anda menggunakan Laravel Sail, cukup ubah DB_HOST menjadi DB_HOST=mysql. Pada beberapa hosting, DB_HOST dapat berupa localhost, bukan 127.0.0.1',
                'db_connections' => [
                    'mysql' => 'MySQL',
                    'sqlite' => 'Bahasa SQLite',
                    'pgsql' => 'Bahasa pemrograman PostgreSQL',
                ],
            ],
        ],
        'success' => 'Pengaturan file .env Anda telah disimpan.',
        'errors' => 'Tidak dapat menyimpan file .env, Harap membuatnya secara manual.',
    ],
    'theme' => [
        'title' => 'Pilih tema',
        'message' => 'Pilih tema untuk mempersonalisasi tampilan situs web Anda. Pilihan ini juga akan mengimpor data sampel yang disesuaikan dengan tema yang dipilih.',
    ],
    'createAccount' => [
        'title' => 'Buat akun',
        'form' => [
            'first_name' => 'Nama depan',
            'last_name' => 'Nama belakang',
            'username' => 'Nama belakang',
            'email' => 'E-mail',
            'password' => 'Kata sandi',
            'password_confirmation' => 'Konfirmasi kata sandi',
            'create' => 'Membuat',
        ],
    ],
    'license' => [
        'title' => 'Aktifkan Lisensi',
        'skip' => 'Lewati untuk saat ini',
    ],
    'install' => 'Memasang',
    'final' => [
        'pageTitle' => 'Instalasi Selesai',
        'title' => 'Selesai',
        'message' => 'Aplikasi telah berhasil dipasang.',
        'exit' => 'Buka dasbor admin',
    ],
    'install_success' => 'Berhasil dipasang!',
    'install_step_title' => 'Instalasi - Langkah :step: :title',
];
