install: install-app env-prepare key

run:
	docker-compose up -d

install-app:
	composer install

env-prepare:
	cp -n .env.example .env || true

key:
	php artisan key:generate

