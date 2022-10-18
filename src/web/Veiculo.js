class Veiculo{
  #nome;
  #ano;
  #cor;

    constructor(n,y,c){
        this.#nome=n;
        this.#ano=y;
        this.#cor=c;

  }

  get nome() {
    return this.#nome;
    
  }

  set nome(nome){
    this.#nome = nome;
  }

  get ano() {
    return this.#ano;
    
  }

  set ano(ano){
    this.#ano = ano;
  }

  get cor() {
    return this.#cor;
    
  }

  set cor(cor){
    this.#cor = cor;
  }
    
  get nome() {
    return this.#nome;
    
  }

  set nome(nome){
    this.#nome = nome;
  }
}