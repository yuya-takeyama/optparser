<?php
class OptParser_RuleSet
{
    /**
     * @var array<string, OptParse_Rule>
     */
    private $shortRules = array();

    /**
     * @var array<string, OptParse_Rule>
     */
    private $longRules = array();

    public function add(OptParser_Rule $rule)
    {
        $this->shortRules[$rule->getShortName()] = $rule;
        $this->longRules[$rule->getLongName()]   = $rule;
    }

    /**
     * Gets Rule with specified name.
     *
     * @param  string $name
     * @return OptParser_Rule
     */
    public function get($name)
    {
        if (preg_match('/^--[a-zA-Z0-0][a-zA-Z0-9\-_]*$/', $name, $matches)) {
            if (array_key_exists($name, $this->longRules)) {
                return $this->longRules[$name];
            } else {
                return NULL;
            }
        } else if (preg_match('/^-[a-zA-Z0-9]$/u', $name, $matches)) {
            if (array_key_exists($name, $this->shortRules)) {
                return $this->shortRules[$name];
            } else {
                return NULL;
            }
        }
    }
}
