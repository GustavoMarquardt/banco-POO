<?php

    namespace Alura\Banco\Modelo\Conta;

use Alura\Banco\Modelo\Pessoa\Pessoa;
use Alura\Banco\Modelo\Pessoa\Endereco;

    abstract class ContaGenerica{
        //titular = class Pessoa, dados da pessoa que está criando a conta
        protected $titular;
        protected $saldo;
        protected $endereco;

        public function __construct(Pessoa $titular,Endereco $endereco, float $saldo)
        {
            $this->titular = $titular;
            $this->saldo = $saldo;
            $this->endereco = $endereco;
        }

        protected function pegaTitular(){
            return $this->titular;
        }
        protected function pegaSaldo(){
            return $this->saldo;
        }
        protected function pegaEndereco(){
            return $this->endereco;
        }
    }