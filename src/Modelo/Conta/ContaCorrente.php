<?php

    namespace Alura\Banco\Modelo\Conta;

    use Alura\Banco\Modelo\Pessoa\Pessoa;
    use Alura\Banco\Modelo\Pessoa\Endereco;

    class ContaCorrente extends ContaGenerica
    {
        public function __construct(Pessoa $titular, Endereco $endereco, float $saldo)
        {
            parent::__construct($titular, $endereco, $saldo);
        }

        public function saca(float $valorASacar): void
        {
            $this->saldo -= $valorASacar-  0.10;
        }
        public function deposita(float $valorADepositar): void
        {
            $this->saldo += $valorADepositar;
        }
    }