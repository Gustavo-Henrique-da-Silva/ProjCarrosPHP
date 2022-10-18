class Carro extends Veiculo{
  #nome;
  #marca;
 

  

  constructor(motor, n, m, y, c){
    super(n, y,c);
    this.motor = motor;
    this.#marca = m;


    
  }

    acelerar() {
      return this.motor.acelerar();
      
    }

  

  get marca() {
    return this.#marca;
    
  }

  set marca(marca){
    this.#marca = marca;
  }

}