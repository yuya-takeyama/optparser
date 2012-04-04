<?php
class OptParser_Rule
{
    const VALUE_NONE     = 1;
    const VALUE_REQUIRED = 2;
    const VALUE_OPTIONAL = 3;

    /**
     * @var string
     */
    private $longName;


    /**
     * @var string
     */
    private $shortName;

    /**
     * @var int
     */
    private $mode;

    /**
     * @var string
     */
    private $description;

    /**
     * @var mixed
     */
    private $default;

    /**
     * @var mixed
     */
    private $value;

    /**
     * @var bool
     */
    private $isValueSet = false;

    public function __construct($long, $short = NULL, $mode = NULL, $description = '', $default = NULL)
    {
        if (is_null($mode)) {
            $mode = self::VALUE_NONE;
        }

        $this->longName    = $long;
        $this->shortName   = $short;
        $this->mode        = $mode;
        $this->description = $description;

        $this->setDefault($default);
    }

    public function getLongName()
    {
        return $this->longName;
    }

    public function getShortName()
    {
        return $this->shortName;
    }

    public function getMode()
    {
        return $this->mode;
    }

    public function setDefault($default)
    {
        if ($this->mode === self::VALUE_NONE && is_null($default)) {
            $this->default = true;
        } else  {
            $this->default = $default;
        }
    }

    public function getDefault()
    {
        return $this->default;
    }

    public function setValue($value)
    {
        $this->value = $value;
        $this->isValueSet = true;
    }

    public function getValue()
    {
        return $this->isValueSet ? $this->value : $this->getDefault();
    }
}
