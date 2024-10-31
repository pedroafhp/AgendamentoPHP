<?php
    namespace PHP\Modelo; //Definir o Local do Projeto

    require_once('Paciente.php'); //Requisitando uma Classe
    require_once('Pessoa.php');
    require_once('Recepcionista.php');
    require_once('Medico.php');
    require_once('Endereco.php');
    require_once('Agendar.php');
    require_once('Exame.php');

    use PHP\Modelo\Paciente; //Definir a Classe
    use PHP\Modelo\Pessoa;
    use PHP\Modelo\Recepcionista;
    use PHP\Modelo\Medico;
    use PHP\Modelo\Endereco;
    use PHP\Modelo\Agendar;
    use PHP\Modelo\Exame;

    $endCliente = new Endereco("Avenida","400","Centro","São Bernardo do Campo","São Paulo","Brasil","09950-000");
    $paciente = new Paciente("12345","Eduardo","1197070",$endCliente); //Criar um Objeto
    $recepcionista = new Recepcionista("12","Luisa","13",3000.00,$endCliente);
    $medico = new Medico("123","Ricardo Ciático","2020",15000.50,$endCliente);
    $agendar = new Agendar($paciente, "Gastro010", "Presencial", "Gastroenterologia", "05/11/2024 - 14:15");
    $exame = new Exame($paciente, "End015", "Endoscopia", "10/11/2024 - 07:30");

    echo $paciente -> imprimir();
    echo $endCliente -> imprimir()."<br>";
    
    echo $recepcionista -> imprimir();
    echo $endCliente -> imprimir()."<br>";

    echo $medico -> imprimir();
    echo $endCliente -> imprimir()."<br>";

    echo $agendar -> imprimir()."<br>";
    $agendar -> cancelar();
    echo $agendar -> imprimir()."<br>";

    echo $exame -> imprimir()."<br>";
    $exame -> cancelar();
    echo $exame -> imprimir()."<br>";
    
?>