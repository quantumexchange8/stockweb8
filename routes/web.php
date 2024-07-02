<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/wealthPreservation', function () {
    return view('wealthPreservation');
});

Route::get('/assetConsultancy', function () {
    return view('assetConsultancy');
});

Route::get('/acquiringCapital', function () {
    return view('acquiringCapital');
});

Route::get('/investmentApproach', function () {
    return view('investmentApproach');
});

Route::get('/investmentProcess', function () {
    return view('investmentProcess');
});

Route::get('/IPO', function () {
    return view('initialPublicOffering');
});

Route::get('/portfolioManagement', function () {
    return view('portfolioManagement');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/faq', function () {
    return view('faq');
});

Route::get('/career', function () {
    return view('career');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/contact', function () {
    return view('contact');
});

require __DIR__.'/auth.php';
