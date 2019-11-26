<?php
class CubeVolumeCalculator {

    public function calculateIntersectionVolume(Cube $cube1, Cube $cube2) {
        $commonX = $this->vectorDiff($cube1->x, $cube1->s, $cube2->x, $cube2->s);
        $commonY = $this->vectorDiff($cube1->y, $cube1->s, $cube2->y, $cube2->s);
        $commonZ = $this->vectorDiff($cube1->z, $cube1->s, $cube2->z, $cube2->s);

        $result = $commonX * $commonY * $commonZ;
        return $result;
    }

    private function vectorDiff($v1Start, $v1Length, $v2Start, $v2Length) {
        $commonWidth = 0;
        if ($v1Start == $v2Start && $v1Length > $v2Length) {
            $commonWidth = $v1Start + $v2Length - $v2Start;
        } else if ($v1Start <= $v2Start) {
            $commonWidth = $v1Start + $v1Length - $v2Start;
        } else {
            $commonWidth = $v2Start + $v2Length - $v1Start;
        }

        return $commonWidth > 0 ? $commonWidth : 0;
    }
    
    public function getResult() {
        return $this->intersectionVolume;
    }

}
