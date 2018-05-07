<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */
namespace MSBiosTest\Voting\Resource\Doctrine\Repository;

use MSBios\Voting\Resource\Doctrine\Module;
use PHPUnit\Framework\TestCase;

/**
 * Class PollRepositoryTest
 * @package MSBiosTest\Voting\Resource\Doctrine\Repository
 */
class PollRepositoryTest extends TestCase
{
    /**
     *
     */
    public function testGetAutoloaderConfig()
    {
        $this->assertInternalType('array', (new Module)->getAutoloaderConfig());
    }
}
