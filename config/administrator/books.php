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
            'type' => 'text',
        ],
        'description' => [
            'type' => 'text',
        ],
        'image'       => [
            'type'     => 'image',
            'location' => public_path() . '/uploads/images/books/',
            'sizes'    => array(
                array(220, 225, 'crop', public_path() . '/uploads/images/books/', 100),
            ),
        ],
        'price',
    ],
    'rules'       => array(
        'name'        => 'required',
        'description' => 'required',
        'image'       => 'required',
        'price'       => 'required',
    ),
    'filters'     => [
        'name' => [
            'title' => 'Название',
        ],
    ],
];
