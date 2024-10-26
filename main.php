<?php
    namespace PHP\Modelo; //Definir o Local do Projeto

    require_once('Paciente.php'); //Requisitando uma Classe
    require_once('Pessoa.php');
    require_once('Recepcionista.php');
    require_once('Medico.php');
    require_once('Endereco.php');

    use PHP\Modelo\Paciente; //Definir a Classe
    use PHP\Modelo\Pessoa;
    use PHP\Modelo\Recepcionista;
    use PHP\Modelo\Medico;
    use PHP\Modelo\Endereco;

    $endCliente = new Endereco("Avenida","400","Centro","São Bernardo do Campo","São Paulo","Brasil","09950-000");
    $paciente = new Paciente("12345","Pedro","1197070",$endCliente,"Tomografia"); //Criar um Objeto
    $recepcionista = new Recepcionista("12","Luisa","13",3000.00,$endCliente);
    $medico = new Medico("123","Ricardo","2020",2150.35,$endCliente);

    echo $paciente -> imprimir();
    echo $endCliente -> imprimir()."<br>";

    echo $recepcionista -> imprimir();
    echo $endCliente -> imprimir()."<br>";

    echo $medico -> imprimir();
    echo $endCliente -> imprimir();

?>