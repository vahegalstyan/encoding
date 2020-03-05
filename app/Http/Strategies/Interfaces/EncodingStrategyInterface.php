<?php


namespace App\Http\Strategies\Interfaces;


use App\Http\Strategies\Entities\EncodingConfigurationEntity;

interface EncodingStrategyInterface
{
    /**
     * @param string $input
     * @return string
     */
    public function encode(string $input) : string;
}
