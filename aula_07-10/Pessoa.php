<?php
     class Pessoa{
        private $nome;
        private $sobrenome;
        private $idade;
        
        public function setNome($novoNome){
            $this->nome = $novoNome;
        }
        public function getNome(){
            return $this->nome ;
        }
        public function setSobrenome($novoSobrenome){
            $this->sobrenome = $sobrenome;
        }
        public function getSobrenome(){
            return $this->sobrenome ;
        }
        public function setIdade($novaIdade){
            $this->idade = $novaIdade;
        }
        public function getIdade(){
            return $this->idade ;
        }

        public function __construct($nome,$sobrenome,$idade){
           // echo "A classe ".__CLASS__." foi instanciada <br>";
           $this->nome = $nome;
           $this->sobrenome = $sobrenome;
           $this->idade = $idade;
        }

        public function __toString(){
            $resultado=
                "Nome: ".$this->nome." ".$this->sobrenome."<br>".
                "Idade: ".$this->idade;
                
            return $resultado;
            
        }
        

    }
?>