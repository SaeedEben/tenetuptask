## TenetUP Task

First create database with "tenetup" name, then copy .env.example to .env file using run this command:

```bash
[ -f .env ] || cp .env.example .env 
php artisan key:generate
```

After that you could run migrations and seed database easily using:
```bash
php artisan migrate --seed
```

Or:

```bash 
php artisan migrate:fresh --seed
```


***
#### In this implementation i assume that the [ Property ] concept needed before any [ Variant ] (based on design) so i decided to create a separate table for it, but we could consider it as a single table with variant entity.
