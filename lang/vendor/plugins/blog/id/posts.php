<?php

return [
    'create' => 'Buat postingan baru',
    'form' => [
        'name' => 'Nama',
        'name_placeholder' => 'Nama postingan (Maksimal karakter :c)',
        'description' => 'Keterangan',
        'description_placeholder' => 'Deskripsi singkat untuk postingan (Maksimal karakter :c)',
        'categories' => 'Kategori',
        'tags' => 'Tag:',
        'tags_placeholder' => 'Tag:',
        'content' => 'Isi',
        'is_featured' => 'Tampilkan postingan ini',
        'note' => 'Catatan konten',
        'format_type' => 'Format',
    ],
    'cannot_delete' => 'Postingan tidak dapat dihapus',
    'post_deleted' => 'Postingan dihapus',
    'posts' => 'Postingan',
    'post' => 'Pos',
    'edit_this_post' => 'Edit postingan ini',
    'no_new_post_now' => 'Tidak ada postingan baru sekarang!',
    'menu_name' => 'Postingan',
    'widget_posts_recent' => 'Tulisan Terbaru',
    'categories' => 'Kategori',
    'category' => 'Kategori',
    'author' => 'Pengarang',
    'export' => [
        'description' => 'Ekspor postingan ke berkas CSV/Excel.',
        'total' => 'Jumlah Postingan',
    ],
    'import' => [
        'description' => 'Impor postingan dari berkas CSV/Excel.',
        'done_message' => ':created postingan yang dibuat dan :updated postingan yang diperbarui.',
        'rules' => [
            'nullable_string_max' => 'Bidang :attribute menerima nilai string hingga :karakter maksimum atau boleh dibiarkan kosong.',
            'sometimes_array' => 'Bidang :attribute menerima nilai array atau boleh dibiarkan kosong.',
            'in' => ':attribute harus berupa salah satu nilai berikut: :values.',
            'nullable_string' => 'Bidang :attribute menerima nilai string atau boleh dibiarkan kosong.',
            'nullable_string_max_in' => 'Kolom :attribute dapat dibiarkan kosong, atau harus berupa string dengan panjang maksimum :max karakter jika disediakan dan harus berupa salah satu nilai berikut: :values.',
        ],
    ],
];
