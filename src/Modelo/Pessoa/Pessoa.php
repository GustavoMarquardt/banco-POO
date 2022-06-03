<?php 

    namespace Alura\Banco\Modelo\Pessoa;

    class Pessoa {

        protected $nome;
        protected $cpf;

        public function __construct(string $nome,string $cpf)
        {
            $this->$nome = $nome;
            $this->$cpf = $cpf;
        }
        public function recuperaNome(){
            return $this->nome;
        }
        public function recuperaCPF(){
            return $this->cpf;
        }
        protected function validaNome(string $nomeTitular){
            if(strlen($nomeTitular > 5)){
                echo "O nome precisa ser maior do que 5";
                exit();
            }
        }
    }