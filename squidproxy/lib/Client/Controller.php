<?php

namespace WHMCS\Module\Addon\Squidproxy\Client;

class Controller {

    
    public function index($vars)
    {
        $modulelink = $vars['modulelink'];
        $version = $vars['version'];
        $LANG = $vars['_lang'];

        $configTextField = $vars['Text Field Name'];
        $configPasswordField = $vars['Password Field Name'];
        $configCheckboxField = $vars['Checkbox Field Name'];
        $configDropdownField = $vars['Dropdown Field Name'];
        $configRadioField = $vars['Radio Field Name'];
        $configTextareaField = $vars['Textarea Field Name'];

        return array(
            'pagetitle' => 'Squid Proxy Addon Module',
            'breadcrumb' => array(
                'index.php?m=Squidproxy' => 'Squid Proxy Addon Module',
            ),
            'templatefile' => 'publicpage',
            'requirelogin' => false,
            'forcessl' => false,
            'vars' => array(
                'modulelink' => $modulelink,
                'configTextField' => $configTextField,
                'customVariable' => 'your own content goes here',
            ),
        );
    }


    public function secret($vars)
    {
        $modulelink = $vars['modulelink'];
        $version = $vars['version'];
        $LANG = $vars['_lang'];

        $configTextField = $vars['Text Field Name'];
        $configPasswordField = $vars['Password Field Name'];
        $configCheckboxField = $vars['Checkbox Field Name'];
        $configDropdownField = $vars['Dropdown Field Name'];
        $configRadioField = $vars['Radio Field Name'];
        $configTextareaField = $vars['Textarea Field Name'];

        return array(
            'pagetitle' => 'Squid Proxy Addon Module',
            'breadcrumb' => array(
                'index.php?m=Squidproxy' => 'Squid Proxy Addon Module',
                'index.php?m=Squidproxy&action=secret' => 'Secret Page',
            ),
            'templatefile' => 'secretpage',
            'requirelogin' => true,
            'forcessl' => false,
            'vars' => array(
                'modulelink' => $modulelink,
                'configTextField' => $configTextField,
                'customVariable' => 'your own content goes here',
            ),
        );
    }
}