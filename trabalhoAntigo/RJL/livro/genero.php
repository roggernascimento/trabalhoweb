<?php 
    class Book{
        private $id;
        private $descricao;
        
        public function getId(){
            return $this->id;
        }
        
        public function getDescricao(){
            return $this->descricao;
        }

        public function setId($a){
             $this->id = $a;
        }
        
        public function setDescricao($a){
             $this->id = $a;
        }
     
    }

?>