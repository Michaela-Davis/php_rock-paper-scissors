 <?php
 require_once "src/rps.php";

 class rpsTest extends PHPUnit_Framework_TestCase
    {
        function test_rpsChecker()
        {
        //arrange
            $input_one = "r";
            $input_two = "";
            $newClass = new RPS($input_one, $input_two);

        //act
            $result = $newClass->rpsChecker($input_one, $input_two);

        //assert
            $this->assertEquals(false, $result);
        }

    }
?>
