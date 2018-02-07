<?php

namespace SamKnows\Models;

use SamKnows\Contracts\MetricRepositoryInterface;

class MetricRepository implements MetricRepositoryInterface
{
    private $metrics;

    public function __construct()
    {

    }

    public function getMetrics()
    {
        return $this->metrics;
    }

    public function getMetric($id)
    {
        return $this->metrics[$id];
    }
}