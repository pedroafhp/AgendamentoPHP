<?php
    namespace PHP\Modelo;
    require_once('Endereco.php');
    require_once('Paciente.php');
    use PHP\Modelo\Paciente;
    use PHP\Modelo\Endereco;

    Class Agendar{
        private string $codConsulta;
        private string $agendamento;
        private string $especialidade;
        private string $data;
        public Paciente $pessoa;

        public function __construct(Paciente $paciente, string $codConsulta, string $agendamento, string $especialidade, string $data)
        {
            $this -> pessoa = $paciente;
            $this -> codConsulta = $codConsulta;
            $this -> agendamento = $agendamento;
            $this -> especialidade = $especialidade;
            $this -> data = $data;
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
            $this -> codConsulta = "";
            $this -> agendamento = "";
            $this -> especialidade = "";
            $this -> data = "";
        }//Fim do Cancelar

        public function imprimir():string
        {
            return  $this -> pessoa -> imprimir().
                    "<br>Código da Consulta: ".$this -> codConsulta.
                    "<br>Tipo de Consulta: ".$this -> agendamento.
                    "<br>Especialidade: ".$this -> especialidade.
                    "<br>Data da Consulta: ".$this -> data;
        }//Fim do Imprimir
    
    }//Fim da Classe

?>