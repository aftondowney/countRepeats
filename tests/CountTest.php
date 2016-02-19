<?php
    require_once "src/Count.php";

    class CountTest extends PHPUnit_Framework_TestCase
    {
        function test_count_sentence()
        {
            // Arrange
            $test_Count = new Count;
            $sentence = "The fish are jumping.";
            $find = "fish";
            //I chose this input as the simplest way to test this behavior, because the word only appears once, there are not partials and no punctuation to deal with.

            // Act
            $result = $test_Count->countWord($sentence, $find);

            // Assert
            $this->assertEquals( 1, $result);
        }
        function test_count_multiple_word()
        {
            // Arrange
            $test_Count = new Count;
            $sentence = "I love to fish for fish in the morning.";
            $find = "fish";
            // I chose this example because there are multiple instances of the word in the sentence, but there are still no partials or punctuation to deal with.

            // Act
            $result = $test_Count->countWord($sentence, $find);

            // Assert
            $this->assertEquals( 2, $result);
        }
        function test_count_multiple_word_punctuation()
        {
            // Arrange
            $test_Count = new Count;
            $sentence = "One fish, two fish, red fish, blue fish.";
            $find = "fish";
            // I chose this example because there are multiple instances of the word in the sentence and there is punctuation affecting the word I am counting.(And who doesn't love Dr Seuss!)

            // Act
            $result = $test_Count->countWord($sentence, $find);

            // Assert
            $this->assertEquals( 4, $result);
        }
        function test_count_partial_word()
        {
            // Arrange
            $test_Count = new Count;
            $sentence = "One fish, two fish, red fisherman, blue fisherman.";
            $find = "fish";
            // I chose this example because there are multiple instances of the word to be found and it needs to take into consideration punctuation as well as disregarding partial matches.

            // Act
            $result = $test_Count->countWord($sentence, $find);

            // Assert
            $this->assertEquals( 2, $result);
        }
      }
?>
