<?php

namespace RebelCode\Modular\FuncTest\Module;

use RebelCode\Modular\Module\ModuleInterface;
use Xpmock\TestCase;

/**
 * Tests {@see RebelCode\Modular\Module\ModuleInterface}.
 *
 * @since [*next-version*]
 */
class ModuleInterfaceTest extends TestCase
{
    /**
     * The name of the test subject.
     *
     * @since [*next-version*]
     */
    const TEST_SUBJECT_CLASSNAME = 'RebelCode\\Modular\\Module\\ModuleInterface';

    /**
     * Creates a new instance of the test subject.
     *
     * @since [*next-version*]
     *
     * @return ModuleInterface
     */
    public function createInstance()
    {
        $mock = $this->mock(static::TEST_SUBJECT_CLASSNAME)
            ->getKey()
            ->getName()
            ->getDependencies()
            ->load()
            ->new();

        return $mock;
    }

    /**
     * Tests whether a valid instance of the test subject can be created.
     *
     * @since [*next-version*]
     */
    public function testCanBeCreated()
    {
        $subject = $this->createInstance();

        $this->assertInstanceOf(
            static::TEST_SUBJECT_CLASSNAME,
            $subject,
            'A valid instance of the test subject could not be created'
        );

        $this->assertInstanceOf(
           'Dhii\\Modular\\Module\\ModuleInterface',
            $subject,
            'Subject is not a valid module'
        );
    }
}
