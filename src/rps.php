<?php
    class RockPaperScissors
    {

        private $user_one;
        private $user_two;

        function __construct($input_one, $input_two)
        {
        $this->user_one = $input_one;
        $this->user_two = $input_two;
        }

        function rpsChecker()
        {
            $player_one = $this->user_one;
            $player_two = $this->user_two;

            if ($player_one != $player_two)
            {
                return "win";
            }
            else {
                return "draw";
            }
        }
    }

?>
