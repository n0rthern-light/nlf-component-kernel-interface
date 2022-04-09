<?php

namespace Nlf\Component\Kernel;

interface KernelInterface
{
    public function boot(mixed ...$argv): void;
}