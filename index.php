<?php
    //PHP VERSION 7.2.34 
    //require class
    require_once('Multiples_Numbers.php');
    //instance 
    $mn = new Multiples_Numbers();
    //multiples 3, 5... to know if a number is multiple of 3 or 5 it necesary calculate mcm (least common multiple).
    //MCM(3 , 5 ) = 15
    $mcm = $mn->calculate_mcm(3, 5);
    $multiples = array(
        $mcm    => 'Integraciones',
        3       => 'Falabella',
        5       => 'IT'
    );
    $mn->setMultiples($multiples);
    //range required [1-100].
    $mn->setInit(1);
    $mn->setEnd(100);
    //execute method 'initArrayNumbers' to store or reserve a memory space.
    $mn->initArrayNumbers();
    //execute method 'display'.
    $mn->display();
?>
