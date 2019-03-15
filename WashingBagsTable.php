<?php
/**
 * Created by PhpStorm.
 * User: dennis
 * Date: 18-1-19
 * Time: 17:43
 */

require('Temperature.php');
class WashingBagsTable
{
    private $washingBags = array();

    public function __construct()
    {
        $washingColor = new WashingColor();
        array_push($washingBags, )
    }

    /**
     * @return array
     */
    public function getWashingBags(): array
    {
        return $this->washingBags;
    }

    /**
     * @param array $washingBags
     */
    public function setWashingBags(array $washingBags)
    {
        $this->washingBags = $washingBags;
    }

    private function createDelicatesBags(WashingColor $washingColors)
    {
        $delicatesBags = array();
        $colorsWithDelicates = $washingColors->getColorsWithDelicatesBags();
        foreach ($colorsWithDelicates as $colorWithDelicates) {
            array_push($delicatesBags, new )
        }
    }
}