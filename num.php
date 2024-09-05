<?php
$num =10;
$num = $num + 25;
echo $num;
?>php
class mycalculater {
    privete $_fval,$_sval;
    public function_constucter($fval,$sval){
        $this->_fval=$fval;
        $this->_sval=$sval;
    }
    public function add(){
        return $this->_fval+$this->_sval;
    }
    public function subtract(){
        retuen $this->_fval-$this->_sval;
    }
    public function multiply(){
        return $this->fval*$this->_sval;
    }
    public function divide(){
        return $this->fval/$this->_sval;
    }
}
$mycalc=new mycalculater(12,6);
echo $mycalc->add()."\n";
echo $mycalc->subtract()."\n";
echo $mycalc->multiply()."\n";
echo $mycalc->divide()."\n";
