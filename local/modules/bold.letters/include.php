<?php

use \Bitrix\Main\Loader;

Loader::registerAutoloadClasses(
    'bold.letters',
    array(
        'BoldLetters\\Main' => 'lib/main.php',
        'BoldLetters\\Controller\\Ajax' => 'lib/controller/ajax.php',
    )
);
