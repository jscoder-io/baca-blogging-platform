<p align="center"><img src="https://raw.githubusercontent.com/jscoder-io/baca-blogging-platform/master/storage/screenshot.png" width="700"></p>

## Introduction

**Baca** is a blogging platform made with Laravel. Baca is a word in Bahasa Indonesia. It means _read_ in English. The app is still in early stage development. More to come.

## How to Install

Clone this repo.
``` bash
git clone git@github.com:jscoder-io/baca-blogging-platform.git
```
Change directory.
``` bash
cd baca-blogging-platform
```
Install packages via composer.
``` bash
composer install
```
Copy `.env.example` to `.env`, then fill in your database environment.
``` bash
cp .env.example .env
```
Set the application key.
``` bash
php artisan key:generate
```
Run database migration.
``` bash
php artisan migrate
```
(Optional) Populate with sample data.
``` bash
php artisan db:seed
```
Install NPM package and its dependency.
``` bash
npm install
```
Build assets.
``` bash
npm run build
```
Run application.
``` bash
php artisan serve
```

## Credits

- [Firman](https://github.com/jscoder-io)

## License

The MIT License (MIT).