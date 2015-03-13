<?php

    require_once "src/RepeatCounter.php";

    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function test_countRepeats()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $needle = "tale";
            $haystack = "tale of two cities";

            //Act
            $result = $test_RepeatCounter->countRepeats($needle, $haystack);

            //Assert
            $this->assertEquals(1, $result);
        }

        function test_countRepeatsNegative()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $needle = "peach";
            $haystack = "tale of two cities";

            //Act
            $result = $test_RepeatCounter->countRepeats($needle, $haystack);

            //Assert
            $this->assertEquals(0, $result);
        }

        function test_countRepeatsInstances()
        {
            //Arrange
            $test_RepeatCounter = new RepeatCounter;
            $needle = "big";
            $haystack = "the big cat entered the big room";

            //Act
            $result = $test_RepeatCounter->countRepeats($needle, $haystack);

            //Assert
            $this->assertEquals(2, $result);
        }

    }
?>
