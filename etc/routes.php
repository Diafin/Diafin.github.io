<?php

use App\Controller\GameController;
use App\Controller\IndexController;
use App\Controller\LibraryController;
use App\Controller\PlayerController;

return [
    '/' => IndexController::class,
    '/player' => PlayerController::class,
    '/game' => GameController::class,
    '/library' => LibraryController::class,
];
