<?php

return [
    'title'       => 'Статьи',
    'single'      => 'статья',
    'model'       => 'Multiversum\Post',
    'columns'     => [
        'category_id' => [
            'title' => 'id категории',
        ],
        'name'        => [
            'title' => 'название',
        ],
        'image'       => [
            'title'  => 'картинка',
            'output' => '<img src="/uploads/images/posts/large/(:value)" height="100" />',
        ],
        'content'     => [
            'title' => 'текст',
        ],
    ],
    'edit_fields' => [
        'category_id' => [
            'title' => 'id категории',
            'type'  => 'number',
        ],
        'name'        => [
            'title' => 'название',
            'type'  => 'text',
        ],
        'content'     => [
            'title' => 'контент',
            'type'  => 'text',
        ],
        'image'       => [
            'title'    => 'картинка',
            'type'     => 'image',
            'location' => public_path() . '/uploads/images/posts/large/',
            'sizes'    => array(
                array(300, 225, 'crop', public_path() . '/uploads/images/posts/small/', 100),
            ),
        ],
    ],
    'rules'       => array(
        'name'    => 'required|string',
        'image'   => 'required',
        'content' => 'required|string',
    ),
    'filters'     => [
        'name' => [
            'title' => 'Название',
        ],
    ],
];
