<?php

return [
    'title'       => 'Категории',
    'single'      => 'категория',
    'model'       => 'Multiversum\Category',
    'columns'     => [
        'name' => [
            'title' => 'название',
        ],
    ],
    'edit_fields' => [
        'name' => [
            'title' => 'название',
            'type'  => 'text',
        ],
    ],
    'rules'       => array(
        'name' => 'required|string',
    ),
    'filters'     => [
        'name' => [
            'title' => 'Название',
        ],
    ],
];
