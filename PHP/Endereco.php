<?php
    class Endereco{
        private string $rua;
        private string $numero;
        private string $cep;


        function __construct(string $rua, string $numero, string $cep){
            $this->rua = $rua;
            $this->numero = $numero;
            $this->cep = $cep;

        }//fim do construtor

        public function __get(string $receberVar)
        {
            return $this->$receberVar;
        }//fim do get

        public function __set(string $buscar, string $valor) : void
        {
            $this->buscar = $valor;
        }//fim do set

        public function __toString() : string 
        {
            return "<br> Rua: ".$this->rua."<br> Número: ".$this->numero."<br> CEP: ".$this->cep;
        }
    }


?>