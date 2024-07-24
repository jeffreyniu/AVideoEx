<?php

global $global;
require_once $global['systemRootPath'] . 'plugin/Plugin.abstract.php';

$sql = "INSERT INTO `plugins` VALUES (NULL, 'c4fe1b83-8f5a-4d1b-b912-172c608bf9e3', 'active', now(), now(), '".json_encode($object_data)."', 'JEFNIU_Customize', 'JEFNIU_Customize', '1.0');";
try {
    $mysqli->query($sql);
} catch (Exception $exc) {
    error_log("Installation: ".__LINE__." Error creating JEFNIU_Customize plugin data: " . $mysqli->error);
}
$mysqli->close();

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

    public function getAbout()
    {
        return "It is implemented by Jeffrey, email is niutianbo@hotmail.com.";
    }

    public function getName()
    {
        return "JEFNIU_Customize";
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