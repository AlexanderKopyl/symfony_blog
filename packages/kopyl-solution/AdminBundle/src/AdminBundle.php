<?php

declare(strict_types=1);

namespace KopylSolution\AdminBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AdminBundle extends Bundle
{
    /**
     * @inheritDoc
     */
    public function getPath(): string
    {
        return \dirname(__DIR__);
    }
}