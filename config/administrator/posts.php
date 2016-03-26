<?php

return [
    'title'       => 'Статьи',
    'single'      => 'статья',
    'model'       => 'Multiversum\Post',
    'columns'     => [
        'name'      => [
            'title' => 'название',
        ],
        'thumbnail' => [
            'title'  => 'миниатюра',
            'output' => '<img src="(:value)" height="100" />',
        ],
        'image'     => [
            'title'  => 'картинка',
            'output' => '<img src="(:value)" height="100" />',
        ],
        'content'   => [
            'title' => 'текст',
        ],
    ],
    'edit_fields' => [
        'name'      => [
            'type' => 'text',
        ],
        'content'   => [
            'type' => 'text',
        ],
        'image'     => [
            'type'     => 'image',
            'location' => public_path() . '/',
        ],
        'thumbnail' => [
            'type'     => 'image',
            'location' => public_path() . '/',
        ],
    ],
    'rules'       => array(
        'name'      => 'required',
        'thumbnail' => 'required',
        'image'     => 'required',
        'content'   => 'required',
    ),
    'filters'     => [
        'name' => [
            'title' => 'Название',
        ],
    ],
];
