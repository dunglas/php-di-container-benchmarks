<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\PhpDi;

use DiContainerBenchmarks\Container\ContainerInterface;

class PhpDiContainer implements ContainerInterface
{
    public function getName(): string
    {
        return "PhpDi";
    }

    public function isCompiled(): bool
    {
        return false;
    }

    public function isAutowiringSupported(): bool
    {
        return true;
    }

    public function getUrl(): string
    {
        return "http://php-di.org/";
    }

    public function build(): void
    {
    }
}
