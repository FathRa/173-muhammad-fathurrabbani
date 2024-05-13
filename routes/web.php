<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homes.index');
});


Route::name('users.')->group(function () {
    Route::get('/index', function () {
        return view('users.index');
    })->name('index');

    Route::get('/create', function () {
        return view('users.create');
    })->name('create');

    Route::post('/store', function () {
        return redirect()->route('users.index');
    })->name('store');

    Route::get('edit/{id}', function ($id) {
        $user = array('id' => 1, 'name' => 'Your Name', 'email' => 'YourEmail@mail.com', 'role' => 'Admin');
        return view('users.edit', ['user' => $user, 'name' => $user['name'], 'email' => $user['email']]);
    })->name('edit');

    Route::post('update/{$id}', function ($id) {
        return redirect()->route('users.index');
    })->name('update');

    Route::post('delete/{id}', function ($id) {
        $user = User::find($id);
        $user->delete();

        return redirect()->back();
    })->name('delete');
});
