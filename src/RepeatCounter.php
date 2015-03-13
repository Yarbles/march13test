<?php
    class RepeatCounter
    {
        function countRepeats($needle, $haystack)
        {
            $haystack_array = explode(" ", $haystack);
            $number_of_matches = 0;
            $haystack_words = array_count_values($haystack_array);


                if (in_array($needle, $haystack_array)) {
                    $number_of_matches = $haystack_words[$needle];
                }

                return $number_of_matches;

        }
    }
?>
