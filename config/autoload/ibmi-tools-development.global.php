<?php
return [
    'service_manager' => [
        'factories' => [
            'IbmiTools\\ToolkitInstance\\Default' => 'IbmiTools\\ToolkitInstance\\FakeToolInstanceFactory',
        ],
    ],
    'ibmi-tools'      => [
    ],
];