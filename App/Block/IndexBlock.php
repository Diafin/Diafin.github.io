<?php

namespace App\Block;

class IndexBlock
{
    public function render()
    {
        require_once APP_ROOT . '/view/template/main.phtml';
    }
}
