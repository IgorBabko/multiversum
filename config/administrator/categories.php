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
            'type' => 'text',
        ],
    ],
    'rules'       => array(
        'name' => 'required',
    ),
    'filters'     => [
        'name' => [
            'title' => 'Название',
        ],
    ],
];
