<?php

namespace atk4\ui\tests;

class TemplateTest extends \atk4\core\PHPUnit_AgileTestCase
{
    /**
     * Test constructor.
     */
    public function testTesting()
    {
        $this->assertEquals('foo', 'foo');

        throw new \atk4\core\Exception(["testing", 'foo'=>'bar']);
    }

}