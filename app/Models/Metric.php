<?php

namespace SamKnows\Models;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class Metric
 * @package SamKnows\Models
 * @Entity
 * @ORM\Table(name="message")
 */
class Metric
{
    /**
     * @ORM\Id()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue()
     */
    private $id;

    /**
     * @ORM\Column(type="integer", name="unit")
     */
    private $unit;

    /**
     * @ORM\Column(type="string", name="$metric")
     */
    private $metric;

    /**
     * @ORM\Column(type="datetime", name="$timestamp")
     */
    private $timestamp;

    /**
     * @ORM\Column(type="float", name="mean")
     */
    private $mean;

    /**
     * @ORM\Column(type="float", name="median")
     */
    private $median;

    /**
     * @ORM\Column(type="float", name="minimum")
     */
    private $minimum;

    /**
     * @ORM\Column(type="float", name="maximum")
     */
    private $maximum;

    /**
     * @ORM\Column(type="integer", name="sample_size")
     */
    private $sampleSize;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $unit
     * @return Metric
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * @param mixed $metric
     * @return Metric
     */
    public function setMetric($metric)
    {
        $this->metric = $metric;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMetric()
    {
        return $this->metric;
    }

    /**
     * @param mixed $timestamp
     * @return Metric
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param mixed $mean
     * @return Metric
     */
    public function setMean($mean)
    {
        $this->mean = $mean;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMean()
    {
        return $this->mean;
    }

    /**
     * @param mixed $median
     * @return Metric
     */
    public function setMedian($median)
    {
        $this->median = $median;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMedian()
    {
        return $this->median;
    }

    /**
     * @param mixed $minimum
     * @return Metric
     */
    public function setMinimum($minimum)
    {
        $this->minimum = $minimum;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMinimum()
    {
        return $this->minimum;
    }

    /**
     * @param mixed $maximum
     * @return Metric
     */
    public function setMaximum($maximum)
    {
        $this->maximum = $maximum;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getMaximum()
    {
        return $this->maximum;
    }

    /**
     * @param mixed $sampleSize
     * @return Metric
     */
    public function setSampleSize($sampleSize)
    {
        $this->sampleSize = $sampleSize;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getSampleSize()
    {
        return $this->sampleSize;
    }
}