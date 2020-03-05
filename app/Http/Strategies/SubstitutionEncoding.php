<?php


namespace App\Http\Strategies;


use App\Http\Strategies\Entities\EncodingConfigurationEntity;
use App\Http\Strategies\Interfaces\EncodingStrategyInterface;

class SubstitutionEncoding implements EncodingStrategyInterface
{
    /**
     * @var string
     */
    private $characterToSearch;

    /**
     * @var string
     */
    private $characterToReplace;

    /**
     * SubstitutionEncoding constructor.
     * @param EncodingConfigurationEntity $params
     */
    public function __construct(EncodingConfigurationEntity $params)
    {
        $this->characterToSearch = $params->getCharacterToSearch();
        $this->characterToReplace = $params->getCharacterToReplace();
    }

    /**
     * @param string $input
     * @return string
     */
    public function encode(string $input) : string
    {
       return str_replace($this->characterToSearch, $this->characterToReplace, $input);
    }

}
