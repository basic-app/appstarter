<?php

namespace Config;

use CodeIgniter\Events\Events;
use BasicApp\System\SystemEvents;
use BasicApp\Admin\AdminEvents;

/*
 * --------------------------------------------------------------------
 * Application Events
 * --------------------------------------------------------------------
 * Events allow you to tap into the execution of the program without
 * modifying or extending core files. This file provides a central
 * location to define your events, though they can always be added
 * at run-time, also, if needed.
 *
 * You create code that can execute by subscribing to events with
 * the 'on()' method. This accepts any form of callable, including
 * Closures, that will be executed when the event is triggered.
 *
 * Example:
 *      Events::on('create', [$myInstance, 'myMethod']);
 */
if (!is_cli())
{
    Events::on('pre_system', function()
    {
    	while (ob_get_level() > 0)
    	{
    		ob_end_flush();
    	}

    	ob_start(function ($buffer) {
    		return $buffer;
    	});

    	/*
    	 * --------------------------------------------------------------------
    	 * Debug Toolbar Listeners.
    	 * --------------------------------------------------------------------
    	 * If you delete, they will no longer be collected.
    	 */
    	if (ENVIRONMENT !== 'production')
    	{
            Events::on('DBQuery', 'CodeIgniter\Debug\Toolbar\Collectors\Database::collect');
    		
            Services::toolbar()->respond();
    	}
    });
}

SystemEvents::onPreSystem(function()
{
    require APPPATH . 'ThirdParty/bootstrap.php';
});

if (class_exists(AdminEvents::class))
{
    AdminEvents::onRegisterAssets(function(\BasicApp\Admin\Events\AdminRegisterAssetsEvent $event)
    {
        \BasicApp\Js\TinyMce\TinyMceAsset::register($event->head, $event->beginBody, $event->endBody);
        \BasicApp\Js\CodeMirror\CodeMirrorAsset::register($event->head, $event->beginBody, $event->endBody);
    });
}