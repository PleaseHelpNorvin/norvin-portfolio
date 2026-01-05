$ npm install -D tailwindcss@3.4.19
$ npm init -y
$ npx tailwindcss init
$ npx tailwindcss -i ./resources/css/app.css -o ./public/css/app.css --minify

docker

after  docker-compose up -d

docker exec -it laravel_app bash

once inside...

composer install --no-dev --optimize-autoloader

if error -> reinstall composer:

rm -rf vendor

then Make sure permissions are correct:

chown -R www-data:www-data .
chmod -R 775 storage bootstrap/cache

Install Composer dependencies again:

composer install --no-dev --optimize-autoloader


on SSH:

we need to explicitly call the docker-compose.yml path to build i think the same with making it down

sudo /usr/local/bin/docker-compose -f /home/two2/data/norvin/norvin-portfolio/docker-compose.yml up -d --build


sudo docker-compose up -d --build