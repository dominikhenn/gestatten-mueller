<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/srv/grav/user/config/site.yaml',
    'modified' => 1565118131,
    'data' => [
        'title' => 'Müller Rockt',
        'default_lang' => 'de',
        'author' => [
            'name' => 'Michael Müller',
            'email' => 'dominik.henn@intradesys.com'
        ],
        'taxonomies' => [
            0 => 'category',
            1 => 'tag'
        ],
        'metadata' => [
            'description' => 'Michael Müller und seine fantastische Liveband'
        ],
        'summary' => [
            'enabled' => true,
            'format' => 'short',
            'size' => 300,
            'delimiter' => '==='
        ],
        'blog' => [
            'route' => '/blog'
        ]
    ]
];
