# _RPC_

#### _This web page allows a user to simulate Rock-Paper-Scissors, 15 February 2017_

#### By _**Michaela Davis & Sean Peterson**_


## Description

_Rock, Paper, Scissors is a game of combinations with 2 players._

## Setup/Installation Requirements

* In terminal run the following commands:

1. _Fork and clone this repository from_ [gitHub](https://github.com/michaela-davis/php_rock-paper-scissors.git).
2. Ensure [composer](https://getcomposer.org/) is installed on your computer.
3. Navigate to the root directory of the project in which ever CLI shell you are using and run the command: `composer install`.
4. To run tests enter `composer test` in terminal.
5. Create a local server in the /web directory within the project folder using the command: `php -S localhost:8000` (assuming you are using a mac - things are different on a pc).
6. Open the directory http://localhost:8000/ in any standard web browser.

## Specifications

|    *Behavior*   |    *Input 1*    |    *Input 2*    |     *Output*    |
|-----------------|-----------------|-----------------|-----------------|
| Players choose the same symbol.  | "rock" | "rock" | draw |
| Players choose different symbols.  | "rock" | "scissors" | Input 1 wins |
| Players choose different symbols.  | "rock" | "paper" | Input 2 wins |
| Players choose different symbols.  | "paper" | "scissors" | Input 2 wins |



## Known Bugs

_None so far._

## Support and contact details

_Please contact michaela.delight@gmail.com or seanpeterson11@gmail.com with concerns or comments._

## Technologies Used

* _HTML_
* _CSS_
* _PHP_
* _PHPUnit_
* _Composer_
* _Silex_
* _Twig_

### License

*MIT license*

Copyright (c) 2017 **_Michaela Davis & Sean Peterson_**
