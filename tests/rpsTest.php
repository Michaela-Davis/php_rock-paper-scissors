 <?php
 require_once "src/rps.php";

 class rpsTest extends PHPUnit_Framework_TestCase
    {
        function test_rpsChecker()
        {
        //arrange
            $newVariable = new Ana;

            $input1 = "word";
            $input2 = array("rodw");

        //act
            $result = $newVariable->rpsChecker($input1, $input2);

        //assert
            $this->assertEquals("yes" , $result);
        }

    }
?>
