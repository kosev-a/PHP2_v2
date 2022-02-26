<?php

/* Начало курсового проекта
Нашим курсовым проектом будет API для коллективного блога типа «Хабрахабра». У нас не
будет никакого фронтенда — по HTTP приложение будет отдавать только JSON-ответы. В
приложении будут пользователи. Пользователи смогут писать статьи и комментарии.

1. Создайте репозиторий с проектом на GitHub.

2. Создайте простые классы:
● для пользователей: id, имя, фамилия;
● статей: id, id автора, заголовок, текст;
● комментариев: id, id автора, id статьи, текст.

3. Инициализируйте в проекте composer и настройте автозагрузку PSR-4, код классов
положите в папку src.

4. Подключите к проекту пакет fakerphp/faker.

5. Создайте в корневой папке проекта файл cli.php — это будет точка входа в наше пока
что только консольное приложение.

6. Реализуете логику:
a. При запуске с аргументом user приложение создаёт объект пользователя с
именем и фамилией, сгенерированными библиотекой fakerphp/faker, и
печатает его строковое представление в консоль. Используете
предопределённую переменную $argv для получения аргументов командной
строки. Определите метод __toString в классе пользователя.
b. Повторите это для статей (агрумент post) и комментариев (comment).
c. Примеры работы приложения:
➜ blog git:(master) php cli.php user
Ivan Nikitin
➜ blog git:(master) php cli.php post
Quod ut earum incidunt quas aut. >>> Rerum similique est saepe architecto eum.
Et placeat totam sit.
➜ blog git:(master) php cli.php comment
Officia voluptatum magni ut debitis

*/