<?php

return [
    'title'       => 'Теги',
    'single'      => 'тег',
    'model'       => 'Multiversum\Tag',
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
