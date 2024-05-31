<?php

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
