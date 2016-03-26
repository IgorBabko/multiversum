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
