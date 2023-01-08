<?php

use \Bitrix\Main\Loader;

Loader::registerAutoloadClasses(
    'bold.letters',
    array(
        'BoldLetters\\main' => 'lib/main.php',
        'BoldLetters\Controller\ajax' => 'lib/controller/ajax.php',
    )
);
