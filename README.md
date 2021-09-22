## NigateDev framework
Nigatedev is a PHP framework for saving time by [**Abass Ben Cheik**](https://todaysdev.com/en/about/author/) 

<a href="https://packagist.org/packages/nigatedev/nigatedev" title="version"><img src="https://img.shields.io/packagist/v/nigatedev/nigatedev.svg?style=flat-square" /></a>
<a href="https://github.com/nigatedev/nigatedev/blob/master/LICENSE" title="license"><img src="https://img.shields.io/github/license/mashape/apistatus.svg?style=flat-square" /></a>
<a href="https://github.com/nigatedev/nigatedev/pulls"><img alt="GitHub pull requests" src="https://img.shields.io/github/issues-pr/nigatedev/nigatedev?color=0088ff" /> </a>
<a href="https://github.com/nigatedev/nigatedev/issues"><img alt="Issues" src="https://img.shields.io/github/issues/nigatedev/nigatedev?color=0088ff" /></a>

<div align="center">
<img width="100" src="https://github.com/nigatedev/nigatedev/blob/master/public/images/nigatedev.png" alt="Nigatedev"></img>
</div>

## Prerequisites
To use NigateDev framework please make sure that the following items are installed on your machine.
```json
PHP ^7.3|^8.0
PDO PHP extension
composer => 2.0
```

## Installation
```bash
$ composer create-project nigatedev/nigatedev
```

## Basic usage
It is strongly recommend to use [composer](https://getcomposer.org/) to install [Nigatedev framework from packagist](https://packagist.org/packages/nigatedev/nigatedev) instead of cloning this repository.
 
**Note:** Nigatedev framework is not ready for production application at this time. 

If you already have composer installed you can use the following command to create your web application with Nigatedev framework.

```bash
$ composer create-project nigatedev/nigatedev my-blog
```

will create a web application in the my-blog directory on your machine. For a complete documentation, have a look at [Nigatedev Docs](https://todaysdev.com/en/nigatedev/docs).

### Create a controller using CLI (Command Line Interface)
#### Since the [nigatedev/maker^1.0.3](https://github.com/nigatedev/maker) you have different ways to do this.
##### 1. default
```bash
$ bin/niga make:controller
```
##### 2. shortcut
```bash
$ bin/niga m:c
```
Or
```bash
$ bin/niga make:c
```
##### 3. specify the name of the controller 
```bash
$ bin/niga m:c HomeController
```

The last command will create two files and update the controller injector.

```bash
1. src/Controller/HomeController.php
2. views/home.php
```
### Routing
#### Nigatedev framework have many ways to map a route.

##### Option 1, into your controller

```php
<?php
namespace App\Controller;

use Nigatedev\FrameworkBundle\Controller\Controller;
use Nigatedev\FrameworkBundle\Http\Request;
use Nigatedev\FrameworkBundle\Attributes\Route;

class SiteController extends Controller
{
    #[Route('/')]
    public function home() {
        return $this->render("home", [
            "name" => "home"
        ]);
    }

    #[Route('/contact')]
    public function contact() {
        return $this->render("contact", [
            "name" => "contact"
        ]);
    }

    #[Route('/about')]
    public function about() {
        return $this->render("about", [
            "name" => "about"
        ]);
    }

}

```
##### Options 2
```php
<?php
    
   /**
    * === OPTION A ===
    * Nigatedev framework routes mapping
    *
    * http://localhost:8000/home Output Welcome
    */
    $app->router->get("/home", function () { return "<h1>Welcome</h1>"; });
    
   /**
    * === OPTION B ===
    * Nigatedev framework routes mapping
    *
    * http://localhost:8000/contact run the contact method from ContactController
    */
    $app->router->get("/contact", [\App\Controller\ContactController::class, 'contact']); 
  
   /**
    * === OPTION C ===
    * Nigatedev framework routes mapping
    *
    * http://localhost:8000/home|about map many routes at once
    */
    $app->router->load([
    "/home" => [\App\Controller\HomeController::class, 'home'],
    "/about" => [\App\Controller\AboutController::class, 'about'],
    ]); 
  
   /**
    * === OPTION D ===
    * Nigatedev framework routes mapping
    *
    * http://localhost:8000/home|about map many routes at once
    */
    $app->router->load([
    "/home" => function () { return "<h1>Welcome</h1>"; },
    "/about" => function () { return "<h1>Contact us</h>"; },
    ]); 
    
   /**
    * === OPTION E ===
    * Nigatedev framework routes mapping
    *
    * http://localhost:8000/* don't take care about routing let the app do everything for you
    */
    $app->router->load(Loader::load("loader.php"));
```
### [Nigatedev Dumper](https:/github.com/nigatedev/dumper)
One of the powerful function called ``` dump() ``` is available anywhere in your project, and can be used to replace the default php ```var_dump() ``` function.
#### Usage example
```php
$string = "Hello John Doe";
dump($string);

or 

dd($string)
```

To know which dependencies are required, please consult the [composer.json file.](https://github.com/nigatedev/nigatedev/blob/master/composer.json) 

## Contact
If you want to contribute to this famous framework or if you found you found a bug, Please contact us here abass@todaysdev.com / nigatedev@gmail.com
