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
        ], 'youtube_id' => [
            'title' => 'youtube id',
        ],
    ],
    'edit_fields' => [
        'name'        => [
            'type' => 'text',
        ],
        'description' => [
            'type' => 'text',
        ],
        'youtube_id'  => [
            'type' => 'text',
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
