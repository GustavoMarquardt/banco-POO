<?php

include_once 'autoload.php';

use Alura\Banco\Modelo\Conta\ContaCorrente;
use Alura\Banco\Modelo\Pessoa\Endereco;
use Alura\Banco\Modelo\Pessoa\Pessoa;

// string $cidade, string $bairro, string $rua, string $numero
$conta = new ContaCorrente(new Pessoa('Gustavo Siqueira Marquardt', '147.243.206-13'), 
new Endereco('Machado', 'Jardim morada da serra', 'Rua dos Curimbatas', '160'), 500);
$conta->saca(100);
var_dump($conta);

