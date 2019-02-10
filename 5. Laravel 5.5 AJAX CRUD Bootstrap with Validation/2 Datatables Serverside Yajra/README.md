# 2 Datatables Serverside Yajra

- Datatables yaitu memunculkan data secara realtime dengan pagination atau biasa disebut halaman
- Dalam laravel ada package yang dibuat untuk datatables yaitu yajra
- Berikut cara install yajra berdasarkan https://github.com/yajra/laravel-datatables :
    - composer require yajra/laravel-datatables-oracle:"~8.0"
    - Tambahkan perintah berikut pada config/app.php :
    - Yajra\DataTables\DataTablesServiceProvider::class, (Letakkan di bagian 'providers)
    - 'DataTables' => Yajra\DataTables\Facades\DataTables::class, (Letakkan di bagian 'aliases')
- php artisan make:controller ContactController --resource
- Perubahan file pada project larajax :
    - config/app.php
    - app/Http/Controllers/ContactController.php
    - routes/web.php
    - resources/views/welcome.blade.php