# Encore
A PHP package mainly developed for Laravel to skip the same task during an access.

Installation&settings for Laravel
====

After installation using composer, add the followings to the array in  app/config/app.php

    'providers' => array(  
        ...Others...,  
        'Sukohi\Encore\EncoreServiceProvider',
    )

Also

    'aliases' => array(  
        ...Others...,  
        'Encore' => 'Sukohi\Encore\Facades\Encore',
    )

Usage
====

    $data = Encore::get('numbers', function(){  // Called

        return [
            '1' => 'one',
            '2' => 'two',
            '3' => 'three',
        ];

    });
    print_r($data);

    $data = Encore::get('numbers', function(){  // Not called here

        return [
            '1' => 'one',
            '2' => 'two',
            '3' => 'three',
        ];

    });
    print_r($data);

License
====
This package is licensed under the MIT License.

Copyright 2015 Sukohi Kuhoh