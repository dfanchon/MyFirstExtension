<?php
return array(
        
    /**
     * Your controllers
     */
    'controllers' => array(
        'invokables' => array(
            'Myextension\\Blocks\\Controller\\Myblock' => 'Myextension\\Blocks\\Controller\\MyblockController'
        )
    ),
        
    /**
     * Your services
     */
    'service_manager' => array(
        'invokables' => array(
            'Myservice' => 'Myextension\\Service\\Myservice',
        )
    ),
        
    /**
     * Your template namespace and theme override
     */
    'templates' => array(
        'namespaces' => array(
            'Myextension' => realpath(__DIR__ . '/../templates')
        ),
        'overrideThemes' => array(
            'default' => realpath(__DIR__ . '/../theme/default')
        )
    ),
        
    /**
     * Your block definition : controller and back-office json configuration file
     */
    'blocksDefinition' => array(
        'myblock' => array(
            'controller' => 'Myextension\\Blocks\\Controller\\Myblock',
            'maxlifeTime' => 60,
            'definitionFile' => realpath(__DIR__ . "/blocks/") . '/myblock.json'
        )
    )
        
);