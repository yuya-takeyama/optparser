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
}
