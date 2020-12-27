<?php
namespace SmartyConfig\Common;

class SmartyConfig
{
    public static function configDir()
    {
        $dirArray = array(
            S_ROOT.'vendor/qixinyun/tongliao-portal-config/src/SmartyConfig/WLCB',
            S_ROOT.'vendor/qixinyun/tongliao-portal-config/src/SmartyConfig/Common',
            S_ROOT.'vendor/qixinyun/tongliao-portal-config/src/SmartyConfig/',
        );

        return $dirArray;
    }
}
