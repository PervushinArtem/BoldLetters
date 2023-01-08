# ТЕСТОВОЕ ЗАДАНИЕ

:white_check_mark: Создать модуль, который содержит метод getUserNameVowels(<ID пользователя>), возвращающий все глассные буквы из `NAME`, `LAST_NAME`, `SECOND_NAME` пользователя в нижнем регистре без пробелов с соответствующим параметру <ID пользователя>.
```
Для демонстрации работоспособности модуля я использовал:
- Украинский алфавит
- Русский алфавит
- Английский алфавит
```

## Mодуль должен возвращать результат данного метода:

:white_check_mark: через REST endpoint вида `<domain>/rest/<id>/<token>/get.username.vowels` 
```
требований для использования <token> в коде не было, по этому он чисто что бы был в url. На сервере токен храним лишь в захешированном виде. Сравниваем хеши
```

:white_check_mark: через стандартный внутренний сервис, доступный в BX.ajax.runAction('<описание  сервиса>.getUserNameVowels')
```
BX.ajax.runAction('bold:letters.api.ajax.getUserNameVowels', {data:{id: 1}});
```

:white_check_mark: Результат теста выложить на GITHub  и выслать ссылку

# ПЕРЕД проверкой REST необходимо выполнить это

:black_square_button: Доступно в модуле main начиная с версии 21.400.0

:black_square_button: Для запуска новой системы роутинга нужно перенаправить обработку 404 ошибок на файл routing_index.php в файле .htaccess

```
#RewriteCond %{REQUEST_FILENAME} !/bitrix/urlrewrite.php$
#RewriteRule ^(.*)$ /bitrix/urlrewrite.php [L]

RewriteCond %{REQUEST_FILENAME} !/bitrix/routing_index.php$
RewriteRule ^(.*)$ /bitrix/routing_index.php [L]
```

:black_square_button: Файлы с конфигурацией маршрутов располагаются в папках /bitrix/routes/ и /local/routes/. Для подключения файла следует описать его в файле .settings.php в секции routing

```
'routing' => ['value' => [
  'config' => ['web.php', 'api.php']
]], 

// подключатся файлы:
// /bitrix/routes/web.php, /local/routes/web.php,  
// /bitrix/routes/api.php, /local/routes/api.php
```
