<?php

return [
    'name' => 'Buletin',
    'newsletter_form' => 'Formulir buletin',
    'description' => 'Melihat dan menghapus pelanggan buletin',
    'settings' => [
        'email' => [
            'templates' => [
                'title' => 'Buletin',
                'description' => 'Konfigurasikan templat email buletin',
                'to_admin' => [
                    'title' => 'Email dikirim ke admin',
                    'description' => 'Template untuk mengirim email ke admin',
                    'subject' => 'Pengguna baru berlangganan buletin Anda',
                    'newsletter_email' => 'Email pengguna yang berlangganan buletin',
                ],
                'to_user' => [
                    'title' => 'Email dikirim ke pengguna',
                    'description' => 'Template untuk mengirim email ke pelanggan',
                    'subject' => '{{ site_title }}: Langganan Dikonfirmasi!',
                    'newsletter_name' => 'Nama lengkap pengguna yang berlangganan buletin',
                    'newsletter_email' => 'Email pengguna yang berlangganan buletin',
                    'newsletter_unsubscribe_link' => 'Tautan untuk berhenti berlangganan buletin',
                    'newsletter_unsubscribe_url' => 'URL untuk berhenti berlangganan buletin',
                ],
            ],
        ],
        'title' => 'Buletin',
        'panel_description' => 'Lihat dan perbarui pengaturan buletin',
        'description' => 'Pengaturan untuk buletin (mengirim email buletin otomatis ke SendGrid, Mailchimp... ketika seseorang mendaftarkan buletin di situs web).',
        'mailchimp_api_key' => 'Kunci API Mailchimp',
        'mailchimp_list_id' => 'ID Daftar Mailchimp',
        'mailchimp_list' => 'Daftar Mailchimp',
        'sendgrid_api_key' => 'Kunci API Sendgrid',
        'sendgrid_list_id' => 'ID Daftar Sendgrid',
        'sendgrid_list' => 'Daftar Sendgrid',
        'enable_newsletter_contacts_list_api' => 'Aktifkan API daftar kontak buletin?',
    ],
    'statuses' => [
        'subscribed' => 'Berlangganan',
        'unsubscribed' => 'Berhenti berlangganan',
    ],
];
