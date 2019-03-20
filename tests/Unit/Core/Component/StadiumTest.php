<?php

declare(strict_types=1);

namespace Tests\Unit\Core\Component;

use App\Core\Component\Stadium\Domain\Stadium;
use PHPUnit\Framework\TestCase;

final class StadiumTest extends TestCase
{
    /** @var Stadium */
    private $stadium;

    public function setUp(): void
    {
        $this->stadium = new Stadium();
    }

    public function testDistributeGiveOnePlayer()
    {
    }

    public function testDistributeAlwaysNewPlayer()
    {
    }

}
