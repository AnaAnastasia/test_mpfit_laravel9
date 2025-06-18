Добавила докер для удобства локальной разработки. А для вашего удобства загрузила .env в гит.

Развернуть докер:

1) cd docker_s
2) docker-compose up -d
3) Зайти в контейнер: docker-compose exec php-fpm bash
4) В контейнере: composer install

Запустить миграции:

1) В контейнере запустить команды php artisan migrate и php artisan db:seed

Сайт доступен по адресу: http://localhost:92
