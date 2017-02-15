 <?php
 require_once __DIR__ . "/../src/RPS.php";

 class RockPaperScissorsTest extends PHPUnit_Framework_TestCase
    {
        function test_rpsChecker_draw()
        {
        //arrange
            $input_one = "rock";
            $input_two = "rock";
            $test_RPS = new RockPaperScissors($input_one, $input_two);

        //act
            $result = $test_RPS->rpsChecker($input_one, $input_two);

        //assert
            $this->assertEquals("draw", $result);
        }

    }
?>
