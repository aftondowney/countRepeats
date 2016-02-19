<?php

    class Count
    {
        function countWord($sentence, $find)
        {
            return substr_count($sentence, $find);
        }
    }
?>
