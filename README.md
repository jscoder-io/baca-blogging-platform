<p align="center"><img src="https://raw.githubusercontent.com/jscoder-io/baca-blogging-platform/master/storage/screenshot.png" width="700"></p>

## Introduction

**Baca** is a blogging platform made with Laravel. Baca is a word in Bahasa Indonesia. It means _read_ in English. The app is still in early stage development. More to come.

## How to Install

Create a project in directory `project-name`.
``` bash
composer create-project firman/baca-blogging-platform project-name
```
Change directory to `project-name`.
``` bash
cd project-name
```
Fill in your database environment in file `.env`. Run database migration.
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
## Create an Administrator

Run command below in your project directory
``` bash
php artisan baca:user
```

Go to page `/login` to log in as an administrator.

## Credits

- [Firman](https://github.com/jscoder-io)

## License

The MIT License (MIT).