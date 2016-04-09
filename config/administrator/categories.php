<?php

return [
    'title'       => 'Категории',
    'single'      => 'категория',
    'model'       => 'Multiversum\Category',
    'columns'     => [
        'id'   => [
            'title' => 'id',
        ],
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
