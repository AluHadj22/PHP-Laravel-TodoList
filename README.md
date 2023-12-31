# PHP-Laravel-TodoList
# Описание приложения 
https://disk.yandex.com.am/i/H9AsCS9dS2WM_Q


Это приложение разработано с использованием фреймворка Laravel и фронтенд-фреймворка Bootstrap. Оно представляет собой простое веб-приложение для управления списком задач.

## Функциональность

Приложение предоставляет следующую функциональность:

- Просмотр списка задач со статусами выполнения.
- Создание новых задач.
- Отметка задачи как выполненной.
- Удаление задачи.

## Технологии

Приложение разработано с использованием следующих технологий:

- **Laravel** - мощный фреймворк для разработки веб-приложений на PHP. Он обладает широким функционалом, включая маршрутизацию, ORM, миграции и многое другое, что делает разработку эффективной и удобной.
- **Bootstrap** - популярный фронтенд-фреймворк, предоставляющий набор готовых компонентов и стилей для создания современного и отзывчивого интерфейса.

## Запуск приложения

Для запуска этого приложения вам понадобятся следующие предварительные установки:

- Установите PHP и настройте его на вашей операционной системе.
- Установите Composer, менеджер зависимостей для PHP.
- Установите и настройте базу данных (например, MySQL).

После установки вы можете выполнять следующие шаги:

1. Скачайте или клонируйте репозиторий с приложением.
2. Откройте командную строку в корневой папке приложения.
3. Установите зависимости, выполнив команду `composer install`.
4. Скопируйте файл `.env.example` в `.env` и настройте параметры вашей базы данных.
5. Сгенерируйте ключ приложения, выполнив команду `php artisan key:generate`.
6. Выполните миграции, выполните команду `php artisan migrate`.
7. Запустите веб-сервер командой `php artisan serve`.
8. Откройте браузер и перейдите по адресу `http://localhost:8000`, чтобы увидеть приложение в действии.
