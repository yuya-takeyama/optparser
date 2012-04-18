<?php
class OptParser_Parser
{
    /**
     * @var OptParser_RuleSet
     */
    private $ruleSet;

    /**
     * @var OptParser_RuleParser
     */
    private $ruleParser;

    /**
     * Constructor.
     */
    public function __construct()
    {
        $this->ruleSet = new OptParser_RuleSet;
    }

    public function on($short)
    {
        $rule = $this->ruleParser->parse($short);
        $this->ruleSet->push($rule);
    }

    public function getOption()
    {
        return array('-a' => true);
    }
}
