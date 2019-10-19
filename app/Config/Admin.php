<?php

namespace App\Config;

class Admin extends \BasicApp\Admin\Config\BaseAdmin
{

    public $admins = [
        [
            'name' => 'admin',
            'password' => '12345',
            'roles' => ['admin']
        ]
    ];

}