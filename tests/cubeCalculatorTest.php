<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class CubeTest extends TestCase
{
    public function testCalculateVolume(): void
    {
        $cube1 = new Cube(5, 5, 5, 4);
        $cube2 = new Cube(5, 5, 5, 3);

        $cubeCalculator = new CubeVolumeCalculator;

        $this->assertEquals(
            27,
            $cubeCalculator->calculateIntersectionVolume($cube1, $cube2)
        );
    }
}