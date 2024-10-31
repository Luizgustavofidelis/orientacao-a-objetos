<?php
require_once("pessoa.php");

class professor extends pessoa{
  private $salario;
  public function __toString()
  {
    $dados = "nome". $this->getNome();
    $dados = "|rg". $this->getrg();
    $dados = "|idade". $this->getIdade();
    $dados = "|salario". $this->getSalario();
    $dados = "\n";
    return $dados;
  }
  /**
   * Get the value of salario
   */
  public function getSalario()
  {
    return $this->salario;
  }

  /**
   * Set the value of salario
   */
  public function setSalario($salario): self
  {
    $this->salario = $salario;

    return $this;
  }
}
