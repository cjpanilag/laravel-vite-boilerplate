<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

<div align="center">
    <h3>Laravel Vite Boilerplate</h3>
</div>

## Setup

create .env file

```bash
cp .env.example .env
```

running sail

```bash
./vendor/bin/sail up -d
```

or running the pre-defined bash command

```bash
./up
```

check for container services running

```bash
docker ps
```

sample output

```bash
CONTAINER ID   IMAGE                           COMMAND                  CREATED          STATUS                    PORTS                                                  NAMES
4c8a92671f6e   adminer                         "entrypoint.sh php -…"   15 minutes ago   Up 15 minutes             0.0.0.0:8082->8080/tcp                                 vite-laravel-boilerplate-adminer-1
a068785c4ba4   sail-8.2/app                    "start-container"        20 hours ago     Up 15 minutes             0.0.0.0:80->80/tcp, 0.0.0.0:5173->5173/tcp, 8000/tcp   vite-laravel-boilerplate-laravel.test-1
e759b2b26bdb   seleniarm/standalone-chromium   "/opt/bin/entry_poin…"   20 hours ago     Up 15 minutes             4444/tcp, 5900/tcp                                     vite-laravel-boilerplate-selenium-1
4f849f90fd57   redis:alpine                    "docker-entrypoint.s…"   20 hours ago     Up 15 minutes (healthy)   0.0.0.0:6379->6379/tcp                                 vite-laravel-boilerplate-redis-1
ded1902eca43   mysql/mysql-server:8.0          "/entrypoint.sh mysq…"   20 hours ago     Up 15 minutes (healthy)   0.0.0.0:3306->3306/tcp, 33060-33061/tcp                vite-laravel-boilerplate-mysql-1
5a2ccf67a1ab   getmeili/meilisearch:latest     "tini -- /bin/sh -c …"   20 hours ago     Up 15 minutes (healthy)   0.0.0.0:7700->7700/tcp                                 vite-laravel-boilerplate-meilisearch-1
79eb82fe28e7   axllent/mailpit:latest          "/mailpit"               20 hours ago     Up 15 minutes             0.0.0.0:1025->1025/tcp, 0.0.0.0:8025->8025/tcp         vite-laravel-boilerplate-mailpit-
```

## Working with container

bash inside container

```bash
docker exec -it vite-laravel-boilerplate-adminer-1 /bin/bash
```

```bash
composer install
```

run artisan migrate

```bash
php artisan migrate --seed
```

run passport

```bash
php artisan passport:install
```

## Working with Vite

note: make sure you run vite inside the container

```bash
npm install
```

```bash
npm run dev
```

or build for production

```bash
npm run build
```

## Services

visit http://localhost

visit adminer http://localhost:8082

visit the API documentation http://localhost/docs/api
