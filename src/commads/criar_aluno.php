<?php 
require_once __DIR__ . '/../vendor/autoload.php';

use Estudo\Doctrine\Entity\Aluno;

$aluno = new Aluno();
$aluno->setNome('Ray Everton');

$entityManagerFactory = new EntityManagerFactory();
$entityManager = $entityManagerFactory->getEntityManager();

$entityManager->persist($aluno);

$entityManager->flush();