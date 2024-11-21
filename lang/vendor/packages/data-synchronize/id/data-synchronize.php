<?php

return [
    'tools' => [
        'export_import_data' => 'Data Ekspor/Impor',
    ],
    'import' => [
        'name' => 'Impor',
        'heading' => 'Impor :label',
        'failed_to_read_file' => 'Berkas tidak valid, rusak, atau terlalu besar untuk dibaca.',
        'form' => [
            'quick_export_message' => 'Jika Anda ingin mengekspor data :label, Anda dapat melakukannya dengan cepat dengan mengklik :export_csv_link atau :export_excel_link.',
            'quick_export_button' => 'Ekspor ke :format',
            'dropzone_message' => 'Seret dan jatuhkan file di sini atau klik untuk mengunggah',
            'allowed_extensions' => 'Pilih berkas dengan ekstensi berikut: :extensions.',
            'import_button' => 'Impor',
            'chunk_size' => 'Ukuran potongan',
            'chunk_size_helper' => 'Jumlah baris yang akan diimpor pada satu waktu ditentukan oleh ukuran chunk. Tingkatkan nilai ini jika Anda memiliki file besar dan data diimpor dengan sangat cepat. Kurangi nilai ini jika Anda mengalami keterbatasan memori atau masalah batas waktu gateway saat mengimpor data.',
        ],
        'failures' => [
            'title' => 'Kegagalan',
            'attribute' => 'Atribut',
            'errors' => 'Kesalahan',
        ],
        'example' => [
            'title' => 'Contoh',
            'download' => 'Unduh contoh :ketik file',
        ],
        'rules' => [
            'title' => 'Aturan',
            'column' => 'Kolom',
        ],
        'uploading_message' => 'Mulai mengunggah berkas...',
        'uploaded_message' => 'File :file telah berhasil diunggah. Mulai validasi data...',
        'validating_message' => 'Memvalidasi dari :from ke :to...',
        'importing_message' => 'Mengimpor dari :from ke :to...',
        'done_message' => 'Berhasil mengimpor :count :label.',
        'validating_failed_message' => 'Validasi gagal. Harap periksa kesalahan di bawah ini.',
        'no_data_message' => 'Data Anda sudah terkini atau tidak ada data yang perlu diimpor.',
    ],
    'export' => [
        'name' => 'Ekspor',
        'heading' => 'Ekspor :label',
        'form' => [
            'all_columns_disabled' => 'Kolom berikut akan diekspor: :columns.',
            'columns' => 'Kolom',
            'format' => 'Format',
            'export_button' => 'Ekspor',
        ],
        'success_message' => 'Berhasil diekspor.',
        'error_message' => 'Ekspor gagal.',
        'empty_state' => [
            'title' => 'Tidak ada data untuk diekspor',
            'description' => 'Sepertinya tidak ada data untuk diekspor.',
            'back' => 'Kembali ke :halaman',
        ],
    ],
];
