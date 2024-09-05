<form action = "#" method = "post">
Enter Number1 : <input type ="number" name = "num1"><br><br>
Enter Number2 : <input type ="number" name = "num2"><br><br>
Submit : <input type ="submit" name = "sub"><br><br>
</form>
<?php
if(isset($_POST["sub"]))
{


class Cal
{
   public $n1;
   public $n2;

   public function acc($n1,$n2)
  {
    $this->n1=$n1;
    $this->n2=$n2;
  }

    public function dis()
  {
    echo "Addition is : ".$this->n1+$this->n2;
  }

}

 $no1 = $_POST["num1"];
 $no2 = $_POST["num2"];

 $c=new Cal();

 $c->acc($no1,$no2);

 $c->dis();
  
}

?>