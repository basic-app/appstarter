<?php

$theme = service('theme');

BasicApp\TinyMceJs\Assets::register($theme->head, $theme->beginBody, $theme->endBody);
BasicApp\CodeMirrorJs\Assets::register($theme->head, $theme->beginBody, $theme->endBody);

$buttons = [];

foreach(menu_items('social', true, ['menu_name' => 'Social Buttons']) as $item)
{
    $buttons[] = [
        'icon' => $item['icon'],
        'url' => $item['url'],
        'options' => [
            'title' => $item['label']
        ]
    ];
}

echo $theme->mainLayout([
	'title' => isset($this->data['title']) ? $this->data['title'] : null,
	'header' => [
		'title' => block('layout_title', 'Basic App'),
		'description' => block('layout_description', 'Based on CodeIgniter 4'),
        //'image' => 
	],
	'navigation' => [
		'title' => block('layout_navigation_title', 'Demo App'),
		'items' => menu_items('main', true, ['menu_name' => 'Main Menu'])
	],
	'content' => $content,
	'footer' => [
		'copyright' => block('layout_copyright', 'Copyright &copy; <a href="{url}">{name}</a> {fromYear} - {year}', [
            '{url}' => base_url(),
            '{name}' => 'My Company',
            '{year}' => date('Y'),
            '{fromYear}' => '2018'
        ]),
		'buttons' => $buttons
	]
]);