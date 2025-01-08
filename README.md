## git clone
git clone https://github.com/chientrinh/test-laravel.git

## Vào thư mục
cd test-laravel

## Chạy docker
docker-compose build

docker-compose up -d

docker exec -it laravel_php bash

## Phân quyền thư mục
chmod -R 777 storage bootstrap/cache

## Tạo file .env
cp .env.example .env

## Chạy composer
composer install

## Chạy artisan
php artisan key:generate

php artisan migrate

- Nếu chạy **migrate** bị lỗi thì chạy lệnh **composer dumpautoload** sau đó chạy lại **migrate**

php artisan db:seed

## Chạy npm
npm install

npm run build

## Truy cập vào
localhost:8000
