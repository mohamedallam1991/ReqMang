

## Instalation
To setup our application you need to:
- git clone https://github.com/AminaTouat/ReqMang.git
- cd to ReqMang directory
- composer install
- cp .env.example .env
- php artisan key:generate
- update the .env file database credentials
- php artisan migrate
- pho artisan db:seed

We would have two users:
Admin user with
    email: admin@test.com
    password: Password

Regular user with
    email: utilisateur@test.com
    password: Password
