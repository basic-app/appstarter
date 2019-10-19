<?php
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
namespace Config;

\BasicApp\Admin\AdminEvents::onRegisterAssets(function($event) {

    \BasicApp\TinyMceJs\Assets::register($event->head, $event->beginBody, $event->endBody);
    \BasicApp\CodeMirrorJs\Assets::register($event->head, $event->beginBody, $event->endBody);

});

\CodeIgniter\Events\Events::on('pre_system', function() {

    require dirname(__DIR__) . '/ThirdParty/bootstrap.php';

	while (ob_get_level() > 0)
	{
		ob_end_flush();
	}

	ob_start(function($buffer) {
		
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
		\CodeIgniter\Events\Events::on('DBQuery', 'CodeIgniter\Debug\Toolbar\Collectors\Database::collect');

		Services::toolbar()->respond();
	}
});
