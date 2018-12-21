<?php 
    class User{
        private $first_name;
        private $last_name;
        private $nacionalidade;
        private $data_nasc;
        private $generos;
        private $id;
        
        public function getNome(){
            return $this->nome;
        }
        
        
        public function getSobrenome(){
            return $this->sobrenome;
        }
        
        
        public function getNacionalidade(){
            return $this->nacionalidade;
        }
        
        
        public function getData(){
            return $this->data;
        }
        
        
        public function getGeneros(){
            return $this->generos;
        }
        
        public function getId(){
            return $this->id;
        }
        
        
        
        public function setNome($a){
             $this->nome = $a;
        }
        
        public function setSobrenome($a){
             $this->sobrenome = $a;
        }
        
        public function setNacionalidade($a){
             $this->nacionalidade = $a;
        }
        public function setData($a){
             $this->data_nasc = $a;
        }
        
        public function setGeneros($a){
             $this->generos = $a;
        }
    }

?>