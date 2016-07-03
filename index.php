<?php

use Pagekit\Application;

// packages/pagekit/todo/index.php

return [

    'name' => 'modulemaker',

    'type' => 'extension',

    // called when Pagekit initializes the module
    'main' => function (Application $app) {
        //echo "It's alive";
    },

    'autoload' => [
        'Osa\\ModuleMaker\\' => 'src'
    ],

    'resources' => [
        'modulemaker:' => ''
    ],

    'config' => [
        'entries' => [
            // ['question' => 'A', 'done' => false],
            // ['question' => 'B', 'done' => false],
            // ['question' => 'C', 'done' => true]
        ]
    ],

    'routes' => [

        '/modulemaker' => [
            'name' => '@modulemaker',
            'controller' => [
                'Osa\\ModuleMaker\\Controller\\ModuleMakerController'
            ]
        ]
    ],

    'menu' => [
        'modulemaker' => [
            'label' => 'ModuleMaker',
            'url' => '@modulemaker',
            'icon' => 'app/system/assets/images/placeholder-icon.svg'
        ],

        'modulemaker: categories' => [
			'label' => 'Rubriken',
			'parent' => 'modulemaker',
			'url' => '@modulemaker',
			'access' => 'modulemaker: manage forms',
			'active' => '@modulemaker(/edit)?'
		],
    ],
];
