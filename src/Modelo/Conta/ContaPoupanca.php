<?php


namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Pessoa\Pessoa;
use Alura\Banco\Modelo\Pessoa\Endereco;


    class ContaPoupanca extends ContaGenerica{
        public function __construct(Pessoa $titular, Endereco $endereco, float $saldo)
        {
            parent::__construct($titular, $endereco, $saldo);
        }
        public function deposita(float $valorADepositar){
            $this->saldo += $valorADepositar;
        }
    }