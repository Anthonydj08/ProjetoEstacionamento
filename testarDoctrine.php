<?php
require_once 'bootstrap.php';
require_once 'application/models/Pessoa.php';
require_once 'application/models/Veiculo.php';

$pessoa = new Pessoa("mario");
$veiculo = new Veiculo("novo veiculo");

$novaPessoaNome = $argv[1];
$novaPessoaTelefone = $argv[2];

$pessoa = new Pessoa($novaPessoaNome, $novaPessoaTelefone);
$pessoa->getVeiculo()->add($veiculo);

$veiculo->getPessoa()->add($pessoa);

$entityManager->persist($pessoa);
$entityManager->persist($veiculo);

$entityManager->flush();

echo "criado pessoa " . $pessoa->getNome() . " com o telefone " . $pessoa->getTelefone() . ".\n";