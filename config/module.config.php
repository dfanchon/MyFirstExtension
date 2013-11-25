<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Myextension\\Blocks\\Controller\\MyblockName' => 'MyExtension\\Blocks\\Controller\\MyblockController'
        )
    ),
    'service_manager' => array(
        'invokables' => array(
            'Myservice' => 'MyExtension\\Service\\Myservice',
        )
    ),
    'templates' => array(
        'namespaces' => array(
            'Myextension' => realpath(__DIR__ . '/../templates')
        ),
        'overrideThemes' => array(
            'default' => realpath(__DIR__ . '/../theme/default')
        )
    ),
    'blocksDefinition' => array(
        'myblockname' => array(
            'controller' => 'MyExtension\\Blocks\\Controller\\Myblock',
            'maxlifeTime' => 60,
            'definitionFile' => realpath(__DIR__ . "/blocks/") . '/myblockname.json'
        )
    ),
);