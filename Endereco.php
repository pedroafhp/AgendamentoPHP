<?php
    namespace PHP\Modelo;

    class Endereco{
        private string $logradouro;
        private int $numero;
        private string $bairro;
        private string $cidade;
        private string $estado;
        private string $pais;
        private string $cep;

        public function __construct(string $logradouro, int $numero, string $bairro, string $cidade, string $estado, string $pais, string $cep)
        {
            $this -> logradouro = $logradouro;
            $this -> numero = $numero;
            $this -> bairro = $bairro;
            $this -> cidade = $cidade;
            $this -> estado = $estado;
            $this -> pais = $pais;
            $this -> cep = $cep;
        }//Fim do Método Construtor

        //Métodos Gets e Sets
        public function __get(string $campo):mixed //Get Altera o Dado
        { 
            return $this -> campo;
        }//Fim do Método Get

        public function __set(string $campo, string $valor):void //Set Consulta o Dado
        {
            $this -> campo = $valor;
        }//Fim do Método Set

        public function imprimir():string
        {
            return  "<br>Logradouro: ".$this -> logradouro.
                    "<br>Número: ".$this -> numero.
                    "<br>Bairro: ".$this -> bairro.
                    "<br>Cidade: ".$this -> cidade.
                    "<br>Estado: ".$this -> estado.
                    "<br>País: ".$this -> pais.
                    "<br>CEP: ".$this -> cep;
        }//Fim do Imprimir

    }//Fim da Classe

?>