<?php
class OptParser_RuleSet
{
    /**
     * @var array<string, OptParse_Rule>
     */
    private $longRules = array();

    public function add(OptParser_Rule $rule)
    {
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
        return $this->findByLongName($name);
    }

    public function findByLongName($name)
    {
        if (array_key_exists($name, $this->longRules)) {
            return $this->longRules[$name];
        }
    }
}
