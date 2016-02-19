<?php

    class Count
    {
        function countWord($input_sentence, $input_find)
        {
            $sentence = strtolower($input_sentence);
            $sentence = preg_replace("/[^a-zA-Z0-9\s]/", "", $sentence);
            $find = strtolower($input_find);
            $sentence = explode(" ", $sentence);
            $matched_words = array();
            foreach ($sentence as $word){
                if ($word == $find){
                    array_push($matched_words, $word);
                }
            }
            return count($matched_words);
        }
    }
?>
