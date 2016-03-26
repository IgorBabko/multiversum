<?php

return [
    'title'       => 'Статьи',
    'single'      => 'статья',
    'model'       => 'Multiversum\Post',
    'columns'     => [
        'name'    => [
            'title' => 'название',
        ],
        'image'   => [
            'title'  => 'картинка',
            'output' => '<img src="/uploads/images/posts/large/(:value)" height="100" />',
        ],
        'content' => [
            'title' => 'текст',
        ],
    ],
    'edit_fields' => [
        'name'    => [
            'type' => 'text',
        ],
        'content' => [
            'type' => 'text',
        ],
        'image'   => [
            'type'     => 'image',
            'location' => public_path() . '/uploads/images/posts/large/',
            'sizes'    => array(
                array(300, 225, 'crop', public_path() . '/uploads/images/posts/small/', 100),
            ),
        ],
    ],
    'rules'       => array(
        'name'    => 'required',
        'image'   => 'required',
        'content' => 'required',
    ),
    'filters'     => [
        'name' => [
            'title' => 'Название',
        ],
    ],
];
