<?php
/**
 * @access protected
 * @author Judzhin Miles <judzhin[at]gns-it.com>
 */

namespace MSBiosTest\Voting\I18n\Resource\Doctrine\Entity;

use Gedmo\Translatable\Entity\MappedSuperclass\AbstractPersonalTranslation;
use MSBios\Voting\I18n\Resource\Doctrine\Entity\PollTranslation;
use PHPUnit\Framework\TestCase;

/**
 * Class PollTranslationTest
 * @package MSBiosTest\Voting\I18n\Resource\Doctrine\Entity
 */
class PollTranslationTest extends TestCase
{
    /**
     *
     */
    public function testInstance()
    {
        /** @var PollTranslation $object */
        $object = new PollTranslation('en_US', 'name', 'To be or not to be!');
        $this->assertInstanceOf(AbstractPersonalTranslation::class, $object);
    }
}
