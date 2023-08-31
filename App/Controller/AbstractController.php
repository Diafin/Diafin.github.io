<?php

declare(strict_types=1);

namespace App\Controller;

use App\UI\ControllerInterface;

abstract class AbstractController implements ControllerInterface
{
    abstract public function execute();
}