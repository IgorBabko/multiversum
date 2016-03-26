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
            'type' => 'text',
        ],
        'description' => [
            'type' => 'text',
        ],
        'image'       => [
            'type'     => 'image',
            'location' => public_path() . '/uploads/images/disks/',
            'sizes'    => array(
                array(270, 225, 'crop', public_path() . '/uploads/images/disks/', 100),
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
