<?php
return array(
    'controllers' => array(
        'invokables' => array(
            'Rubedo\\Blocks\\Controller\\MyBlockName' => 'MyExtension\\Blocks\\Controller\\MyBlockController'
        )
    ),
    'service_manager' => array(
        'invokables' => array(
            'MyService' => 'Hosting\\Service\\MyService',
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
        'redirector' => array(
            'controller' => 'Hosting\\Blocks\\Controller\\MyBlockName',
            'maxlifeTime' => 60,
            'definitionFile' => realpath(__DIR__ . "/blocks/") . '/myblockname.json'
        )
    ),
);