<?php

namespace App\Config;

class AdminSimple extends \BasicApp\AdminSimple\Config\BaseAdminSimple
{

    public $admins = [
        [
            'name' => 'admin',
            'password' => '12345'
        ]
    ];

}