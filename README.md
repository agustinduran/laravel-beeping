# Challenge Laravel Beeping

## Overview
This is a challenge project for Beeping company.

## Author

Agustín Durán

- GitHub: https://github.com/agustinduran
- LinkedIn: https://www.linkedin.com/in/agustineduran/

## Table of contents

- [Tables](#tables)
- [Technology](#technology)
- [Pre Requisites](#pre-requisites)
- [Git Branches](#git-branches)
- [How To Install](#how-to-install)
- [Calculate cost with command](#calculate-cost-with-command)
- [Run](#run)
- [Routes](#routes)

## Tables

### Orders

Column | Type
------ | ----
id | int sequence ( PK )
order_ref | string
customer_name | string
created_at | datetime
updated_at | datetime

### Products
Column | Type
------ | ----
id | int sequence ( PK )
name | string
cost | double
created_at | datetime
updated_at | datetime

### Orders Lines
Column | Type
------ | ----
id | int sequence ( PK )
order_id | int sequence ( FK Orders )
qty | int
product_id | int sequence ( FK Products )
created_at | datetime
updated_at | datetime

## Technology

* Programming languange: PHP 7.4.33
* App Framework: Laravel 8.83.27
* Database engine: MariaDB

## Pre requisites

* Laravel 8.* with PHP 7.4.*
* Composer installed
* Linux/Mac terminal (Or emulated linux on Windows)
* No services running on localhost port 8000 or 3306

## Git Branches
```scala
main (production)
│
└─ dev (pre-production / tests)
  │
  ├─ feature/config-laravel
  │
  ├─ feature/create-migrations
  │
  ├─ feature/create-seeders
  │
  ├─ feature/eloquent-query-command
  │
  ├─ feature/front-liveware
  │
  └─ feature/env-instructions
```

## How to install

### Create a new database
```sql
CREATE DATABASE beeping_challenge_aduran;
```

### Set enviroment variables
#### Copy .env.example file
```
cp .env.example .env
```

#### Put your database host on
```
DB_HOST=[your_host]
```

#### Put your database port on
```
DB_PORT=[your_port]
```

#### Put your database username on
```
DB_USERNAME=[your_username]
```

#### Put your database password on
```
DB_PASSWORD=[your_password]
```

### Run migrations
```
php artisan migrate
```

### Run seeders
```
php artisan db:seed
```

## Calculate cost with command

### Active the queue work
```
php artisan queue:work
```

### Run command
```
php artisan calculate:order-cost
```

## Run

### Run app
```
php artisan serve
```

## Routes

### Orders List Table
```
http://localhost:8000
```