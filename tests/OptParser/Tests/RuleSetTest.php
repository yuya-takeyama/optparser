<?php
class OptParser_Tests_RuleSetTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var OptParse_RuleSet
     */
    private $ruleSet;

    public function setUp()
    {
        $this->ruleSet = new OptParser_RuleSet;
    }

    /**
     * @test
     */
    public function get_should_get_Rule_with_short_name()
    {
        $rule = new OptParser_Rule('-a');
        $this->ruleSet->add($rule);
        $this->assertSame($rule, $this->ruleSet->get('-a'));
    }

    /**
     * @test
     */
    public function get_should_get_Rule_with_long_name()
    {
        $rule = new OptParser_Rule('-a', '--abcde');
        $this->ruleSet->add($rule);
        $this->assertSame($rule, $this->ruleSet->get('--abcde'));
    }

    /**
     * @test
     */
    public function get_should_be_NULL_if_specified_name_no_existent()
    {
        $this->assertNull($this->ruleSet->get('-a'));
    }
}
