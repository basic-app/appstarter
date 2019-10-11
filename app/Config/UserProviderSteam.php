<?php

namespace Config;

class UserProviderSteam extends \BasicApp\UserProvider\Config\BaseUserProviderAdapter
{

    protected $adapterClass = \Hybridauth\Provider\Steam::class;

    protected $secret;

    public $keys = [];

    public function __construct()
    {
        parent::__construct();

        if ($this->secret)
        {
            $this->keys['secret'] = $this->secret;
        }
    }

}