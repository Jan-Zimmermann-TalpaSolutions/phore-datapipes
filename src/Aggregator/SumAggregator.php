<?php
/**
 * Created by PhpStorm.
 * User: matthias
 * Date: 07.08.18
 * Time: 17:07
 */

namespace Phore\DataPipes\Aggregator;


class SumAggregator implements Aggregator
{

    private $values = [];

    public function reset()
    {
        $this->values = [];
    }

    public function addValue($value)
    {
        if ( ! is_numeric($value))
            return;
        $this->values[] = $value;
    }

    public function getAggregated()
    {
        if (count($this->values) == 0)
            return null;
        return array_sum($this->values);
    }
}
