<?php

global $global;
require_once $global['systemRootPath'] . 'plugin/Plugin.abstract.php';

class ExtraConfig extends PluginAbstract
{
    public function getTags()
    {
        return [
            PluginTags::$FREE,
            PluginTags::$MOBILE,
        ];
    }

    public function getDescription()
    {
        return "Customize configuration.";
    }

    public function getAbout()
    {
        return "It is implemented by Jeffrey, email is niutianbo@hotmail.com.";
    }

    public function getName()
    {
        return "Customize";
    }

    public function getUUID()
    {
        return "c4fe1b83-8f5a-4d1b-b912-172c608bf9e3";
    }

    public function getFooter()
    {
        return "<br> 备案/许可证编号：<a class=\"beian\" href=\"https://beian.miit.gov.cn/#/Integrated/index\">沪ICP备17026684-2号</a>";
    }
}

 ?>