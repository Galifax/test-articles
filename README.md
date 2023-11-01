
# Test articles project
- Docker
- Laravel 10
- PHP 8.2
- MySQL 8
- Vue 3
## Run/down docker containers
- make up
- make down
## Build project(composer install, migrations, seeders...)
- make clean
- go to http://localhost
- or add to hosts.txt 127.0.0.1 test-articles.loc
- and go to http://test-articles.loc
## Pages info with vue3
- / - list articles with paginate and link to article card
- /articles/{url} - article card
## Api docs
- GET /api/v1/articles - list articles with pagination
- GET /api/v1/articles/{url} - article card
- POST /api/v1/articles/{id}/switch-active - toggle active true/false
## Clear cache
- make optimize
