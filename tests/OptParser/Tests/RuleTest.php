<?php
class OptParser_Tests_RuleTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function getShortName_should_be_its_short_name()
    {
        $rule = new OptParser_Rule('abcde', 'a');
        $this->assertEquals('a', $rule->getShortName());
    }

    /**
     * @test
     */
    public function getLongName_should_be_its_short_name()
    {
        $rule = new OptParser_Rule('abcde', 'a');
        $this->assertEquals('abcde', $rule->getLongName());
    }

    /**
     * @test
     */
    public function getMode_should_be_VALUE_NONE_by_default()
    {
        $rule = new OptParser_Rule('abcde');
        $this->assertEquals(OptParser_Rule::VALUE_NONE, $rule->getMode());
    }
}
