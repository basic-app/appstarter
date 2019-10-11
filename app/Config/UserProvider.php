<?php

namespace Config;

class UserProvider extends \BasicApp\UserProvider\Config\BaseUserProvider
{

    public $providers = [
        'steam' => UserProviderSteam::class
    ];

}