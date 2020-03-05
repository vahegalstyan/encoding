<?php


namespace App\Http\Strategies\Entities;


class EncodingConfigurationEntity
{
    /**
     * @var int
     */
    private $offset;

    /**
     * @var string
     */
    private $characterToSearch;

    /**
     * @var string
     */
    private $characterToReplace;

    /**
     * @return int
     */
    public function getOffset(): ?int
    {
        return $this->offset;
    }

    /**
     * @param int $offset
     */
    public function setOffset(?int $offset): void
    {
        $this->offset = $offset;
    }

    /**
     * @return string
     */
    public function getCharacterToSearch(): ?string
    {
        return $this->characterToSearch;
    }

    /**
     * @param string $characterToSearch
     */
    public function setCharacterToSearch(?string $characterToSearch): void
    {
        $this->characterToSearch = $characterToSearch;
    }

    /**
     * @return string
     */
    public function getCharacterToReplace(): ?string
    {
        return $this->characterToReplace;
    }

    /**
     * @param string $characterToReplace
     */
    public function setCharacterToReplace(?string $characterToReplace): void
    {
        $this->characterToReplace = $characterToReplace;
    }

}
