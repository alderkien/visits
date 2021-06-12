## Описание

    тестовый

## Использованное ПО

    PHP 8.0.3
    MySQL 8
    NodeJS 15

## Установка

```sh
git clone https://github.com/alderkien/visits.git .
php -r "readfile('https://getcomposer.org/installer');" | php
./composer.phar install
cp .env.example .env
php artisan db:seed (если вы хотите добавить тестовые данные)
npm run dev
```
