<?php 

use Estudo\Doctrine\Entity\Aluno;
use Estudo\Doctrine\Entity\Telefone;
use Estudo\Doctrine\Helper\EntityManagerFactory;

require_once __DIR__ . '/../vendor/autoload.php';

$aluno = new Aluno();
$aluno->setNome($argv[1]);

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

for ($i = 2; $i < $argc; $i++) {
  $numeroTelefone = $argv[$i];
  $telefone = new Telefone();
  $telefone->setNumero($numeroTelefone);

  $aluno->addTelefone($telefone);
}

$entityManager->persist($aluno);

$entityManager->flush();