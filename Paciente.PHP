<?php
    namespace PHP\Modelo;

    require_once('Pessoa.php');
    require_once('Endereco.php');
    use PHP\Modelo\Pessoa;
    use PHP\Modelo\Endereco;

    Class Paciente extends Pessoa{
        protected string $procedimento;

        public function __construct(string $cpf, string $nome, string $telefone, Endereco $endereco, string $procedimento)
        {
            parent:: __construct($cpf, $nome, $telefone, $endereco);
            $this -> procedimento = $procedimento;
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
                "<br>Procedimento Agendado: ".$this -> procedimento;
        }//Fim do Imprimir
    
    }//Fim da Classe

?>