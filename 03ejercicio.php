<?php

class auto{
    public $marca;
    public $modelo;
    public $cilindraje;
    public $color;
    public $soat;



    function __construct($vrmarca, $vrmodelo,$vrcilindraje, $vrcolor,)
    {
        $this->marca = $vrmarca;
        $this->modelo= $vrmodelo;
        $this->cilindraje = $vrcilindraje;
        $this->color= $vrcolor;
       

    }


    public function getmarca(){
        return ($this ->marca);
    } public function getmodelo(){
        return ($this ->modelo);
    }public function getcilindraje(){
        return ($this ->cilindraje);
    }public function getcolor(){
        return ($this ->color);
    }public function pagosoat(){
        if ($this->modelo=2020 and $this->cilindraje=1800){
            echo"el pago de su SOAT corresponde a $425.000";

        }elseif ($this->modelo=2011 and $this->cilindraje=1500){
            echo"el pago de su SOAT corresponde a $345.000";
        }elseif ($this->modelo>=2021 and $this->cilindraje>=1900){
            echo"el pago de su SOAT corresponde a $425.000";
        }
            
        
    }

}

$auto1= new auto ('mazda' ,2013, 1100,"verde");
echo "MARCA"."<br>".$auto1->getmarca(). "<br>";
echo  "<br>";
echo "MODELO"."<br>". $auto1->getmodelo(). "<br>";
echo  "<br>";
echo "CILINDRAJE"."<br>".$auto1->getcilindraje(). "<br>";
echo  "<br>";
echo "COLOR"."<br>".$auto1->getcolor(). "<br>";
echo  "<br>";
echo "<br>".$auto1->pagosoat(). "<br>";
echo  "<br>";



$auto2 =new auto("chevroler",2011,1500,"negro");
echo "MARCA"."<br>".$auto2->getmarca(). "<br>";
echo  "<br>";
echo "MODELO"."<br>". $auto2->getmodelo(). "<br>";
echo  "<br>";
echo "CILINDRAJE"."<br>".$auto2->getcilindraje(). "<br>";
echo  "<br>";
echo "COLOR"."<br>".$auto2->getcolor(). "<br>";
echo  "<br>";
echo  "<br>";
echo "<br>".$auto2->pagosoat(). "<br>";
echo  "<br>";


$auto3 =new auto("Nisan",2020,1800,"blanco");
echo "MARCA"."<br>".$auto3->getmarca(). "<br>";
echo  "<br>";
echo "MODELO"."<br>". $auto3->getmodelo(). "<br>";
echo  "<br>";
echo "CILINDRAJE"."<br>".$auto3->getcilindraje(). "<br>";
echo  "<br>";
echo "COLOR"."<br>".$auto3->getcolor(). "<br>";
echo  "<br>";
echo  "<br>";
echo "<br>".$auto3->pagosoat(). "<br>";
echo  "<br>";








