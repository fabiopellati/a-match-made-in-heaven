<?php
return [
    'service_manager' => [
        'factories' => [
            'IbmiTools\\ToolkitInstance\\Default' => 'IbmiTools\\ToolkitInstance\\FakeToolkitInstanceFactory',
        ],
    ],
    'ibmi-tools'      => [
    ],
];