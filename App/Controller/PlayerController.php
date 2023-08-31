<?php

declare(strict_types=1);

namespace App\Controller;

use App\Block\PlayerBlock;

class PlayerController extends AbstractController
{
    public function execute()
    {
        (new PlayerBlock())->render();
    }
}