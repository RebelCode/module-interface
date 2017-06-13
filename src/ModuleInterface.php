<?php

namespace RebelCode\Modular\Module;

use Dhii\Modular\Module\ModuleInterface as BaseModuleInterface;

/**
 * Something that represents a RebelCode module.
 *
 * @since [*next-version*]
 */
interface ModuleInterface extends BaseModuleInterface
{
    /**
     * Retrieves the keys of the modules which this module depends on.
     *
     * @since [*next-version*]
     *
     * @return string[] A list of module keys.
     */
    public function getDependencies();
}
