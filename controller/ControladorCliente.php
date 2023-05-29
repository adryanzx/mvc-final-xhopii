<?php

require_once("../model/BancoDeDados.php");
require_once("../model/Cliente.php");

class ControladorCliente{



    private $bancoDeDados;

   

    public function cadastrarCliente($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senha){

        $cliente = new Cliente($cpf, $nome, $sobrenome, $dataNasc, $telefone, $email, $senha);
        $this->bancoDeDados->inserirCliente($cliente);
    }


    public function visualizarClientes(){
        $listaClientes =  $this->bancoDeDados->retornarClientes();
        while($cliente = mysqli_fetch_assoc($listaClientes)){
            "<section class=\"conteudo-bloco\">".
             "<h2>" . $cliente["cpf"] . " " . $cliente["nome"] . "</h2>".
             "<p>CPF: " . $cliente["sobrenome"] . "</p>".
             "<p>Data Nascimento: " . $cliente["dataNasc"] . "</p>".
             "<p>Telefone: " . $cliente["telefone"] . "</p>".
             "<p>E-mail: " . $cliente["email"] . "</p>".
             "<p>Senha: " . $cliente["senha"] . "</p>".
             "</section>";
        }
    }

}













?>