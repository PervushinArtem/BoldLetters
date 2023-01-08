<?php

namespace BoldLetters\Controller;

use Bitrix\Main\Engine\Controller;
use BoldLetters\main;
use Bitrix\Main\Application;

class Ajax extends Controller
{
    public function getUserNameVowelsAction(): string
    {
        $request = Application::getInstance()->getContext()->getRequest();
        return Main::getUserNameVowels($request->get("id"));
    }
}
