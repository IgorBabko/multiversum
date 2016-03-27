<?php

return [
    'title'       => 'Диски',
    'single'      => 'диск',
    'model'       => 'Multiversum\Disk',
    'columns'     => [
        'name'        => [
            'title' => 'назвние',
        ],
        'image'       => [
            'title'  => 'картинка',
            'output' => '<img src="/uploads/images/disks/(:value)" height="100" />',
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
            'title' => 'назвние',
            'type'  => 'text',
        ],
        'description' => [
            'title' => 'описание',
            'type'  => 'text',
        ],
        'image'       => [
            'title'    => 'картинка',
            'type'     => 'image',
            'location' => public_path() . '/uploads/images/disks/',
            'sizes'    => array(
                array(270, 225, 'crop', public_path() . '/uploads/images/disks/', 100),
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
