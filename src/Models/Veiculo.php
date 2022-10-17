<?php 
namespace App\Models;
class Veiculo{
  private string $nome;
  private string $ano;
  private string $cor;

   

  public function getnome() {
    return $this->nome;
    
  }

  public function setnome(string $nome){
    $this->nome = $nome;
  }

  public function getano() {
    return $this->ano;
    
  }

  public function setano(string $ano){
    $this->ano = $ano;
  }

  public function getcor() {
    return $this->cor;
    
  }

  public function setcor(string $cor){
    $this->cor = $cor;
  }
    
}