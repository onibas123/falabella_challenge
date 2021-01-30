# FALABELLA
## Challenge - Backend Developer
- This application search multiples numbers (3, 5 and both) in a range between 1 to 100. 
- If a number is multiple of 3, replace the number and print "Falabella".
- If a number is multiple of 5 print "IT".
- For the last one case when is multiple of both numbers (3 & 5) print "Integraciones".
- When the number is not a multiple of 3, 5 or both, only print it.

## Installation
- PHP: 7.2.34
- Apache: 2.4.46 (Win64)
- PHPUnit 8

## Usage
	- Clone or download this project into a folder or use it by default.
    - Go to your localhost/name_folder or by default "localhost/falabella".

## unit test example:
- To run test it´s necesary the following sentence: 
    "phpunit --bootstrap ../../Multiples_Numbers.php ../../Multiples_Numbers_Test.php"
    
    You need stay in root project, and open the terminal or console you need navigate to vendor\bin\ and execute phpunit:
    1) cd vendor
    2) cd bin
    output: (Directory to execute phpunit) 
    >>> \falabella\vendor\bin> 
    3) \falabella\vendor\bin> phpunit --bootstrap ../../Multiples_Numbers.php ../../Multiples_Numbers_Test.php
    
- The output is:

	8 / 8 (100%)
    Time: 45 ms, Memory: 4.00 MB
    There were 4 failures:

    1) Multiples_Numbers_Test::testMod_ERROR
    Failed asserting that 1 matches expected 0.

    >>> \falabella\Multiples_Numbers_Test.php:24

    2) Multiples_Numbers_Test::testPush_ERROR
    Failed asserting that 2 is identical to 3.

    >>> \falabella\Multiples_Numbers_Test.php:44

    3) Multiples_Numbers_Test::testMCM_ERROR
    Failed asserting that 30 matches expected 90.

    >>> \falabella\Multiples_Numbers_Test.php:65

    4) Multiples_Numbers_Test::testSetIni_ERROR
    Failed asserting that 7 matches expected 1.

    >>> \falabella\Multiples_Numbers_Test.php:87

    FAILURES!
    Tests: 8, Assertions: 9, Failures: 4.

	