<?php


namespace App\Strategies\Interfaces;


use App\Strategies\Entities\EncodingConfigurationEntity;

interface EncodingStrategyInterface
{
    /**
     * @param string $input
     * @return string
     */
    public function encode(string $input) : string;
}
