<?php

    class RepeatCounter
    {
        function countRepeats($needle, $haystack)
        {
            $haystack_array = explode(" ", $haystack);
            foreach ($haystack_array as $word)
            if (in_array($needle, $haystack_array)) {
            return 1; }
         else {
            return 0;
        }

        }
    }


?>
