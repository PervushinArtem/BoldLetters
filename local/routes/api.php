<?php

use Bitrix\Main\Routing\RoutingConfigurator;
use BoldLetters\main;
use Bitrix\Main\Loader;

Loader::includeModule("bold.letters");

return function (RoutingConfigurator $routes) {
    $routes->get('/rest/{id}/{token}/get.username.vowels', function (int $id, $token) {
        return main::getUserNameVowels($id);
    });
};
