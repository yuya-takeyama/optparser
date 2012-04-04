<?php
class OptParser_Rule
{
    /**
     * @var string
     */
    private $shortName;

    /**
     * @var string
     */
    private $longName;

    public function __construct($short, $long = NULL, $description = NULL, $callback = NULL)
    {
        $this->shortName = $short;
        $this->longName  = $long;
    }

    public function getDefault()
    {
        return true;
    }

    public function getShortName()
    {
        return $this->shortName;
    }

    public function getLongName()
    {
        return $this->longName;
    }
}
