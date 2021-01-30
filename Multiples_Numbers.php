<?php
class Multiples_Numbers{
    //[DECLARATIONS VARS]
    private $multiples = array();
    private $init;
    private $end;

    private $numbers = array();

    function __construct(){
        //[CONSTRUCT INITIALIZE VARS]
        $this->multiples = array();
        $this->init = 0;
        $this->end = 0;
    }

    //[INIT SET & GET VARS]
    public function setMultiples($multiples){
        $this->multiples = $multiples;
    }

    public function setInit($init){
        $this->init = $init;
    }

    public function setEnd($end){
        $this->end = $end;
    }

    public function getInit(){
        return $this->init;
    }

    public function getEnd(){
        return $this->end;
    }
    //[END SET & GET VARS]

    //[INIT METHOD SECTION]
    public function calculate_mcm($n1, $n2){
        //calculate least common multiple between two numbers
        return ($n1 * $n2) / $this->calculate_mcd($n1, $n2);
    }

    public function calculate_mcd($n1, $n2) {
        while (($n1 % $n2) != 0) {
            $temp = $n2;
            $n2 = $n1 % $n2;
            $n1 = $temp;
        }
        return $n2;
    }

    public function initArrayNumbers()
    {
        //range required
        $this->numbers = $this->pushNumbers($this->init, $this->end);
    }

    public function pushNumbers($init, $end){
        $array_numbers = array();
        for($i = $init; $i <= $end; $i++){
            array_push($array_numbers, $i);
        }
        return $array_numbers;
    }

    public function display(){
        $this->calculate();
        for($i = 0; $i < count($this->numbers); $i++){
            print($this->numbers[$i].'<br>');
        }
    }

    public function mod($number, $multiple){
        return $number % $multiple;
    }

    private function calculate(){
        for($i = 0; $i < count($this->numbers); $i++){
            foreach($this->multiples as $key => $value){
                if( $this->mod($this->numbers[$i], $key) == 0){
                    $this->numbers[$i] = $value;
                    break;
                }
            }
            continue;
        }
    }
    //[END METHOD SECTION]
}
?>