<?php

class Cliente{
     //Atributos
     protected $nome;
     protected $sobrenome;
     protected $cpf;
     protected $dataNasc;
     protected $telefone;
     protected $email;
     protected $senha;
 
     //Construtor
     public function __construct($Nome,$Sobrenome,$Cpf,$DataNasc,$Telefone,$Email,$Senha){
         $this->nome = $Nome;
         $this->sobrenome = $Sobrenome;
         $this->cpf = $Cpf;
         $this->dataNasc = $DataNasc;
         $this->telefone = $Telefone;
         $this->email = $Email;
         $this->senha = $Senha;
     }
 
     //Getter e Setter
     public function get_Nome(){
         return($this->nome);
     }
 
     public function set_Nome($Nome){
         $this->nome = $Nome;
     }
 
     public function get_Sobrenome(){
         return($this->sobrenome);
     }
 
     public function set_Sobrenome($Sobrenome){
         $this->sobrenome = $Sobrenome;
     }
 
     public function get_Cpf(){
         return($this->cpf);
     }
 
     public function set_Cpf($Cpf){
         $this->cpf = $Cpf;
     }
 
     public function get_DataNasc(){
         return($this->dataNasc);
     }
 
     public function set_DataNasc($DataNasc){
         $this->dataNasc = $DataNasc;
     }
     public function get_Telefone(){
         return($this->telefone);
     }
 
     public function set_Telefone($Telefone){
         $this->telefone = $Telefone;
     }
     public function get_Email(){
         return($this->email);
     }
 
     public function set_Email($Email){
         $this->email = $Email;
     }
     public function get_Senha(){
         return($this->senha);
     }
 
     public function set_Senha($Senha){
         $this->senha = $Senha;
     }
    

}

?>