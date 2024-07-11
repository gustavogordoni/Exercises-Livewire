# Exercises-Livewire
#### Exercícios que estou realizando para compreender a base da biblioteca PHP Livewire.

## Pré-requisitos
- [Git](https://git-scm.com/)
- [Docker Desktop](https://www.docker.com/products/docker-desktop/) ou [Docker Engine](https://docs.docker.com/engine/)

## Passo a passo
Clone o Repositório
```sh
git clone https://github.com/gustavogordoni/Exercises-Livewire.git Exercises-Livewire
```

Acesse o diretório do projeto
```sh
cd Exercises-Livewire
```

Suba os containers do projeto
```sh
docker compose up -d
```

Crie o Arquivo .env
```sh
cp .env.example .env
```

Acesse o container app
```sh
docker compose exec app bash
```

Instale as dependências do projeto
```sh
composer install
```

Gere a key do projeto Laravel
```sh
php artisan key:generate
```

<!-- 
Atualize as variáveis de ambiente do arquivo .env 
> Recomenda-se alterar as senhas (passwords)
```dosini
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=root

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379
``` 
#
**OPCIONAL*: Gere o banco SQLite (caso não use o banco MySQL)
```sh
touch database/database.sqlite
```
#
Rodar as migrations
```sh
php artisan migrate
```
-->

Acesse o projeto
[http://localhost:8000](http://localhost:8000)