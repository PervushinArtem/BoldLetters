<?php

use \Bitrix\Main\Localization\Loc;

class bold_letters extends CModule
{
    var $MODULE_ID = "bold.letters";
    var $MODULE_VERSION;
    var $MODULE_VERSION_DATE;
    var $MODULE_NAME;
    var $MODULE_DESCRIPTION;

    function __construct()
    {
        $arModuleVersion = [];

        $path = str_replace("\\", "/", __FILE__);
        $path = substr($path, 0, strlen($path) - strlen("/index.php"));
        include($path . "/version.php");

        if (is_array($arModuleVersion) && array_key_exists("VERSION", $arModuleVersion)) {
            $this->MODULE_VERSION = $arModuleVersion["VERSION"];
            $this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
        }

        $this->MODULE_NAME = $this->MODULE_ID.Loc::GetMessage("NAME");
        $this->MODULE_DESCRIPTION = Loc::GetMessage("MODULE_DESCRIPTION");
    }

    function DoInstall()
    {
        global $DOCUMENT_ROOT, $APPLICATION;
        RegisterModule($this->MODULE_ID);
        $APPLICATION->IncludeAdminFile(Loc::GetMessage("INSTALL").$this->MODULE_ID, $DOCUMENT_ROOT . "/local/modules/$this->MODULE_ID/install/step.php");
    }

    function DoUninstall()
    {
        global $DOCUMENT_ROOT, $APPLICATION;
        UnRegisterModule($this->MODULE_ID);
        $APPLICATION->IncludeAdminFile(Loc::GetMessage("UNINSTALL").$this->MODULE_ID, $DOCUMENT_ROOT . "/local/modules/$this->MODULE_ID/install/unstep.php");
    }
}
