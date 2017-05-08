<?php declare(strict_types=1);

namespace ApiGen\Reflection\Tests\Parser;

use ApiGen\Reflection\Contract\Reflection\ClassPropertyReflectionInterface;
use ApiGen\Reflection\Parser\Parser;
use ApiGen\Tests\AbstractContainerAwareTestCase;

final class NewPropertyReflectionTest extends AbstractContainerAwareTestCase
{
    /**
     * @var ClassPropertyReflectionInterface
     */
    private $propertyReflection;

    protected function setUp(): void
    {
        /** @var Parser $parser */
        $parser = $this->container->getByType(Parser::class);
        $parser->parseDirectories([__DIR__ . '/../../../../tests/Parser/Parser/ParserSource']);

        $classReflections = $parser->getClassReflections();
        $classReflection = array_pop($classReflections);

        $propertyReflections = $classReflection->getProperties();
        $this->propertyReflection = array_shift($propertyReflections);
    }

    /**
     * @todo
     */
    public function testLines(): void
    {
        $this->assertNull($this->propertyReflection);
    }
}
