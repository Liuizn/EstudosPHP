<?php

    class Clientes
    {
        private $database;

        private $nome;
        private $email;
        private $carteira;
        private $login;
        private $senha;
        private $date;

        public function __construct()
        {
            $this->database = new Database();
        }

        public function loadById(int $id)
        {
            $params = array(
                ":ID" => $id
            );

            $result = $this->database->select("SELECT * FROM clientes WHERE id = :ID", $params);

            if(empty($result) === false)
            {
                $this->setNome($result[0]['nome']);
                $this->setEmail($result[0]['email']);
                $this->setCarteira($result[0]['carteira']);
                $this->setLogin($result[0]['login']);
                $this->setSenha($result[0]['senha']);
                $this->setDate(new DateTime($result[0]['date']));
            }
        }

        public function getList()
        {
            $params = array();

            return $this->database->select("SELECT * FROM clientes", $params);
        }

        public function __toString()
        {
            return json_encode(array(
                "nome"      => $this->getNome(),
                "email"     => $this->getEmail(),
                "carteira"  => $this->getCarteira(),
                "login"     => $this->getLogin(),
                "senha"     => $this->getSenha(),
                "date"      => $this->getDate()
            ));
        }

        private function setNome($value)
        {
            $this->nome = $value;
        }

        private function getNome()
        {
            return $this->nome;
        }

        private function setEmail($value)
        {
            $this->email = $value;
        }

        private function getEmail()
        {
            return $this->email;
        }

        private function setCarteira($value)
        {
            $this->carteira = $value;
        }

        private function getCarteira()
        {
            return $this->carteira;
        }

        private function setLogin($value)
        {
            $this->login = $value;
        }

        private function getLogin()
        {
            return $this->login;
        }

        private function setSenha($value)
        {
            $this->senha = $value;
        }

        private function getSenha()
        {
            return $this->senha;
        }

        private function setDate($value)
        {
            $this->date = $value;
        }

        private function getDate()
        {
            return $this->date;
        }
    }

?>