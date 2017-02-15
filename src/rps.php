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

            if (($player_one == "rock" && $player_two == "scissors") || ($player_one == "scissors" && $player_two == "paper") || $player_one == "paper" && $player_two == "rock")
            {
                return "player one wins";
            }
            elseif (($player_two == "rock" && $player_one == "scissors") || ($player_two == "scissors" && $player_one == "paper") || $player_two == "paper" && $player_one == "rock"){
                return "player two wins";
            }
            else {
                return "draw";
            }
        }
    }

?>
