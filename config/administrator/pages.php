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
        'image'   => [
            'title'  => 'картинка',
            'output' => '<img src="/uploads/images/pages/(:value)" height="100" />',
        ],
    ],
    'edit_fields' => [
        'name'       => [
            'title' => 'название',
            'type'  => 'text',
        ],
        'heading'    => [
            'title' => 'заголовок',
            'type'  => 'text',
        ],
        'text'       => [
            'title' => 'контент',
            'type'  => 'text',
        ],
        'youtube_id' => [
            'title' => 'youtube id',
            'type'  => 'text',
        ],
        'image'      => [
            'title'    => 'картинка',
            'type'     => 'image',
            'location' => public_path() . '/uploads/images/pages/',
            'sizes'    => array(
                array(225, 225, 'crop', public_path() . '/uploads/images/pages/', 100),
            ),
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
