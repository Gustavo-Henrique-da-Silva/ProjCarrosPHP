<?php 
namespace App\Models;

class Carro extends Veiculo{
  private string $nome;
  private string $marca;
  private string $motor;

  

  public function setmotor($motor){
    $this->motor = $motor;
  }
    
  public function acelerar() {
    
    if ($this->motor=="MotorFusca"){
        return "Vrummm...";
    }
    else if ($this->motor=="MotorFerrari") {
        return "VRRRUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUUMMMMMMMMMMMMMM...";
    }

    else if ($this->motor=="MotorLamborghini") {
        return "VVRRRUMMMMM!!!!!";
    }

    else if ($this->motor=="MotorCamaro") {
        return "VRIIIIMMMMMMM...";
    }

    else if($this->motor=="MotorFordKa") {
        return "Vruummmm";
    }
    
    else if($this->motor=="MotorCelta") {
        return "Vrammmmmm..";
    }
      
    
  }

    

  public function getmarca() {
    return $this->marca;
    
  }

  public function setmarca($marca){
    $this->marca = $marca;
  }
}