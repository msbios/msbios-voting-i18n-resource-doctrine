<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Voting\I18n\Resource\Doctrine;

use MSBios\ModuleInterface;
use MSBios\Voting\I18n\Resource\Doctrine\Module;
use PHPUnit\Framework\TestCase;

/**
 * Class ModuleTest
 * @package MSBiosTest\Voting\I18n\Resource\Doctrine
 */
class ModuleTest extends TestCase
{
    /**
     * @return ModuleInterface|Module
     */
    public function testInstance()
    {
        /** @var ModuleInterface $instance */
        $instance = new Module;
        $this->assertInstanceOf(ModuleInterface::class, $instance);
        return $instance;
    }

    /**
     * @depends testInstance
     * @param ModuleInterface $instance
     */
    public function testGetConfig(ModuleInterface $instance)
    {
        $this->assertInternalType('array', $instance->getConfig());
    }

    /**
     * @depends testInstance
     * @param ModuleInterface $instance
     */
    public function testGetAutoloaderConfig(ModuleInterface $instance)
    {
        $this->assertInternalType('array', $instance->getAutoloaderConfig());
    }
}
