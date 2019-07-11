<?php

namespace Estudo\Doctrine\Entity;

/**
 * @Entity
 */
class Aluno{

  /**
   * @id
   * @GeneratedValue
   * @Column (type="integer")
   */
  private $id;

  /**
   * @Column (type="string")
   */
  private $nome;

  /**
   * @OneToMany(targetEntity=Telefone, mappedBy="aluno)
   */
  private $telefones;

  public function getId(): int
  {
      return $this->id;
  }

  public function getNome(): string
  {
      return $this->nome;
  }

  public function setNome(string $nome): self
  {
      $this->nome = $nome;
      return $this;
  }
}