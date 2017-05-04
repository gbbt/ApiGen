<?php declare(strict_types=1);

namespace ApiGen\Contracts\Parser\Reflection;

interface FunctionReflectionInterface
{
    public function getStartLine(): int;

    public function getEndLine(): int;

    public function getFileName(): string;

    public function getPrettyName(): string;

    public function returnsReference(): bool;

    /**
     * @return ParameterReflectionInterface[]
     */
    public function getParameters(): array;
}
