<?php

return [
    'title'       => 'Страницы',
    'single'      => 'страница',
    'model'       => 'Multiversum\Page',
    'columns'     => [
        'name'    => [
            'title' => 'назвние',
        ],
        'heading' => [
            'title' => 'заголовок',
        ],
        'text'    => [
            'title' => 'контент',
        ],
    ],
    'edit_fields' => [
        'name'    => [
            'title' => 'название',
            'type'  => 'text',
        ],
        'heading' => [
            'title' => 'заголовок',
            'type'  => 'text',
        ],
        'text'    => [
            'title' => 'контент',
            'type'  => 'text',
        ],
    ],
    'rules'       => array(
        'name'    => 'string',
        'text'    => 'string',
        'heading' => 'string',
    ),
    'filters'     => [
        'name'    => [
            'title' => 'Название',
        ],
        'heading' => [
            'title' => 'Заголовок',
        ],
    ],
];
