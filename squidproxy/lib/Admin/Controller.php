<?php

namespace WHMCS\Module\Addon\Squidproxy\Admin;

class Controller {

    public function index($vars)
    {
        $modulelink = $vars['modulelink'];
        $version = $vars['version'];
        $LANG = $vars['_lang'];

        // Get module configuration parameters
        $configTextField = $vars['Text Field Name'];
        $configPasswordField = $vars['Password Field Name'];
        $configCheckboxField = $vars['Checkbox Field Name'];
        $configDropdownField = $vars['Dropdown Field Name'];
        $configRadioField = $vars['Radio Field Name'];
        $configTextareaField = $vars['Textarea Field Name'];

        return <<<EOF

<h2>Index</h2>

<p>This is the <em>index</em> action output of the Squid Proxy addon module.</p>

<p>The currently installed version is: <strong>{$version}</strong></p>

<p>Values of the configuration field are as follows:</p>

<blockquote>
    Text Field: {$configTextField}<br>
    Password Field: {$configPasswordField}<br>
    Checkbox Field: {$configCheckboxField}<br>
    Dropdown Field: {$configDropdownField}<br>
    Radio Field: {$configRadioField}<br>
    Textarea Field: {$configTextareaField}
</blockquote>

<p>
    <a href="{$modulelink}&action=show" class="btn btn-success">
        <i class="fa fa-check"></i>
        Visit valid action link
    </a>
    <a href="{$modulelink}&action=invalid" class="btn btn-default">
        <i class="fa fa-times"></i>
        Visit invalid action link
    </a>
</p>

EOF;
    }

    public function show($vars)
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

        return <<<EOF

<h2>Show</h2>

<p>This is the <em>show</em> action output of the Squid Proxy addon module.</p>

<p>The currently installed version is: <strong>{$version}</strong></p>

<p>
    <a href="{$modulelink}" class="btn btn-info">
        <i class="fa fa-arrow-left"></i>
        Back to home
    </a>
</p>

EOF;
    }
}