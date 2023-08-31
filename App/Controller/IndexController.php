<?php

declare(strict_types=1);

namespace App\Controller;

use App\Block\IndexBlock;

class IndexController extends AbstractController
{
    public function execute()
    {
        (new IndexBlock())->render();
    }
}
