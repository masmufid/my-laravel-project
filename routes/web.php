<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Models\User;


$secretariat = [
    [
        'id' => 1,
        'name' => 'Dr. Jelfina C. Alouw',
        'position' => 'Director General',
        'country' => 'Indonesia',
        'urlImage' => 'https://coconutcommunity.org/files/image/picture-dr-jelfina-c-alouw.jpg'
    ],
    [
        'id' => 2,
        'name' => 'Mr. Aluthwalahewa Nuwan Chinthaka',
        'position' => 'Deputy Director General',
        'country' => 'Sri Lanka',
        'urlImage' => 'https://coconutcommunity.org/files/image/picture-aluthwala-hewa-nuwan-chinthaka.jpeg'
    ],
    [
        'id' => 3,
        'name' => 'Klaudio D. Hosang',
        'position' => 'Administrative & Finance Director',
        'country' => 'Indonesia',        
        'urlImage' => 'https://coconutcommunity.org/files/image/picture-klaudio-d-hosang.jpg'
    ],
    [
        'id' => 4,
        'name' => 'Alit Pirmansah',
        'position' => 'Market & Statistics Director',
        'country' => 'Indonesia',
        'urlImage' => 'https://coconutcommunity.org/files/image/picture-alit-pirmansah.jpg'
    ],
    [
        'id' => 5,
        'name' => 'Otniel Sintoro',
        'position' => 'Information & Publication Director',
        'country' => 'Indonesia',
        'urlImage' => 'https://coconutcommunity.org/files/image/picture-otniel-sintoro.jpg'
    ],
    [
        'id' => 6,
        'name' => 'Maria Widiastuti',
        'position' => 'Secretary',
        'country' => 'Indonesia',
        'urlImage' => 'https://coconutcommunity.org/files/image/picture-maria-widiastuti.jpg'
    ],

];

Route::get('/', function () {
    return view('home', ['vision' => 'Globally Sustainable, Resilient, Inclusive and highly Profitable Coconut Sector']);
});



Route::get('/about', function () use ($secretariat) {
   
    return view('about',[
        'secretariat' => $secretariat
    ]);
});

Route::get('/secretariat/{id}', function ($id) use ($secretariat) {
   
    $selectedSecretariat = Arr::first($secretariat, fn($sec) => $sec['id'] == $id);
   

    return view('secretariat', [
        'sec' => $selectedSecretariat,
        'id' => $id
    ]);
});

Route::get('/publication', function () {
    return view('publication');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/user', function () {
    $user = User::find(1);
    echo $user->name;
    echo $user->email;
    echo $user->password;
    echo $user->created_at;
    echo $user->updated_at;
    echo $user->email_verified_at;
    echo $user->remember_token;
    // return view('user');
});


