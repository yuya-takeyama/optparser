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
    }

    /**
     * Gets Rule with specified name.
     *
     * @param  string $name
     * @return OptParser_Rule
     */
    public function get($name)
    {
        if (array_key_exists($name, $this->shortRules)) {
            return $this->shortRules[$name];
        } else {
            return NULL;
        }
    }
}
