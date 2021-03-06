<?php
declare(strict_types=1);

namespace DiContainerBenchmarks\Container\Auryn;

use DiContainerBenchmarks\Container\ContainerInterface;

class AurynContainer implements ContainerInterface
{
    public function getName(): string
    {
        return "Auryn";
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
        return "https://github.com/rdlowrey/auryn";
    }

    public function build(): void
    {
    }
}
