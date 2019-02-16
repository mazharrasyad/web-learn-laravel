# Install ckeditor

- composer create-project --prefer-dist laravel/laravel ckeditor 
- Download latest version of Ckeditor from http://ckeditor.com/download
- Download latest version of kcfinder from http://kcfinder.sunhater.com/download
- Buat direktori baru dengan nama ckeditor di direktori public seperti berikut public/ckeditor
- Ekstrak kedua file yang telah didownload pada direktori public/ckeditor
- Ganti nama direktori menjadi ckeditor dan kcfinder tanpa ada versinya
- Edit public/ckeditor/ckeditor/config.js dan tambahkan code berikut didalam function CKEDITOR.editorConfig untuk menghubungkan ke server penyimpanan image
    - config.filebrowserBrowseUrl = 'ckeditor/kcfinder/browse.php?opener=ckeditor&type=files';
	- config.filebrowserImageBrowseUrl = 'ckeditor/kcfinder/browse.php?opener=ckeditor&type=images';
	- config.filebrowserFlashBrowseUrl = 'ckeditor/kcfinder/browse.php?opener=ckeditor&type=flash';
	- config.filebrowserUploadUrl = 'ckeditor/kcfinder/upload.php?opener=ckeditor&type=files';
	- config.filebrowserImageUploadUrl = 'ckeditor/kcfinder/upload.php?opener=ckeditor&type=images';
    - config.filebrowserFlashUploadUrl = 'ckeditor/kcfinder/upload.php?opener=ckeditor&type=flash';
- Edit public/ckeditor/kcfinder/conf/config.php and ubah code berikut dalam // GENERAL SETTINGS untuk memperbolehkan mengupload file image
    - 'disabled' => true, Menjadi 'disabled' => false,
- Edit routes/web.php dan tambahkan code berikut untuk mengakses form ckeditor
    - Route::get('ckeditor-demo',function(){
    -   return view('ckeditor.index');
    - });    
- Buat file index.blade.php pada path resources/views/ckeditor/index.blade.php dan lihat codenya pada file tersebut
- Pastikan URL http://localhost/ckeditor/public/ckeditor-demo dapat berfungsi

# Install laravel-filemanager

- Ketikkan perintah berikut composer require unisharp/laravel-filemanager:dev-master dalam direktori ckeditor dengan terminal
- Edit config/app.php dan tambahkan code berikut
    - Tambahkan dalam array 'providers' 
        - UniSharp\LaravelFilemanager\LaravelFilemanagerServiceProvider::class,
        - Intervention\Image\ImageServiceProvider::class,
    - Tambahkan dalam array 'alieses'
        - 'Image' => Intervention\Image\Facades\Image::class,
- Publish the package's config and assets :
    - php artisan vendor:publish --tag=lfm_config
    - php artisan vendor:publish --tag=lfm_public
- Run commands to clear cache :
    - php artisan route:clear
    - php artisan config:clear
- Ensure that the files & images directories (in config/lfm.php) are writable by your web server (run commands like chown or chmod) dengan perintah sudo chmod 777 -R ckeditor
- Create symbolic link : php artisan storage:link
- Edit APP_URL dalam file .env menjadi http://localhost/ckeditor/public
- Edit resources/views/ckeditor/index.blade.php dan tambahkan code berikut
    - < script >
    -   var options = {
    -       filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
    -       filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
    -       filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
    -       filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
    -   };
    -   CKEDITOR.replace('my-editor', options);
    - < /script >
- Edit routes/web.php dan tambahkan code berikut
    - Route::group(['middleware' => 'auth'], function () {
    -   Route::get('/laravel-filemanager', '\UniSharp\LaravelFilemanager\Controllers\LfmController@show');
    -   Route::post('/laravel-filemanager/upload','\UniSharp\LaravelFilemanager\Controllers\UploadController@upload');    
    - });
- php artisan make:auth
- Edit app/Providers/AppServiceProvider.php dan atur default string seperti dalam file
- php artisan migrate

# CRUD

- php artisan make:model Post -m
- php artisan make:model PostController --resource
- php artisan migrate

# Referensi

- https://www.youtube.com/watch?v=nMaCMmxB6kw
- http://www.laravelinterviewquestions.com/2017/08/uploading-image-ckeditor-kcfinder-laravel-5-4.html
- https://github.com/UniSharp/laravel-filemanager/blob/master/docs/installation.md