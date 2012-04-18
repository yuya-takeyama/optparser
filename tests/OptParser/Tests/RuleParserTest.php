<?php
class OptParser_Tests_RulerParserTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var OptParser_RuleParser
     */
    private $parser;

    public function setUp()
    {
        $this->parser = new OptParser_RuleParser;
    }

    /**
     * @test
     */
    public function getDefault_should_be_true_if_short_option_is_specified()
    {
        $this->markTestIncomplete();
        $rule = $this->parser->parse('-a');
        $this->assertTrue($rule->getDefault());
    }
}
