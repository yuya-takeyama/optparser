<?php
class OptParser_Rule
{
    /**
     * @var string
     */
    private $longName;


    /**
     * @var string
     */
    private $shortName;

    public function __construct($long, $short = NULL, $description = NULL, $callback = NULL)
    {
        $this->longName  = $long;
        $this->shortName = $short;
    }

    public function getDefault()
    {
        return true;
    }

    public function getLongName()
    {
        return $this->longName;
    }

    public function getShortName()
    {
        return $this->shortName;
    }
}
