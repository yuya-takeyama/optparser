<?php
class OptParser_Tests_ParserTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var OptParser_Parser
     */
    private $parser;

    public function setUp()
    {
        $this->parser = new OptParser_Parser;
    }

    /**
     * @test
     */
    public function option_created_with_no_argument_should_be_true()
    {
        $this->markTestIncomplete();
        $this->parser->on('-a');
        $option = $this->parser->getOption();
        $this->assertTrue($option['-a']);
    }
}
