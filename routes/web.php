<?php

use App\Http\Controllers\Admin\Blog\BlogController;
use App\Http\Controllers\Admin\Blog\CategoryController;
use App\Http\Controllers\Admin\Home\HomeController;
use App\Mail\Resend\MailTest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;
use Resend\Laravel\Facades\Resend;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/resend', function () {
    Mail::to('abdelgha4or@gmail.com')->send(new MailTest());

    /*$mailerFrom = env('MAIL_FROM_ADDRESS');

    Resend::emails()->send([
        'from' => "Facturis <$mailerFrom>",
        'to' => ['abdelgha4or@gmail.com'],
        'subject' => 'hello world',
        'html' => (new MailTest())->render(),
    ]);*/
});

Route::group(['prefix' => 'theadmin', 'as' => 'admin:'], function () {

    Route::get('/', [HomeController::class, 'index'])->name('home');

    Route::group(['prefix' => 'cms', 'as' => 'cms:'], function () {

        Route::get('/blog', [BlogController::class, 'index'])->name('blog');

        Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
        Route::post('/blog/create', [BlogController::class, 'store'])->name('blog.store');


        Route::get('/blog/{post}', [BlogController::class, 'edit'])->name('blog.edit');
        Route::put('/blog/{post}', [BlogController::class, 'update'])->name('blog.update');

        Route::get('/category', [CategoryController::class, 'index'])->name('category');
    });
});
