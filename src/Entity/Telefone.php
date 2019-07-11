<?php

namespace Estudo\Doctrine\Entity;

/**
 * @Entity
 */
class Telefone{

  /**
   * @id
   * @GeneratedValue
   * @Column (type="integer")
   */
  private $id;

  /**
   * @Column (type="string")
   */
  private $numero;

  /**
   * @ManyToOne(targetEntity="Aluno")
   */
  private $aluno;

  public function __construct()
  {
    $this->telefones = new ArrayCollection();
  }

  public function getId(): int
    {
        return $this->id;
    }


    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }


    public function getNumero(): string
    {
        return $this->numero;
    }


    public function setNumero(string $numero): self
    {
        $this->numero = $numero;
        return $this;
    }

    public function getAluno(): Aluno
  {
      return $this->aluno;
  }

  public function setAluno(string $aluno): self
  {
      $this->aluno = $aluno;
      return $this;
  }

    public function addTelefone(Telefone $telefone)
    {
      $this->telefones->add($telefone);
    }

    public function getTelefones(): Colection
    {
      return $this->telefones;
    }

}