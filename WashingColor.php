<?php
/**
 * Created by PhpStorm.
 * User: dennis
 * Date: 18-1-19
 * Time: 17:34
 */

class WashingColor extends SplEnum
{
    const White = 0;
    const Colored = 1;
    const Red = 2;
    const Black = 3;

    /**
     * @return array
     */
    public function getColorsWithDelicatesBags() : array
    {
        return array(self::White, self::Colored);
    }
}