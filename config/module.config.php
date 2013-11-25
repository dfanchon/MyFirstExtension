<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'MyExtension\\Blocks\\Controller\\MyBlock' => 'MyExtension\\Blocks\\Controller\\MyBlockController'
        )
    ),
    'service_manager' => array(
        'invokables' => array(
            'MyService' => 'MyExtension\\Service\\MyService',
        )
    ),
    'templates' => array(
        'namespaces' => array(
            'MyExtension' => realpath(__DIR__ . '/../templates')
        ),
        'overrideThemes' => array(
            'default' => realpath(__DIR__ . '/../theme/default')
        )
    ),
    'blocksDefinition' => array(
        'myblockname' => array(
            'controller' => 'MyExtension\\Blocks\\Controller\\MyBlockName',
            'maxlifeTime' => 60,
            'definitionFile' => realpath(__DIR__ . "/blocks/") . '/myblockname.json'
        )
    ),
);