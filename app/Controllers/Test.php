<?php

namespace App\Controllers;

class Test extends \CodeIgniter\Controller
{

    public function index()
    {
        $table = new \PhpTheme\Html\Table;

        $table->headerColumns = [
            'xxx 123',
            'xxx 222',
            'xxx 123'
        ];


        /*

        $footer = new \PhpTheme\Html\TableFooter($table);

        $body = new \PhpTheme\Html\TableBody($table);

        $header = new \PhpTheme\Html\TableHeader($table);

        $footer->renderEmpty = true;;

        $footer->rows = [
            [
                'columns' => [
                    '1 col',
                    '2 col',
                    '3 col'
                ]
            ]
        ];

        $header->rows = [
            [
                'columns' => [
                    'header 1',
                    'header 2',
                    'header 3'
                ]
            ]
        ];

        $body->rows = [
            [
                'columns' => [
                    'col 1',
                    'col 2',
                    'col 3'
                ]
            ]
        ];

        $footer = $footer->render();

        $header = $header->render();

        $body = $body->render();

        */

        $table = $table->render();

        echo '<textarea style="width: 100%; height: 100%;">';

        //echo $header;

        //echo $body;

        //echo $footer;

        echo $table;

        echo '</textarea>';

    }

}