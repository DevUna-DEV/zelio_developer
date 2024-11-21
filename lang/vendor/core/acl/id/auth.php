<?php

return [
    'login' => [
        'username' => 'Email/Nama Pengguna',
        'email' => 'E-mail',
        'password' => 'Kata sandi',
        'title' => 'Login Pengguna',
        'remember' => 'Ingat saya?',
        'login' => 'Masuk',
        'placeholder' => [
            'username' => 'Masukkan nama pengguna atau alamat email Anda',
            'email' => 'Masukkan alamat email Anda',
            'password' => 'Masukkan kata sandi Anda',
        ],
        'success' => 'Berhasil masuk!',
        'fail' => 'Nama pengguna atau kata sandi salah.',
        'not_active' => 'Akun Anda belum diaktifkan!',
        'banned' => 'Akun ini diblokir.',
        'logout_success' => 'Keluar Berhasil!!',
        'dont_have_account' => 'Anda tidak memiliki akun pada sistem ini, silakan hubungi administrator untuk informasi lebih lanjut!',
    ],
    'forgot_password' => [
        'title' => 'Lupa Kata Sandi',
        'message' => '<p>Apakah Anda lupa kata sandi Anda?</p><p>Silakan masukkan akun email Anda. Sistem akan mengirimkan email dengan tautan aktif untuk mengatur ulang kata sandi Anda.</p>',
        'submit' => 'Kirim',
    ],
    'reset' => [
        'new_password' => 'Kata sandi baru',
        'password_confirmation' => 'Konfirmasi kata sandi baru',
        'email' => 'E-mail',
        'title' => 'Setel ulang kata sandi Anda',
        'update' => 'Memperbarui',
        'wrong_token' => 'Tautan ini tidak valid atau kedaluwarsa. Coba gunakan formulir pengaturan ulang lagi.',
        'user_not_found' => 'Nama pengguna ini tidak ada.',
        'success' => 'Reset kata sandi berhasil!',
        'fail' => 'Token tidak valid, tautan untuk mengatur ulang kata sandi telah kedaluwarsa!',
        'reset' => [
            'title' => 'Setel ulang kata sandi email',
        ],
        'send' => [
            'success' => 'Email telah dikirim ke akun email Anda. Harap periksa dan selesaikan tindakan ini.',
            'fail' => 'Tidak dapat mengirim email saat ini. Silakan coba lagi nanti.',
        ],
        'new-password' => 'Kata sandi baru',
        'placeholder' => [
            'new_password' => 'Masukkan kata sandi baru Anda',
            'new_password_confirmation' => 'Konfirmasikan kata sandi baru Anda',
        ],
    ],
    'email' => [
        'reminder' => [
            'title' => 'Setel ulang kata sandi email',
        ],
    ],
    'password_confirmation' => 'Konfirmasi kata sandi',
    'failed' => 'Gagal',
    'throttle' => 'Mencekik',
    'not_member' => 'Belum menjadi anggota?',
    'register_now' => 'Daftar sekarang',
    'lost_your_password' => 'Lupa kata sandi Anda?',
    'login_title' => 'Admin',
    'login_via_social' => 'Masuk dengan jejaring sosial',
    'back_to_login' => 'Kembali ke halaman login',
    'sign_in_below' => 'Masuk Di Bawah Ini',
    'languages' => 'Bahasa',
    'reset_password' => 'Setel Ulang Kata Sandi',
    'settings' => [
        'email' => [
            'title' => 'ACL',
            'description' => 'Konfigurasi email ACL',
            'templates' => [
                'password_reminder' => [
                    'title' => 'Setel ulang kata sandi',
                    'description' => 'Kirim email ke pengguna saat meminta pengaturan ulang kata sandi',
                    'subject' => 'Setel Ulang Kata Sandi',
                    'reset_link' => 'Tautan setel ulang kata sandi',
                ],
            ],
        ],
    ],
];
