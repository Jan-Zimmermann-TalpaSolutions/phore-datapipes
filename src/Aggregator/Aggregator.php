<?php
/**
 * Created by PhpStorm.
 * User: matthias
 * Date: 07.08.18
 * Time: 17:05
 */

namespace Phore\DataPipes\Aggregator;


interface Aggregator
{
    public function reset();
    public function addValue($value);
    public function getAggregated();
}
