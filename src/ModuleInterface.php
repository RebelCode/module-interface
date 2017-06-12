<?php

namespace RebelCode\Modular\Module;

use Dhii\Modular\Module\ModuleInterface as BaseModuleInterface;

/**
 * Something that represents a module.
 *
 * @since [*next-version*]
 */
interface ModuleInterface extends BaseModuleInterface
{
    /**
     * Retrieves the name of the module.
     *
     * @since [*next-version*]
     *
     * @return string
     */
    public function getName();

    /**
     * Retrieves the IDs of the modules which this module depends on.
     *
     * @since [*next-version*]
     *
     * @return string[] A list of module IDs.
     */
    public function getDependencies();
}
