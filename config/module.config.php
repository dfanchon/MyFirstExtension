<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Myextension\\Blocks\\Controller\\Myblock' => 'MyExtension\\Blocks\\Controller\\MyblockController'
        )
    ),
    'service_manager' => array(
        'invokables' => array(
            'Myservice' => 'Myextension\\Service\\Myservice',
        )
    ),
    'templates' => array(
        'namespaces' => array(
            'Myextension' => realpath(__DIR__ . '/../templates')
        ),
        'overrideThemes' => array(
            'default' => realpath(__DIR__ . '/../theme-override/default')
        )
    ),
    'blocksDefinition' => array(
        'myblock' => array(
            'controller' => 'Myextension\\Blocks\\Controller\\Myblock',
            'maxlifeTime' => 60,
            'definitionFile' => realpath(__DIR__ . "/blocks/") . '/myblock.json'
        )
    ),
);