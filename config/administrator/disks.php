<?php

return [
    'title'       => 'Диски',
    'single'      => 'диск',
    'model'       => 'Multiversum\Disk',
    'columns'     => [
        'name'        => [
            'title' => 'назвние',
        ],
        'thumbnail'   => [
            'title'  => 'миниатюра',
            'output' => '<img src="(:value)" height="100" />',
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
        'thumbnail'   => [
            'type'     => 'image',
            'location' => public_path() . '/',
        ],
        'price',
    ],
    'rules'       => array(
        'name'        => 'required',
        'description' => 'required',
        'thumbnail'   => 'required',
        'price'       => 'required',
    ),
    'filters'     => [
        'name' => [
            'title' => 'Название',
        ],
    ],
];
