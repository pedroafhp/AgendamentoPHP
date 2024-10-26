<?php
    namespace PHP\Modelo;
    require_once('Pessoa.php');
    require_once('Endereco.php');
    use PHP\Modelo\Pessoa;
    use PHP\Modelo\Endereco;

    class Recepcionista extends Pessoa{
        protected float $salario;

        public function __construct(string $cpf, string $nome, string $telefone, float $salario, Endereco $endereco)
        {
            parent:: __construct($cpf, $nome, $telefone, $endereco);
            $this -> salario = $salario;
        }//Fim do Construtor

        //Métodos Gets e Sets
        public function __get(string $nome):mixed //Get Altera o Dado
        { 
            return $this -> nome;
        }//Fim do Método Get

        public function __set(string $nomeVariavel, string $novoDado):void //Set Consulta o Dado
        {
            $this -> nomeVariavel = $novoDado;
        }//Fim do Método Set

        public function imprimir():string
        {
            return parent::imprimir().
                "<br>Salário: ".$this -> salario;
        }//Fim do Imprimir

    }//Fim da Classe

?>