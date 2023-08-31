<?php

declare(strict_types=1);

namespace App\Router;

use App\Controller\GameController;
use App\Controller\IndexController;
use App\Controller\LibraryController;
use App\Controller\PlayerController;

class Router
{
    public function selectController(string $route)
    {
        switch ($route) {
            case '/':
                (new IndexController())->execute();
                break;
            case '/player':
                (new PlayerController())->execute();
                break;
            case '/library':
                (new LibraryController())->execute();
                break;
            case '/game':
                (new GameController())->execute();
                break;
            default:
                echo '404';
        }
    }
}
