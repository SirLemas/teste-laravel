build:
	docker-compose up -d --build

start:
	docker-compose start

stop:
	docker-compose stop

down:
	docker-compose down

php:
	docker exec -it laravel_php /bin/sh

create_project:
	docker-compose run composer create-project laravel/laravel .