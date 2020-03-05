<?php


namespace App\Strategies;


use App\Strategies\Entities\EncodingConfigurationEntity;
use App\Strategies\Interfaces\EncodingStrategyInterface;

class OffsetEncoding implements EncodingStrategyInterface
{
    /**
     * @var int
     */
    private $offset;

    /**
     * OffsetEncoding constructor.
     * @param EncodingConfigurationEntity $params
     */
    public function __construct(EncodingConfigurationEntity $params)
    {
        $this->offset = $params->getOffset();
    }

    /**
     * @param string $input
     * @return string
     */
    public function encode(string $input) : string
    {
        $encodedString = '';

        foreach (str_split($input) as $character) {
            $encodedString .= chr(ord($character) + $this->offset);
        }

        return $encodedString;
    }
}
