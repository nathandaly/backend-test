<?php

namespace SamKnows\Contracts;


interface MetricRepositoryInterface
{
    /**
     * @return Metric[]
     */
    public function getMetrics();
    /**
     * @param string $id
     * @return Metric
     */
    public function getMetric($id);
}