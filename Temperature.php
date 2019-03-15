<?php
/**
 * Created by PhpStorm.
 * User: dennis
 * Date: 18-1-19
 * Time: 17:39
 */

class Temperature extends SplEnum
{
    const Delicates = 0;
    const _30 = 1;
    const _40 = 2;
    const _60 = 3;

    /**
     * @return int
     */
    public function getAmountOfDelicatesBags() : int
    {
        return sizeof($this->getConstList()) - 2;
    }

    /**
     * @return int
     */
    public function getAmountOfNonDelicatesBags() : int
    {
        return sizeof($this->getConstList()) - 2;
    }
}