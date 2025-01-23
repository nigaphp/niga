# Niga Framework

NigaPHP is a lightweight PHP web application framework designed to simplify and accelerate the development process for PHP developers. Initially created by [Abass Dev](https://abassdev.com), it is now maintained and contributed to by a community of developers.

## Badges

[![Packagist Version](https://img.shields.io/packagist/v/nigaphp/niga.svg?style=flat-square)](https://packagist.org/packages/nigaphp/niga)
[![License](https://img.shields.io/github/license/mashape/apistatus.svg?style=flat-square)](https://github.com/nigaphp/niga/blob/master/LICENSE)
[![Pull Requests](https://img.shields.io/github/issues-pr/nigaphp/niga?color=0088ff)](https://github.com/nigaphp/niga/pulls)
[![Issues](https://img.shields.io/github/issues/nigaphp/niga?color=0088ff)](https://github.com/nigaphp/niga/issues)

![Niga Logo](https://github.com/nigaphp/niga/blob/2.x/public/images/niga.png)

## Prerequisites

- PHP >= 8.0
- Composer >= 2.0
- PDO
- XML
- ZIP
- MBSTRING

**Note:** The Niga framework is not yet production-ready.

## Documentation

[View Documentation Website](https://docs.nigaphp.abassdev.com/)

## Getting Started

### Installation

```bash
composer create-project nigaphp/niga site_name
```

### Development Server

Change to your new website directory:

```bash
cd my-website
niga run:dev
```

Default values:
- HOST: localhost
- PORT: 8000
- PUBLIC_PATH: public

Modify these in `%APP_ROOT%/config/app.json`

Access your site at http://localhost:8000/

### Creating a Controller

```bash
niga make:controller HomeController
```

This creates:

1. `src/Controller/HomeController.php`
```php
<?php
namespace App\Controller;

use Niga\Framework\Controller\AbstractController;
use Niga\Framework\Attributes\Route;

class HomeController extends AbstractController
{
    #[Route('/home', name:'home', method:'get')]
    public function home() {
        return $this->render("home", [
            "name" => "home"
        ]);
    }
}
```

2. `views/home.php`
```php
<?php if ($cName && $cPath) : ?>
    <h3>Hello <span class='be-color-py be-code'><?= $cName ?></span></h3>
    <p>Your <span class='be-color-py be-code'><?= $cName ?></span> class is located at <span class='be-color-py be-code'><?= $cPath ?></span>!</p>
<?php endif ?>
```

## Contact

For contributions or bug reports, contact:
- abass@abassdev.com
- nigaphp@gmail.com
- abassthedev@gmail.com

## License

[View License](https://github.com/nigaphp/niga/blob/master/LICENSE
