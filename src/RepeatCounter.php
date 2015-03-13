<?php

    class RepeatCounter
    {
        function countRepeats($needle, $haystack)
        {
            $haystack_array = explode(" ", $haystack);
            if (in_array($needle, $haystack_array)) {
            return "true";
            }
        }



    }
