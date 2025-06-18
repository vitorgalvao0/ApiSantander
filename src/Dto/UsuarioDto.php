<?php 
namespace App\Dto;

class UsuarioDto{
    private string $nome;
    private string $email;
    private string $telefone;

    public function getNome(){
        return $this->nome;
    }
    public function setNome($nome){
        return $this->nome = $nome;
    }

    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        return $this->email = $email;
    }

    public function getTelefone(){
        return $this->telefone;
    }
    public function setTelefone($telefone){
        return $this->telefone = $telefone;
    }
}