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
        // 'image'       => [
        //     'title'  => 'картинка',
        //     'output' => '<img src="/uploads/images/webinars/(:value)" height="100" />',
        // ],
        'youtube_id'  => [
            'title' => 'youtube id',
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
        // 'image'       => [
        //     'title'    => 'картинка',
        //     'type'     => 'image',
        //     'location' => public_path() . '/uploads/images/webinars/',
        //     'sizes'    => array(
        //         array(270, 225, 'crop', public_path() . '/uploads/images/webinars/', 100),
        //     ),
        // ],
        'youtube_id'  => [
            'title' => 'youtube id',
            'type'  => 'text',
        ],
    ],
    'rules'       => [
        'name'        => 'required|string',
        'description' => 'required|string',
        'youtube_id'  => 'required|string',
    ],
    'filters'     => [
        'name' => [
            'title' => 'Название',
        ],
    ],
];
