<?php

namespace Arjoin; 

use PHPUnit\Framework\TestCase;
use Arjoin\joiner; 

class arjoinTest extends TestCase
{
    public function testInputWithSpecialCharacters()
    {
        $input = "Thís-Ís å Spéciäl Stríng!";
        $expectedOutput = "th-s-s-sp-ci-l-str-ng";

        $output = joiner::select($input); // Make sure to use the correct method

        $this->assertEquals($expectedOutput, $output);
    }
}
