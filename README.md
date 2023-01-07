# NigateDev framework
Nigatedev is a time-saving PHP framework coded by [**Abass Ben Cheik**](https://github.com/abass-dev/) and [contributors](https://github.com/nigatedev/nigatedev/graphs/contributors)

<a href="https://packagist.org/packages/nigatedev/nigatedev" title="version"><img src="https://img.shields.io/packagist/v/nigatedev/nigatedev.svg?style=flat-square" /></a>
<a href="https://github.com/nigatedev/nigatedev/blob/master/LICENSE" title="license"><img src="https://img.shields.io/github/license/mashape/apistatus.svg?style=flat-square" /></a>
<a href="https://github.com/nigatedev/nigatedev/pulls"><img alt="GitHub pull requests" src="https://img.shields.io/github/issues-pr/nigatedev/nigatedev?color=0088ff" /> </a>
<a href="https://github.com/nigatedev/nigatedev/issues"><img alt="Issues" src="https://img.shields.io/github/issues/nigatedev/nigatedev?color=0088ff" /></a>

<div align="center">
<img width="100" src="https://github.com/nigatedev/nigatedev/blob/master/public/images/nigatedev.png" alt="Nigatedev"></img>
</div>

## Prerequisites
```json
"php": "^7.4|^8.0",
"ext-pdo_mysql": "*",
"ext-pdo_pgsql": "*",
"ext-pdo_sqlite": "*",
"composer": "^2.0"
```
**Note:** Nigatedev framework is not ready for production application for now. 

## Installation
```bash
composer create-project nigatedev/nigatedev site_name
```
## Basic usage
It is strongly recommend to use [composer](https://getcomposer.org/) to install [Nigatedev framework from packagist](https://packagist.org/packages/nigatedev/nigatedev) instead of cloning this repository, if you want to become a contributor please contact abass@abassdev.com

If you already have composer installed you can use the following command to create your web application with Nigatedev framework.

```bash
composer create-project nigatedev/nigatedev site_name
```
This command will create a web application in the site_name directory on your machine. For a complete documentation, have a look at [Nigatedev Docs](https://abassdev.com/en/nigatedev/docs).

## Controller Maker
Create a controller using [(Nigatedev Console Maker)](https://github.com/nigatedev/console)
##### 1. default example
```bash
niga make:controller HomeController
```
##### 2. shortcut example
```bash
niga m:c HomeController
```
What happens after creating a controller using the nigatedev console?
```bash
1. src/Controller/HomeController.php # Create controller class
2. views/home.php # Create the file views/home.php or views/home.twig depending on the chosen template engine twig|diyan, by default diyan is used !
3. config/loader.php # Update controllers loader
```
## Development Server
Run the command below to start a development server, by default... (HOST=127.0.0.1, PORT=8000, PUBLIC_PATH=public) you can change this in the config file %APP_ROOT%/config/app.json
```bash
niga run:dev
```
And now you can navigate to http://localhost:8080/home for example
## Entity Maker
Create an entity using [(Nigatedev Console Maker)](https://github.com/nigatedev/console)
##### 1. default example
```bash
niga make:entity ProductEntity
```
##### 2. shortcut example
```bash
niga m:e ProductEntity
```
Then follow the instructions.

What happens after creating an entity using the nigatedev console?
It will only generate one file for you
```bash
1. src/Entity/ProductEntity.php # The entity class
```
## Routing
```php
<?php
namespace App\Controller;

use Nigatedev\FrameworkBundle\Controller\Controller;
use Nigatedev\FrameworkBundle\Http\Request;
use Nigatedev\FrameworkBundle\Attributes\Route;

class SiteController extends AbstractController
{
    #[Route('/', name:'home', method:'get')]
    public function home() {
        return $this->render("home", [
            "name" => "home"
        ]);
    }

    #[Route('/contact', name:'contact', method:'get|post')]
    public function contact(Request $request) {
        return $this->render("contact", [
            "name" => "contact"
        ]);
    }
}

```
## Contact
If you want to contribute to this famous framework or if you found any bug, Please contact us here abasslab0@gmail.com / nigatedev@gmail.com / abassthedev@gmail.com
