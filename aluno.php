<?php
require_once("pessoa.php");

class aluno extends pessoa{
  private $matricula;

  public function __toString()
  {
    $dados = "nome". $this->getNome();
    $dados = "|rg". $this->getrg();
    $dados = "|idade". $this->getIdade();
    $dados = "|matricula". $this->getMatricula();
    $dados = "\n";
    return $dados;
  }
  /**
   * Get the value of matricula
   */
  public function getMatricula()
  {
    return $this->matricula;
  }

  /**
   * Set the value of matricula
   */
  public function setMatricula($matricula): self
  {
    $this->matricula = $matricula;

    return $this;
  }
}
