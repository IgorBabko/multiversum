<?php

return [
    'title'       => 'Теги',
    'single'      => 'тег',
    'model'       => 'Multiversum\Tag',
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
