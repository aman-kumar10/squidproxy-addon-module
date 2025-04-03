<?php

use WHMCS\Database\Capsule;
use WHMCS\Module\Addon\Squidproxy\Admin\AdminDispatcher;
use WHMCS\Module\Addon\Squidproxy\Client\ClientDispatcher;

if (!defined("WHMCS")) {
    die("This file cannot be accessed directly");
}


function squidproxy_config()
{
    return [
        'name' => 'Squid Proxy',
        'description' => 'Squid Proxy Addon Module',
        'author' => 'WHMCS GLOBAL SERVICES',
        'language' => 'english',
        'version' => '1.0',
        'fields' => [
            'Text Field Name' => [
                'FriendlyName' => 'Text Field Name',
                'Type' => 'text',
                'Size' => '25',
                'Default' => 'Default value',
                'Description' => 'Description goes here',
            ],
            'Password Field Name' => [
                'FriendlyName' => 'Password Field Name',
                'Type' => 'password',
                'Size' => '25',
                'Default' => '',
                'Description' => 'Enter secret value here',
            ],
            'Checkbox Field Name' => [
                'FriendlyName' => 'Checkbox Field Name',
                'Type' => 'yesno',
                'Description' => 'Tick to enable',
            ],
            'Dropdown Field Name' => [
                'FriendlyName' => 'Dropdown Field Name',
                'Type' => 'dropdown',
                'Options' => [
                    'option1' => 'Display Value 1',
                    'option2' => 'Second Option',
                    'option3' => 'Another Option',
                ],
                'Default' => 'option2',
                'Description' => 'Choose one',
            ],
            'Radio Field Name' => [
                'FriendlyName' => 'Radio Field Name',
                'Type' => 'radio',
                'Options' => 'First Option,Second Option,Third Option',
                'Default' => 'Third Option',
                'Description' => 'Choose your option!',
            ],
            'Textarea Field Name' => [
                'FriendlyName' => 'Textarea Field Name',
                'Type' => 'textarea',
                'Rows' => '3',
                'Cols' => '60',
                'Default' => 'A default value goes here...',
                'Description' => 'Freeform multi-line text input field',
            ],
        ]
    ];
}


function squidproxy_activate()
{
    try {
        // 
        return [
            'status' => 'success',
            'description' => 'Squid Proxy addon module has been activated.',
        ];
    } catch (\Exception $e) {
        return [
            'status' => "error",
            'description' => 'Unable to activate the Squid Proxy addon module: ' . $e->getMessage(),
        ];
    }
}


function squidproxy_deactivate()
{
    try {
        // 
        return [
            'status' => 'success',
            'description' => 'Your Squid proxy addon module has been deactivated',
        ];
    } catch (\Exception $e) {
        return [
            "status" => "error",
            "description" => "Unable to deactivate the Squid Proxy addon module: {$e->getMessage()}",
        ];
    }
}


function squidproxy_output($vars)
{
    // 
    $action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';

    $dispatcher = new AdminDispatcher();
    $response = $dispatcher->dispatch($action, $vars);
    echo $response;
}
