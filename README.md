# Niga framework

Niga is a time-saving PHP framework coded by [**Abass Dev**](https://github.com/abass-dev/) and [contributors](https://github.com/nigaphp/niga/graphs/contributors)

<a href="https://packagist.org/packages/nigaphp/niga" title="version"><img src="https://img.shields.io/packagist/v/nigaphp/niga.svg?style=flat-square" /></a>
<a href="https://github.com/nigaphp/niga/blob/master/LICENSE" title="license"><img src="https://img.shields.io/github/license/mashape/apistatus.svg?style=flat-square" /></a>
<a href="https://github.com/nigaphp/niga/pulls"><img alt="GitHub pull requests" src="https://img.shields.io/github/issues-pr/nigaphp/niga?color=0088ff" /> </a>
<a href="https://github.com/nigaphp/niga/issues"><img alt="Issues" src="https://img.shields.io/github/issues/nigaphp/niga?color=0088ff" /></a>

<div align="center">
<img width="100" src="https://github.com/nigaphp/niga/blob/2.x/public/images/niga.png" alt="Niga"></img>
</div>

## Prerequisites

1. PHP => 8.0
2. PHP Composer => 2.0
3. PDO PHP EXT
4. XML PHP EXT
5. ZIP PHP EXT
6. MBSTRING PHP EXT

**Note:** Niga framework is not ready for production application for now.

### [Take a look at the documentation website](https://docs.nigaphp.abassdev.com/)

# Getting Started


Let's discover **NigaPHP Framework in 5 minutes**.


Get started by **creating a new Website**.


## Installation

```bash
composer create-project nigaphp/niga site_name
```

You can type this command into Command Prompt, Powershell, Terminal, or any other integrated terminal of your code editor.

The command also installs all necessary dependencies you need to run NigaPHP.

## Development server

Change directory to your new website `my-website`

```bash
cd my-website
niga run:dev
```

Default values **[HOST=localhost, PORT=8000, PUBLIC_PATH=public]** you can change this in the config file `%APP_ROOT%/config/app.json`

Then open the this link in your web browser http://localhost:8000/.


## Create a controller

```bash
niga make:controller HomeController
```
In this situation, we are creating a controller for the **home** page.

This command will create two new files for us.
1. `src/Controler/HomeController.php`

Here is your new controller class.

```php showLineNumbers
<?php
namespace App\Controller;

use Niga\Framework\Controller\AbstractController;
use Niga\Framework\Attributes\Route;

class SiteController extends AbstractController
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

And this is the view to rendered.

```php showLineNumbers
<?php if ($cName && $cPath) : ?>
    <h3>Hello <span class='be-color-py be-code'><?= $cName ?></span></h3>
    <p>Your <span class='be-color-py be-code'><?= $cName ?></span> class is located at <span class='be-color-py be-code'><?= $cPath ?></span> !</p>
<?php endif ?>
```

## Contact us

If you want to contribute to this famous framework or if you found any bug, Please contact us here abass@abassdev.com / nigaphp@gmail.com / abassthedev@gmail.com
