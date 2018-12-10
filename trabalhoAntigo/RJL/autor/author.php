<?php 
    class Author{
        private $id;
        private $nome;
        private $sobrenome;
        private $nacionalidade;
        private $data_nasc;
        
        public function getId(){
            return $this->id;
        }
        
        public function getNome(){
            return $this->nome;
        }
        
        
        public function getSobrenome(){
            return $this->sobrenome;
        }
        
        
        public function getNacionalidade(){
            return $this->nacionalidade;
        }
        
        
        public function getData_nasc(){
            return $this->data_nasc;
        }
        
        
//        public function getImage(){
//            return $this->image;
//        }
//    
        public function setId($a){
             $this->id = $a;
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
        public function setData_nasc($a){
             $this->data_nasc = $a;
        }
        

    }

?>