<?php
//atributos
class Vehiculo {
    
public $placa;
public $marca;
public $modelo;
public $kilometraje;
public $velocidad;
public $tiempo;
//contructor
public function __construct($vrplaca,$vrmarca,$vrmodelo,$vrkilometraje,$vrvelocidad,$vrtiempo){
    $this->placa=$vrplaca;
    $this->marca=$vrmarca;
    $this->modelo=$vrmodelo;
    $this->kilometraje=$vrkilometraje;
    $this->fecha_r=date('d,m,y');
    $this->velocidad=$vrvelocidad;
    $this->tiempo=$vrtiempo;
}

public function getVehiculo()
{

    $arrayVehiculo = array(
        'placa: '=> $this -> placa,
        'Marca: '=> $this -> marca,
        'Fecha registro: '=> $this ->fecha_r,
    );
    return $arrayVehiculo;

}
    public function calculo_distancia(){
        $vr_distancia = $this ->velocidad * $this->tiempo;
        return $vr_distancia;
    }
    public function getMARCA(){
        return $this->marca;
    }
    //setter asignar la informacion al atrubuto marca
    public function setMarca($marca){
        $this->marca = $marca;
    }
}


?>