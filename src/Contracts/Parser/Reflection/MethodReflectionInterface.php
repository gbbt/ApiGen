<?php declare(strict_types=1);

namespace ApiGen\Contracts\Parser\Reflection;

use ApiGen\Contracts\Parser\Reflection\Behavior\InClassInterface;
use ApiGen\Contracts\Parser\Reflection\Behavior\InTraitInterface;
use ApiGen\Contracts\Parser\Reflection\Behavior\LinedInterface;

interface MethodReflectionInterface extends
    ReflectionInterface,
    InClassInterface,
    InTraitInterface
{
    public function getPrettyName(): string;

    public function isAbstract(): bool;

    public function isFinal(): bool;

    public function isStatic(): bool;

    public function getImplementedMethod(): ?MethodReflectionInterface;

    public function getOverriddenMethod(): ?MethodReflectionInterface;

    public function returnsReference(): bool;

    /**
     * @return ParameterReflectionInterface[]
     */
    public function getParameters(): array;

    public function getStartLine(): int;

    public function getEndLine(): int;
}
