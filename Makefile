build:
	docker-compose build

up:
	docker-compose up -d

down:
	docker-compose down

clean: composer optimize fresh npm-i npm-build

composer:
	docker-compose exec app sh -c "composer install && composer update"

optimize:
	docker-compose exec app sh -c "php artisan config:clear && php artisan cache:clear && php artisan view:clear"

fresh:
	docker-compose exec app sh -c "php artisan migrate:fresh && php artisan db:seed"

npm-i:
	docker-compose exec app sh -c "npm i"

npm-dev:
	docker-compose exec app sh -c "npm run dev"

npm-build:
	docker-compose exec app sh -c "npm run build"
