<?php


namespace App\Http\Strategies;


use App\Http\Requests\EncodingRequest;
use App\Http\Strategies\Entities\EncodingConfigurationEntity;
use App\Http\Strategies\Interfaces\EncodingStrategyInterface;


class EncodingStrategy
{
    /**
     * @var EncodingStrategyInterface
     */
    private $encodingStrategy;

    /**
     * @param int $type
     * @param EncodingConfigurationEntity $entity
     */
    public function setStrategy(int $type, EncodingConfigurationEntity $entity)
    {
        switch ($type) {
            case EncodingRequest::OFFSET_ENCODING_TYPE:
                $this->encodingStrategy =  new OffsetEncoding($entity);
                break;
            case EncodingRequest::SUBSTITUTION_ENCODING_TYPE:
                $this->encodingStrategy =  new SubstitutionEncoding($entity);
                break;
        }

    }

    /**
     * @param string $input
     * @return string
     */
    public function encode(string $input) : string
    {
       return $this->encodingStrategy->encode($input);
    }
}
