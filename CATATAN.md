INSTALASI BAGI YANG BELUM

php 8.2
db :mysql

-   SETTING ENV SESUAIKAN
-   di terminal
    -   "composer install" untuk mendapatkan package yang diperlukan sama projek laravel kita
    -   "php artisan key generate" untuk mendapatkan key yang ada di env
    -   "composer autodump" bila diperlukan
    -   "php artisan migrate" untuk menambahkan table pada database secara otomatis

YANG AKAN DAN SEDANG DIPELAJARI

-   bagaimana menampilkan data (yang sudah kita tambah di phpmyadmin) ditampilkan di halaman website nya
    -   file views nya ada di (resource/views/pasien_views/index)
    -   tambahkan column data pasien yang belum dipanggil lihat saja contoh nya.
    -   design frontend nya jadi lebih menarik bebas gunakan kemampuan html dan css yang pernah dipelajari, diskusikan saja sama partner.

CARA PUSH PROJEK

-   git remote add origin https://github.com/alisyaya/crud-simrs (bagi yang belum)
-   git add .
-   git commit -m "keterangan"
-   git push -u origin master

-   git credential-cache exit (kalo gagal saat push)

*   bila ada yang belum dimengerti tanyalan saja ya

==
