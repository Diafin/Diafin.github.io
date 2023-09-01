<?php

declare(strict_types=1);

namespace App\Block;

class LibraryBlock
{
    public function render()
    {
        require_once APP_ROOT . '/view/template/library.phtml';
    }
}
