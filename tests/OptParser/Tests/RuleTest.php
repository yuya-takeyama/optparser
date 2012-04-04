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

    /**
     * @test
     */
    public function getMode_should_be_the_value_set_on_constructor()
    {
        $rule = new OptParser_Rule('abcde', 'a', OptParser_Rule::VALUE_REQUIRED);
        $this->assertEquals(OptParser_Rule::VALUE_REQUIRED, $rule->getMode());
    }

    /**
     * @test
     */
    public function getDefault_should_true_by_default_if_VALUE_NONE_mode()
    {
        $rule = new OptParser_Rule('abcde', 'a', OptParser_Rule::VALUE_NONE);
        $this->assertTrue($rule->getDefault());
    }

    /**
     * @test
     */
    public function getDefault_should_be_the_value_set_on_constructor()
    {
        $rule = new OptParser_Rule('abcde', 'a', OptParser_Rule::VALUE_OPTIONAL, NULL, 'foo');
        $this->assertEquals('foo', $rule->getDefault());
    }
}
