<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $route = Route::current();

    return view('homes.index');
});

route::prefix('auth')->name('auth.')->group(function () {
    Route::get('login', function () {
        return view('auth.login');
    })->name('login');
});


Route::prefix('users')->name('users.')->group(function () {
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

Route::prefix('tasks')->name('tasks.')->group(function () {


    Route::get('/index', function () {
        $tasks = [
            [
                'id' => 1,
                'title' => 'Lorem ipsum',
                'description' => 'Dolor sit amet',
                'author' => 'Your Name',
                'agent' => 'Your Agent',
            ],
            [
                'id' => 2,
                'title' => 'Lorem2',
                'description' => 'Ipsum Dolor2',
                'author' => 'Your Name',
                'agent' => 'Your Agent',
            ],
        ];

        return view('tasks.index', [
            'tasks' => $tasks,
        ]);
    })->name('index');

    Route::get('create', function () {
        return view('tasks.create');
    })->name('create');

    Route::post('store', function () {

        return redirect()->route('tasks.index');
    })->name('store');

    Route::get('edit', function () {

        $task =  [
            'id' => 1,
            'title' => 'Lorem ipsum',
            'description' => 'Dolor sit amet',
            'author' => 'Your Name',
            'agent' => 'Your Agent',
        ];

        return view('tasks.edit', [
            'task' => $task,
        ]);
    })->name('edit');

    Route::post('update', function () {
        return redirect()->route('tasks.index');
    })->name('update');

    Route::post('delete', function ($id) {
        return redirect()->back();
    })->name('delete');
});

Route::prefix('categories')->name('category.')->group(function () {

    Route::get('index', function () {
        return view('categories.index');
    })->name('index');

    Route::get('create', function () {
        return view('categories.create');
    })->name('create');
});

Route::get('account', function () {
    return view('accounts.index');
})->name('account');
