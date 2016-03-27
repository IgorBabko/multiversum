<?php

return [
    'title'       => 'Книги',
    'single'      => 'книга',
    'model'       => 'Multiversum\Book',
    'columns'     => [
        'name'        => [
            'title' => 'назвние',
        ],
        'image'       => [
            'title'  => 'картинка',
            'output' => '<img src="/uploads/images/books/(:value)" height="100" />',
        ],
        'description' => [
            'title' => 'описание',
        ],
        'price'       => [
            'title' => 'цена',
        ],
    ],
    'edit_fields' => [
        'name'        => [
            'title' => 'название',
            'type'  => 'text',
        ],
        'description' => [
            'title' => 'описание',
            'type'  => 'text',
        ],
        'image'       => [
            'title'    => 'картинка',
            'type'     => 'image',
            'location' => public_path() . '/uploads/images/books/',
            'sizes'    => array(
                array(220, 225, 'crop', public_path() . '/uploads/images/books/', 100),
            ),
        ],
        'price'       => [
            'title' => 'цена',
            'type'  => 'number',
        ],
    ],
    'rules'       => array(
        'name'        => 'required|string',
        'description' => 'required|string',
        'image'       => 'required',
        'price'       => 'required|numeric',
    ),
    'filters'     => [
        'name' => [
            'title' => 'Название',
        ],
    ],
];
