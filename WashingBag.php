<?php
/**
 * Created by PhpStorm.
 * User: dennis
 * Date: 18-1-19
 * Time: 17:29
 */

class WashingBag
{
    private $color;
    private $temperature;
    private $lastTimeWashed;

    /**
     * WashingBag constructor.
     * @param int $color
     * @param int $temperature
     * @param DateTime $lastTimeWashed
     */
    public function __construct(int $color, int $temperature, DateTime $lastTimeWashed)
    {
        $this->color = $color;
        $this->temperature = $temperature;
        $this->lastTimeWashed = $lastTimeWashed;
    }

    /**
     * @return int
     */
    public function getColor() : int
    {
        return $this->color;
    }

    /**
     * @param int $color
     */
    public function setColor(int $color)
    {
        $this->color = $color;
    }

    /**
     * @return int
     */
    public function getTemperature() : int
    {
        return $this->temperature;
    }

    /**
     * @param int $temperature
     */
    public function setTemperature(int $temperature)
    {
        $this->temperature = $temperature;
    }

    /**
     * @return DateTime
     */
    public function getLastTimeWashed() : DateTime
    {
        return $this->lastTimeWashed;
    }

    /**
     * @param DateTime $lastTimeWashed
     */
    public function setLastTimeWashed(DateTime $lastTimeWashed)
    {
        $this->lastTimeWashed = $lastTimeWashed;
    }
}