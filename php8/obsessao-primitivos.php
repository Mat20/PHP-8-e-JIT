<?php
class Cpf {

    private string $cpf;

    public function __construct(string $numeroCpf){
        $this->defineCpf($numeroCpf);
    }

    private function defineCpf(string $numeroCpf): void {
        if(!$numeroCpf) {
            throw new InvalidArgumentException();
        }
        $this->cpf = $numeroCpf;
    }
    public function __toString(): string
    {
        return $this->cpf;
    }
}
class Funcionario {

    public function __construct(
        public string $id,
        public string $nomeCompleto,
        public Cpf $cpf,
        public float $salario,
    ){

    }
}

     $funcionario = new Funcionario(
         'teste',
         'Matheus Souza Monteiro',
         new Cpf('11392833671'),
         1500
     );