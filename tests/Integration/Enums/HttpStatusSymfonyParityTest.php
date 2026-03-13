<?php

namespace Tests\Integration\Enums;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use SineMacula\Http\Enums\HttpStatus;
use Symfony\Component\HttpFoundation\Response;

/**
 * Verify parity between HttpStatus enum values and Symfony HttpFoundation
 * Response constants.
 *
 * @internal
 *
 * @author      Ben Carey <bdmc@sinemacula.co.uk>
 * @copyright   2026 Sine Macula Limited.
 */
#[CoversClass(HttpStatus::class)]
class HttpStatusSymfonyParityTest extends TestCase
{
    /**
     * Every Symfony Response::HTTP_* constant must have a matching HttpStatus
     * case with the same integer value.
     *
     * @SuppressWarnings("php:S3011")
     *
     * @return void
     */
    public function testEverySymfonyHttpConstantHasMatchingHttpStatusCase(): void
    {
        $reflection = new \ReflectionClass(Response::class);
        $constants  = $reflection->getConstants();

        foreach ($constants as $name => $value) {

            if (!str_starts_with($name, 'HTTP_')) {
                continue;
            }

            if (!is_int($value)) {
                continue;
            }

            $case = HttpStatus::tryFrom($value);

            static::assertNotNull(
                $case,
                sprintf(
                    'Symfony constant Response::%s = %d has no matching HttpStatus case.',
                    $name,
                    $value,
                ),
            );
        }
    }

    /**
     * Every HttpStatus case must have a matching Symfony Response::HTTP_*
     * constant with the same integer value.
     *
     * @SuppressWarnings("php:S3011")
     *
     * @return void
     */
    public function testEveryHttpStatusCaseHasMatchingSymfonyConstant(): void
    {
        $reflection    = new \ReflectionClass(Response::class);
        $constants     = $reflection->getConstants();
        $symfonyValues = [];

        foreach ($constants as $name => $value) {

            if (!str_starts_with($name, 'HTTP_')) {
                continue;
            }

            if (!is_int($value)) {
                continue;
            }

            $symfonyValues[$value] = $name;
        }

        foreach (HttpStatus::cases() as $case) {
            static::assertArrayHasKey(
                $case->value,
                $symfonyValues,
                sprintf(
                    'HttpStatus::%s = %d has no matching Symfony Response::HTTP_* constant.',
                    $case->name,
                    $case->value,
                ),
            );
        }
    }
}
