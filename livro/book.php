<?php 
    class Book{
        private $id;
        private $titulo;
        private $datapub;
        private $resumo;
        private $destaque;
//        private $image;
//        private $id_autores;
        private $id_genero;
        private $id_editora;
        
        public function getId(){
            return $this->id;
        }
        
        public function getTitulo(){
            return $this->titulo;
        }
        
        
        public function getDatapub(){
            return $this->datapub;
        }
        
        
        public function getResumo(){
            return $this->resumo;
        }
        
        
//        public function getDestaque(){
//            return $this->destaque;
//        }
        
        
//        public function getImage(){
//            return $this->image;
//        }
//        
//        public function getId_autores(){
//            return $this->id_autores;
//        }
//        
        public function getId_genero(){
            return $this->id_genero;
        }
        
        public function getId_editora(){
            return $this->id_editora;
        }
        
        public function setId($a){
             $this->id = $a;
       }
            
        public function setTitulo($a){
             $this->titulo = $a;
        }
        
        public function setDatapub($a){
             $this->datapub = $a;
        }
        
        public function setResumo($a){
             $this->resumo = $a;
        }
//        public function setDestaque($a){
//             $this->destaque = $a;
//        }
        
//        public function setImage($a){
//             $this->image = $a;
//        }
        
//        public function setId_autores($a){
//             $this->id_autores = $a;
//        }
        
        public function setId_genero($a){
             $this->id_genero = $a;
        }
        
        public function setId_editora($a){
             $this->id_editora = $a;
        }
    }

?>