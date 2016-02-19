<?php

    class Count
    {
        function countWord($input_sentence, $input_find)
        {
            $sentence = strtolower($input_sentence);
            $find = strtolower($input_find);
            $sentence = explode(" ", $sentence);
            var_dump($sentence);
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
