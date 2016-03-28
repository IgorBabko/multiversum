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
        'image'   => [
            'title'  => 'картинка',
            'output' => '<img src="/uploads/images/pages/(:value)" height="100" />',
        ],
        'text'    => [
            'title' => 'контент',
        ],
    ],
    'edit_fields' => [
        'name'    => [
            'title' => 'назвние',
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
        'image'   => [
            'title'    => 'картинка',
            'type'     => 'image',
            'location' => public_path() . '/uploads/images/pages/',
            'sizes'    => array(
                array(700, 700, 'crop', public_path() . '/uploads/images/pages/', 100),
            ),
        ],
    ],
    'rules'       => array(
        'name'        => 'required|string',
        'description' => 'required|string',
        'heading'     => 'required|string',
        'image'       => 'required',
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
