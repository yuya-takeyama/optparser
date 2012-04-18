<?php
class OptParser_Rule
{
    /**
     * @var string
     */
    private $shortName;

    public function __construct($short, $long = NULL, $description = NULL, $callback = NULL)
    {
        $this->shortName = $short;
    }

    public function getDefault()
    {
        return true;
    }

    public function getShortName()
    {
        return $this->shortName;
    }
}
