<?php
    require_once "src/Count.php";

    class CountTest extends PHPUnit_Framework_TestCase
    {
        function test_count_one_word()
        {
            // Arrange
            $test_Count = new Count;
            $sentence = "fish";
            $find = "fish";

            // Act
            $result = $test_Count->countWord($sentence, $find);

            // Assert
            $this->assertEquals( 1, $result);
        }
        function test_count_sentence()
        {
            // Arrange
            $test_Count = new Count;
            $sentence = "What a big fish.";
            $find = "fish";

            // Act
            $result = $test_Count->countWord($sentence, $find);

            // Assert
            $this->assertEquals( 1, $result);
        }
        function test_count_multiple_word()
        {
            // Arrange
            $test_Count = new Count;
            $sentence = "One fish, two fish, red fish, blue fish.";
            $find = "fish";

            // Act
            $result = $test_Count->countWord($sentence, $find);

            // Assert
            $this->assertEquals( 4, $result);
        }
      }
?>
