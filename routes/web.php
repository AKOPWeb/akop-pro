<?php

use App\Models\PreLaunchEmail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::post('store-email-in-pre-launch', function () {

    request()->validate([
        'email' => 'required|email|unique:pre_launch_emails|max:255'
    ]);

    PreLaunchEmail::create([
        'email' => request('email')
    ]);

    return redirect()->route('index')->with('success','<strong>Seu e-Mail foi cadastrado!</strong> Prometemos não enviar nenhum tipo de SPAM.<br> Só vamos entrar em contato quando lançarmos o AKOP Pro.');

})->name('pre-launch.store');
