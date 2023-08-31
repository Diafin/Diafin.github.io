<?php

declare(strict_types=1);

namespace App\Controller;

use App\Block\LibraryBlock;

class LibraryController extends AbstractController
{
    public function execute()
    {
        (new LibraryBlock())->render();
    }
}