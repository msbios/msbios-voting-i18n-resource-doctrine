<?php
/**
 * @access protected
 * @author Judzhin Miles <judzhin[at]gns-it.com>
 */

namespace MSBiosTest\Voting\I18n\Resource\Doctrine\Entity;

use Gedmo\Translatable\Entity\MappedSuperclass\AbstractPersonalTranslation;
use MSBios\Voting\I18n\Resource\Doctrine\Entity\OptionTranslation;
use PHPUnit\Framework\TestCase;

/**
 * Class OptionTranslationTest
 * @package MSBiosTest\Voting\I18n\Resource\Doctrine\Entity
 */
class OptionTranslationTest extends TestCase
{
    /**
     *
     */
    public function testInstance()
    {
        /** @var OptionTranslation $object */
        $object = new OptionTranslation('en_US', 'name', 'To be or not to be!');
        $this->assertInstanceOf(AbstractPersonalTranslation::class, $object);
    }
}
