<?php

return [
    'title'       => 'Вебинары',
    'single'      => 'вебинар',
    'model'       => 'Multiversum\Webinar',
    'columns'     => [
        'name'        => [
            'title' => 'название',
        ],
        'description' => [
            'title' => 'описание',
        ],
        'image'       => [
            'title'  => 'картинка',
            'output' => '<img src="/uploads/images/webinars/(:value)" height="100" />',
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
            'location' => public_path() . '/uploads/images/webinars/',
            'sizes'    => array(
                array(270, 225, 'crop', public_path() . '/uploads/images/webinars/', 100),
            ),
        ],
    ],
    'rules'       => [
        'name'        => 'required',
        'description' => 'required',
        'youtube_id'  => 'required',
    ],
    'filters'     => [
        'name' => [
            'title' => 'Название',
        ],
    ],
];
