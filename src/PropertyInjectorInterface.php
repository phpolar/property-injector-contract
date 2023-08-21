<?php

declare(strict_types=1);

namespace Phpolar\PropertyInjectorContract;

/**
 * Unifies property injectors with a standard api.
 */
interface PropertyInjectorInterface
{
    /**
     * Sets configured, public properties.
     */
    public function inject(object $injectee): void;
}
