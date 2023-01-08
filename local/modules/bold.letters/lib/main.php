<?php

namespace BoldLetters;

use Bitrix\Main\Loader;
use Bitrix\Main\UserTable;

class Main
{
    const GRACEFUL = ['а', 'е', 'є', 'и', 'і', 'ї', 'о', 'у', 'ю', 'я', 'а', 'е', 'ё', 'и', 'о', 'у', 'ы', 'э', 'ю', 'я', 'a', 'e', 'y', 'u', 'i', 'o'];

    public static function getUserNameVowels(int $id): string
    {
        Loader::includeModule("iblock");
        Loader::includeModule("main");

        $result = '';

        $user = UserTable::getList([
            'filter' => [
                '=ID' => $id,
            ],
            'limit' => 1,
            'select' => array('NAME', 'LAST_NAME', 'SECOND_NAME'),
        ])->fetch();

        foreach ($user as $val) {
            $val = str_replace(' ', '', $val);
            $val = ToLower($val);
            $len = iconv_strlen($val, 'utf-8');
            for ($i = 0; $i < $len; $i++) {
                $s = mb_substr($val, $i, 1, 'utf-8');
                if (in_array($s, self::GRACEFUL)) {
                    $result .= $s;
                }
            }
        }

        return $result;
    }
}
