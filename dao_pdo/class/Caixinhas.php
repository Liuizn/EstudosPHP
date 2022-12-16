<?php

    class Caixinhas
    {
        private $id;
        private $ID_Cliente;
        private $Sequencial;
        private $Nome;
        private $Meta;
        private $Atual;
        private $Prazo_Inicial;
        private $Prazo_Final;
        private $Status;


        public function loadByCliente()
        {
            $database = new Database();

            $params = array(
                ":Cliente" => "112"
            );

            $result = $database->select("SELECT * FROM caixinhas WHERE ID_Cliente = :Cliente LIMIT 1", $params);

            if(empty($result) === false)
            {
                ###programar aqui o set dos registros e também o toString para cuspir da classe.
            }
        }

        public function getID_Cliente()
        {
            return $this->ID_Cliente;
        }

        public function setID_Cliente($value) 
        {
            $this->ID_Cliente = $value;
        }

        public function getSequencial()
        {
            return $this->Sequencial;
        }

        public function setSequencial($value)
        {
            $this->Sequencial = $value;
        }

        public function getNome()
        {
            return $this->Nome;
        }

        public function setNome($value)
        {
            $this->Nome = $value;
        }

        public function getMeta()
        {
            return $this->Meta;
        }

        public function setMeta($value)
        {
            $this->Meta = $value;
        }

        public function getAtual()
        {
            return $this->Atual;
        }

        public function setAtual($value)
        {
            $this->Atual = $value;
        }

        public function getPrazo_Inicial()
        {
            return $this->Prazo_Inicial;
        }

        public function setPrazo_Inicial($value)
        {
            $this->Prazo_Inicial = $value;
        }

        public function getPrazo_Final()
        {
            return $this->Prazo_Final;
        }

        public function setPrazo_Final($value)
        {
            $this->Prazo_Final = $value;
        }

        public function getStatus()
        {
            return $this->Status;
        }

        public function setStatus($value)
        {
            $this->Status = $value;
        }
    }
?>