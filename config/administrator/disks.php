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
            'title'  => 'миниатюра',
            'output' => '<img src="/uploads/images/disks/small/(:value)" height="100" />',
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
            'location' => public_path() . '/uploads/images/disks/large/',
            'sizes'    => array(
                array(300, 225, 'crop', public_path() . '/uploads/images/disks/small/', 100),
            ),
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
