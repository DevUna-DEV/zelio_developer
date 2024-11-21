<?php

return [
    'common' => [
        'name' => 'Nama',
        'email' => 'E-mail',
        'website' => 'Situs web',
        'comment' => 'Komentar',
    ],
    'title' => 'Komentar',
    'author' => 'Pengarang',
    'responsed_to' => 'Respon terhadap',
    'permalink' => 'Tautan permanen',
    'url' => 'Alamat URL-nya',
    'submitted_on' => 'Dikirimkan pada',
    'edit_comment' => 'Edit Komentar',
    'reply' => 'Membalas',
    'in_reply_to' => 'Sebagai balasan untuk :nama',
    'reply_modal' => [
        'title' => 'Membalas :komentar',
        'cancel' => 'Membatalkan',
    ],
    'allow_comments' => 'Izinkan komentar',
    'front' => [
        'admin_badge' => 'Admin',
        'list' => [
            'title' => ':hitung komentar|:hitung komentar',
            'reply' => 'Membalas',
            'reply_to' => 'Balas ke :nama',
            'cancel_reply' => 'Batalkan balasan',
            'waiting_for_approval_message' => 'Komentar Anda sedang menunggu moderasi. Ini adalah pratinjau, komentar Anda akan terlihat setelah disetujui.',
        ],
        'form' => [
            'title' => 'Tinggalkan komentar',
            'description' => 'Alamat email Anda tidak akan dipublikasikan. Kolom yang wajib diisi ditandai dengan *',
            'cookie_consent' => 'Simpan nama, email, dan situs web saya di browser ini untuk komentar saya berikutnya.',
            'submit' => 'Kirim Komentar',
        ],
        'comment_success_message' => 'Komentar Anda telah berhasil dikirim.',
    ],
    'enums' => [
        'statuses' => [
            'pending' => 'Tertunda',
            'approved' => 'Disetujui',
            'spam' => 'Spam',
            'trash' => 'Sampah',
        ],
    ],
    'settings' => [
        'title' => 'Komentar FOB',
        'description' => 'Konfigurasikan pengaturan untuk Komentar FOB',
        'form' => [
            'enable_recaptcha' => 'Aktifkan reCAPTCHA',
            'enable_recaptcha_help' => 'Anda perlu mengaktifkan reCAPTCHA di :url untuk menggunakan fitur ini.',
            'captcha_setting_label' => 'Pengaturan Captcha',
            'comment_moderation' => 'Komentar harus disetujui secara manual',
            'comment_moderation_help' => 'Semua komentar harus disetujui secara manual oleh admin sebelum ditampilkan di frontend.',
            'show_comment_cookie_consent' => 'Tampilkan kotak centang cookie komentar, yang memungkinkan pengunjung menyimpan informasi mereka di browser',
            'auto_fill_comment_form' => 'Data komentar isi otomatis untuk pengguna yang masuk',
            'auto_fill_comment_form_help' => 'Formulir komentar akan otomatis terisi dengan data pengguna seperti nama lengkap, email, dan lain-lain, jika pengguna tersebut login.',
            'comment_order' => 'Urutkan komentar berdasarkan',
            'comment_order_help' => 'Pilih urutan yang diinginkan untuk menampilkan komentar dalam daftar.',
            'comment_order_choices' => [
                'asc' => 'Tertua',
                'desc' => 'Terbaru',
            ],
            'display_admin_badge' => 'Tampilkan lencana admin untuk komentar admin',
        ],
    ],
];
