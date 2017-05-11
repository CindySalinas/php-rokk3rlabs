### Install

clone this repo and then install all vendor files:

```bash
$ sudo composer install
```

### Set up project

1. first create your database, ej: ``` rokk3rlab_test```
2. create a .env file with next structure:

```bash
  APP_NAME="Shopping Cart"
  APP_ENV=local
  APP_KEY=base64:EBIT6QhyMUzc1jQ/fd785poAUP1OIsfavhnp4LVNsKk=
  APP_DEBUG=true
  APP_LOG_LEVEL=debug
  APP_URL=http://localhost

  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE= rokk3rlab_test // DATABASE_NAME
  DB_USERNAME= YOUR_DB_USERNAME
  DB_PASSWORD= YOUD_DB_PASSWORD

  BROADCAST_DRIVER=log
  CACHE_DRIVER=file
  SESSION_DRIVER=file
  QUEUE_DRIVER=sync

  REDIS_HOST=127.0.0.1
  REDIS_PASSWORD=null
  REDIS_PORT=6379

  MAIL_DRIVER=smtp
  MAIL_HOST=smtp.mailtrap.io
  MAIL_PORT=2525
  MAIL_USERNAME=null
  MAIL_PASSWORD=null
  MAIL_ENCRYPTION=null

  PUSHER_APP_ID=
  PUSHER_APP_KEY=
  PUSHER_APP_SECRET=
```

3. run migrations with:

```bash
  php artisan migrate:refresh --seed
```

### Run

```bash
  php artisan serve
```