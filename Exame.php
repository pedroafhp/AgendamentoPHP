<?php
    namespace PHP\Modelo;

    require_once('Paciente.php');
    require_once('Endereco.php');
    use PHP\Modelo\Paciente;
    use PHP\Modelo\Endereco;

    Class Exame{
        private string $codExame;
        private string $tpoExame;
        private string $dtaExame;
        public Paciente $pessoa;

        public function __construct(Paciente $paciente, string $codExame, string $tpoExame, string $dtaExame)
        {
            $this -> pessoa = $paciente;
            $this -> codExame = $codExame;
            $this -> tpoExame = $tpoExame;
            $this -> dtaExame = $dtaExame;
        }//Fim do Construtor

        //Métodos Gets e Sets
        public function __get(string $valor):mixed //Get Altera o Dado
        { 
            return $valor;
        }//Fim do Método Get

        public function __set(string $nomeVariavel, string $novoDado):void //Set Consulta o Dado
        {
            $this -> nomeVariavel = $novoDado;
        }//Fim do Método Set

        public function cancelar()
        {
            $end = new Endereco('',0,'','','','','');
            $this -> pessoa = new Paciente('','','',$end);
            $this -> codExame = "";
            $this -> tpoExame = "";
            $this -> dtaExame = "";
        }//Fim do Cancelar

        public function imprimir():string
        {
            return  $this -> pessoa -> imprimir().
                    "<br>Código do Exame: ".$this -> codExame.
                    "<br>Exame Agendado: ".$this -> tpoExame.
                    "<br>Data do Exame: ".$this -> dtaExame;
        }//Fim do Imprimir
    
    }//Fim da Classe

?>