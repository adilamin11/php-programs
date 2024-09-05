<form action="#" method="post">
Enter Number1 : <input type="number" name="n1"><br><br>
Enter Number2 : <input type="number" name="n2"><br><br>
<h3> Enter Your Choice :</h3>
Addition : <input type="radio" name="a">
Subtraction : <input type="radio" name="s">
Multiplication : <input type="radio" name="m">
Division : <input type="radio" name="d"><br><br>
Submit : <input type="submit" name="sub"><br><br>
</form>
<?php
    
if(isset($_POST["sub"]))
{
  class Calculator
  {
    public $c;
    public $no1;
    public $no2;
    public $ch;

    switch($ch)
    {
      case 'a':     
         public function add($no1,$no2)
       {
          $c=$no1+$no2;
          echo "Addition is : $no1 + $no2 = ".$c;
       }
        break;

      case 's':
         public function sub($no1,$no2)
       {
          $c=$no1-$no2;
          echo "Subtraction is : $no1 - $no2 = ".$c;
       }
        break;

      case 'm':
        public function mul($no1,$no2)
       {
          $c=$no1*$no2;
          echo "Multiplication is : $no1 * $no2 = ".$c;
       }
        break;

       
    case 'd':
       public function div($no1,$no2)
      {
         $c=$no1/$no2; 
         echo "Division is : $no1 / $no2 = ".$c; 
      }
       break;

      default : echo "Invalid Choice Plz Try Again ";
    }

}

   $n1=$_POST["n1"];
   $n2=$_POST["n2"];
   $ch=$_POST["ch"];

   $cal = new Calculator();






   /*$cal->add($n1,$n2);
   echo "<br>";
   $cal->sub($n1,$n2);
   echo "<br>";
   $cal->mul($n1,$n2);
   echo "<br>";
   $cal->div($n1,$n2);
   echo "<br>";*/
}
?>
