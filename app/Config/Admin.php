<?php

namespace App\Config;

use BasicApp\Admin\Models\AdminModel;

class Admin extends \BasicApp\Admin\Config\BaseAdmin
{

    public $admins = [
        [
            'name' => 'admin',
            'password' => '12345',
            'roles' => [AdminModel::ROLE_ADMIN]
        ]
    ];

}