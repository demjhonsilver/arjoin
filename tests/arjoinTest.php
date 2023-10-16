<?php

namespace Dsilver\Arjoin; 

use PHPUnit\Framework\TestCase;

class arjoinTest extends TestCase
{
    public function testInputWithSpecialCharacters()
    {
        $input = "Thís-Ís å Spéciäl Stríng!";
        $expectedOutput = "th-s-s-sp-ci-l-str-ng";

        $output = joiner::select($input); // Use the correct namespace

        $this->assertEquals($expectedOutput, $output);
    }
}
