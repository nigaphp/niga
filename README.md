## NigateDev framework
Nigatedev is a PHP framework
written for saving time by [**Abass Ben Cheik**](https://todaysdev.com/en/about/author/) 

## Prerequisites
To use NigateDev framework please make sure that the following items are installed on your machine.
```json
PHP => 7.3
composer => 2.0
```

## Installation
```bash
$ composer create-project nigatedev/nigatedev
```
<br />

## Basic usage
It is strongly recommend to use [composer](https://getcomposer.org/) to install [Nigatedev framework from packagist](https://packagist.org/packages/nigatedev/nigatedev) instead of cloning this repository.
<br /> 

**Note:** Nigatedev framework is not ready for production application at this time. 
<br />

If you already have composer you can use the following command to create your web application with Nigatedev framework.
<br />

```bash
$ composer create-project nigatedev/nigatedev my-blog
```
<br />

will create a web application in the my-blog directory on your machine. For a complete documentation, have a look at [Nigatedev Docs](https://todaysdev.com/en/nigatedev/docs).
<br />

### Create a controller using CLI (Command Line Interface)
#### Since the [nigatedev/maker^1.0.3](https://github.com/nigatedev/maker) you have different ways to do this.
##### 1. default

```bash
$ bin/console make:controller
```
##### 2. shortcut

```bash
$ bin/console m:c
```
##### 3. specify the name of the controller 

```bash
$ bin/console m:c HomeController
```
<br />

The last command will create two files and update the controller injector.
<br />

```bash
1. src/Controller/HomeController.php
2. views/home.php
```
<br />

To know which dependencies are required, please consult the [composer.json file.](https://github.com/nigatedev/nigatedev/blob/master/composer.json) 

## Contact
If you want to contribute to this famous framework or if you found you found a bug, Please contact us here abass@todaysdev.com / nigatedev@gmail.com
