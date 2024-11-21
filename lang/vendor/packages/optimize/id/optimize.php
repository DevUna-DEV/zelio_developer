<?php

return [
    'settings' => [
        'title' => 'Mengoptimalkan',
        'description' => 'Minimalkan keluaran HTML, CSS sebaris, hapus komentar...',
        'enable' => 'Aktifkan pengoptimalan kecepatan halaman?',
    ],
    'collapse_white_space' => 'Ciutkan ruang kosong',
    'collapse_white_space_description' => 'Filter ini mengurangi byte yang dikirimkan dalam berkas HTML dengan menghapus spasi yang tidak diperlukan.',
    'elide_attributes' => 'Atribut Elide',
    'elide_attributes_description' => 'Filter ini mengurangi ukuran transfer file HTML dengan menghapus atribut dari tag saat nilai yang ditentukan sama dengan nilai default untuk atribut tersebut. Ini dapat menghemat sejumlah kecil byte, dan dapat membuat dokumen lebih mudah dikompresi dengan mengkanonikalisasi tag yang terpengaruh.',
    'inline_css' => 'CSS sebaris',
    'inline_css_description' => 'Filter ini mengubah atribut gaya sebaris dari tag menjadi kelas dengan memindahkan CSS ke header.',
    'insert_dns_prefetch' => 'Masukkan prefetch DNS',
    'insert_dns_prefetch_description' => 'Filter ini menyuntikkan tag dalam HEAD untuk memungkinkan peramban melakukan prapengambilan DNS.',
    'remove_comments' => 'Hapus komentar',
    'remove_comments_description' => 'Filter ini menghilangkan komentar HTML, JS, dan CSS. Filter ini mengurangi ukuran transfer file HTML dengan menghapus komentar. Bergantung pada file HTML, filter ini dapat mengurangi jumlah byte yang dikirimkan pada jaringan secara signifikan.',
    'remove_quotes' => 'Hapus tanda kutip',
    'remove_quotes_description' => 'Filter ini menghilangkan tanda kutip yang tidak perlu dari atribut HTML. Meskipun diperlukan oleh berbagai spesifikasi HTML, browser mengizinkan penghilangan tanda kutip saat nilai atribut terdiri dari subset karakter tertentu (alfanumerik dan beberapa karakter tanda baca).',
    'defer_javascript' => 'Tunda javascript',
    'defer_javascript_description' => 'Menunda eksekusi javascript dalam HTML. Jika perlu membatalkan penundaan dalam beberapa skrip, gunakan data-pagespeed-no-defer sebagai atribut skrip untuk membatalkan penundaan.',
];
