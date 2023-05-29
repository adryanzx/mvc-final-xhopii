<?php
require_once("../model/BancoDeDados.php");
require_once("../model/Funcionario.php");

class ControladorFuncionario{

    private $bancoDeDados;

    public function cadastrarFuncionario($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $salario){

        $funcionario = new Funcionario($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $salario);;
        $this->bancoDeDados->inserirFuncionario($funcionario);
    }

    public function visualizarFuncionario(){
        $listaFuncionarios =  $this->bancoDeDados->retornarFuncionario();
        while($funcionario = mysqli_fetch_assoc($listaFuncionarios)){
            "<section class=\"conteudo-bloco\">".
             "<h2>" . $funcionario["nome"] . " " . $funcionario["sobrenome"] . "</h2>".
             "<p>CPF: " . $funcionario["cpf"] . "</p>".
             "<p>Data Nascimento: " . $funcionario["dataNascimento"] . "</p>".
             "<p>Telefone: " . $funcionario["telefone"] . "</p>".
             "<p>E-mail: " . $funcionario["email"] . "</p>".
             "</section>";
        
        }
    }
}

?>