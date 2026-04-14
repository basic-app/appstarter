<?php 

helper(['url', 'menu', 'block']);

echo view_cell('Site::layout', [
	'scripts' => $this->renderSection('scripts'),
	'styles' => $this->renderSection('styles'),
	'title' => $title ?? null,
	'keywords' => $keywords ?? null,
	'description' => $description ?? null,
	'locale' => service('request')->getLocale(),
	'content' => $this->renderSection('content'),
	'header' => [
		'title' => block('layout.headerTitle', 'My Site Default Title'),
		'description' => block('layout.headerDescription', 'My Site Default Title')
	],
	'nav' => [
		'title' => block('layout.navTitle', 'My Site'),
		'baseUrl' => base_url('/'),
		'menu' => [
            'activeItem' => $navMenuActiveItem ?? null,
            'items' => menu('nav')
        ]
	],
    'footer' => [
        'copyright' => block('layout.footerCopyright', '&copy; My Company {year}'),
        'menu' => [
            'items' => menu('footer')
        ]
    ]
]);
