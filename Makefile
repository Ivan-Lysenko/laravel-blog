install:
	composer install

env-prepare:
	cp -n .env.example .env || true

key:
	php artisan key:generate

run:
	docker-compose up -d

all: install env-prepare key run
