<?php

use Illuminate\Support\Facades\Hash;
use Faker\Generator as Faker;

$factory->define(App\Models\Admin::class, function (Faker $faker) {
    return [
        'name' => 'Rakib',
        'email' => 'admin@gmail.com',
        'password'=>Hash::make('admin123'),
        'phone' =>'0176151677',
    ];
});
