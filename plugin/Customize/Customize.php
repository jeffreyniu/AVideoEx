<?php

global $global;
require_once $global['systemRootPath'] . 'plugin/Plugin.abstract.php';

class ExtraConfig extends PluginAbstract
{
    public function getTags()
    {
        return [
            PluginTags::$RECOMMENDED,
            PluginTags::$FREE,
            PluginTags::$MOBILE,
            PluginTags::$LAYOUT,

        ];
    }

    public function getDescription()
    {
        return "Customize configuration.";
    }

    public function getName()
    {
        return "Customize";
    }

    public function getUUID()
    {
        return "c4fe1b83-8f5a-4d1b-b912-172c608bf9e3";
    }

    public function getPluginVersion() {
        return "1.0";
    }
}

 ?>